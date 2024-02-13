<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;


use Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {

        return view('pages.cart');
    }

    public function destroy($id, $cart)
    {
        if($cart == 'product')
        Cart::instance('product')->remove($id);

        session()->forget('coupon');

        if(request()->ajax()) {
            return response()->json(['message' => 'Product Deleted from the Cart.']);
        }
        return redirect()->back()->with('warning', 'Product has been removed');

    }

    public function update($id, $cart, Request $request)
    {   
        if($cart == 'product')
            Cart::instance('product')->update($id, $request->all());
        return response([], 200);
    }

    public function checkout() {
        if(Cart::instance('product')->count() > 0) {
            return view('pages.checkout');
        }
        return redirect()->route('cart.index')->withError('You have nothing in your cart , please add some products first');

    }

    public function orderStore(Request $request) {
        $order = $this->insertIntoOrdersTable($request, null);

        return redirect()->route('checkout.reqquote.received');
    }

    private function insertIntoOrdersTable($request, $error) {
        $user_id = null;
        if(Auth::user()) {
            $user_id = Auth::user()->id;
        }
        
        $state = $request->state;
        if( $state == 'OutsideUAE' && !empty($request->otherCity))
            $state = $request->otherCity;
        
        $order = Order::create([
            'user_id' => $user_id,
            'email' => $request->email,
            'name' => $request->name,
            'company' => $request->company,
            'city' => $state,
            'phone' => $request->phone,
            'error' => $error
        ]);

        $product = [];
        foreach (Cart::instance('product')->content() as $item) {
            $product_detail = [];
            OrderProduct::create([
                'product_id' => $item->model->id,
                'order_id' => $order->id,
                'quantity' => $item->qty
            ]);
            $product_detail['id'] = $item->model->id;
            $product_detail['name'] = $item->model->name;
            $product_detail['order_id'] = $order->id;
            $product_detail['qty'] = $item->qty;
            $product_detail['code'] = $item->model->code;
            $product_detail['image'] = $item->model->image;

            array_push($product, $product_detail);
                        
           Cart::instance('product')->remove($item->rowId);
        }
        
        $details['user']['name'] = $request->name;
        $details['user']['email'] = $request->email;
        $details['user']['company'] = $request->company;
        $details['user']['phone'] = $request->phone;
        $details['user']['city'] = $state;
        
        $details['user']['type'] = "Guest";
        $details['user']['id'] = null;
        if($user_id){
            $details['user']['type'] = "Registered";
            $details['user']['id'] = $user_id;
        }
        
        
        $details['products'] = $product;
        dispatch(new SendEmailJob($details));
            
        return $order;
    }

    public function compare() {

        return view('pages/compare');
    }

    public function addToCompare(Request $request) {
        $product = Product::where('id', $request->id)->first();
        $brand = $product->brand()->firstOrFail();

        $duplicates = Cart::instance('compare')->search(function($cartItem, $rowId) {
            return $cartItem->model->id == request()->id;
        });

        if($duplicates->isNotEmpty()) {
            return response()->json([
                'message' => 'This product is already in your compare cart.',
                'data'  =>  $request,
                'product'   =>  $product
            ], 200);
        }

        if(Cart::instance('compare')->count() === 4) {
            return response()->json([
                'message'   =>  'Please remove some items from Cart.',
                'data'      =>  $request,
                'product'   =>  $product
            ], 200);
        }

        Cart::instance('compare')->add([
            'id'    =>  $product->id,
            'name'  =>  $product->name,
            'qty'   =>  1,
            'price' =>  100,
            'options' => [
                'brand' => $brand,
                ]
        ])->associate('App\Models\Product');

        return response()->json([
            'message'   =>  'The product has been added to the compare cart.',
            'product'   =>  $product
        ], 200);
    }

    public function compareProducts() {
        $items = Cart::instance('compare')->content();

        $compareItems = collect();

        foreach($items as $item) {
            $compareItems[] = $item;
        }

        return response()->json($compareItems);
    }

    public function destroyCompare($id, $cart) {
        if($cart == 'product')
        Cart::instance('compare')->remove($id);

        if(request()->ajax()) {
            return response()->json(['message' => 'Product Deleted from the Compare Cart.']);
        }
        return redirect()->back()->with('warning', 'Product has been removed');
    }
}

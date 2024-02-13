<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\Category;

use Cart;
use Carbon\Carbon;


class AjaxController extends Controller
{
    public function banners() {
        $banners = Banner::all();

        return response()->json([
            'banners'   =>  $banners
        ]);

    }

    public function singleProduct($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $cartItems = Cart::instance('product')->content();        
        foreach($cartItems as $cartItem)
            if($product->id == $cartItem->id) 
                $product->inCart = TRUE;
            
        return response()->json($product);
    }

    public function getBrand($id) {
        $brand = Brand::findOrFail($id);

        return response()->json($brand);
    }

    public function getCategory($productId) {

        $product = Product::findorFail($productId);
        $category = $product->categories()->first();
        $parent = $category->parentId;
        
        return response()->json([
            'category' => $category,
            'product'   =>  $product,
            'parent'    =>  $parent
        ]);
        
    }

    public function getParent($categoryId) {

        $child = Category::where('id', $categoryId)->first();

        $parent = $child->parentId;
        
        return response()->json($parent);
    }

    public function cartStore(Request $request) {
        $product = Product::where('id', $request->id)->first();
        $brand = $product->brand()->firstOrFail();
        // dd($brand);
        if($product->quantity < $request->quantity) {
            return response()->json(['message' => 'The Product is out of stock.'], 500);
        }

        $duplicates = Cart::instance('product')->search(function($cartItem, $rowId) {
            return $cartItem->model->id == request()->id;
        });

        if($duplicates->isNotEmpty()) {
            return response()->json([
                'message' => 'This product is already in your cart.',
                'data'  =>  $request,
                'product'   =>  $product
            ], 200);
        }

        Cart::instance('product')->add([
            'id'    =>  $product->id,
            'name'  =>  $product->name,
            'qty'   =>  1,
            'price' =>  100,
            'options' => [
                'brand' => $brand,
                ]
        ])->associate('App\Models\Product');

        return response()->json([
            'message'   =>  'The product has been added to your cart.',
            'product'   =>  $product
        ], 200);
    }

    public function cartItems() {
        $items = Cart::instance('product')->content();

        $cartItems = collect();

        $subtotal = Cart::instance('product')->subtotal();

        foreach($items as $item) {
            $cartItems[] = $item;
        }

        return response()->json($cartItems);
    }

    public function searchCategory() {
        $categories = Category::where('parent_id', null)->get();

        return response()->json($categories);
        
    }

    public function emptyCart() {
        Cart::instance('product')->destroy();

        return response()->json(200);
    }

    public function latest(Request $request) {
        $pagination = $request->input('count', 12);
        
        if($request->category) {
            $category = Category::where('slug', $request->category)->firstOrFail();

            $products = $category->products()->paginate($pagination);
        } elseif($request->brand) {
            
            $brand = Brand::where('slug', $request->brand)->firstOrFail();

            $products = $brand->products()->paginate($pagination);

        } else {
            $products = Product::where('status', 1)
            ->where("created_at",">", Carbon::now()->subMonths(6))->orderBy('id', 'DESC')->paginate($pagination);
        }

        return response()->json($products);
    }

    public function wishlistItems() {
        $user = auth()->user();

        $wishlists = Wishlist::where('user_id', $user->id)->paginate(10);
        
        return response()->json('success');
    }

    public function orders() {
        $orders = auth()->user()->orders()->get();

        return response()->json($orders);
    }
}

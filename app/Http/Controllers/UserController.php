<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard() {
        $user = auth()->user();

        if(!$user){
            return redirect('/');
        }
        $orders = $user->orders()->get();

        // dd($orders);

        return view('account.dashboard')->with([
            'user'  =>  $user,
            'orders' => $orders
        ]);
    }

    public function order($tracking_id) {

        $order = Order::where('tracking_id', $tracking_id)->where('user_id', auth()->user()->id)->first();
        if(!$order)
        {
            return redirect()->back();
        }
        return view('account.order')->with([
            'order' =>  $order
        ]);
    }

    public function wishlist() {
        return;
        $user = auth()->user();

        $wishlists = Wishlist::where('user_id', $user->id)->get();
        // dd($products);
        $products = collect();

        foreach($wishlists as $wishlist) {

            $product = $wishlist->product()->get();
            $products->push(...$product);
        }
        $products = $products->paginate(20);
        // dd($products);
        return view('pages.wishlist')->with([
            'wishlists'  =>  $wishlists,
            'products'  =>  $products
        ]);
    }
}

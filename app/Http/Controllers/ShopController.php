<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

use Cart;
class ShopController extends Controller
{
    public function parent() {
        $parentCategories = Category::where('parent_id', null)->get();
        // dd($parentCategories);


        return view('shop.parent')->with('parentCategories', $parentCategories);
    }

    public function child($parent) {
        $parentCategory = Category::where('slug', $parent)->firstOrFail();

        $child = Category::where('parent_id', $parentCategory->id)->get();
        // dd($child);
        return view('shop.child')->with([
            'parentCategory'    =>  $parentCategory,
            'child'     =>  $child
        ]);
    }

    public function products($parent, $child) {
        if(request()->show)
        {
            $pagination = request()->show;
        } else {
            $pagination = 20;
        }
        
        $parentCategory = Category::where('slug', $parent)->firstOrFail();

        $childCategory = Category::where('slug', $child)->firstOrFail();

        if(request()->sort == 'old') {
            $products = $childCategory->products()->where('status', 1)
                        ->orderBy('id')
                        ->paginate($pagination);
                        
        } elseif(request()->sort == 'ASC') {
            $products = $childCategory->products()->where('status', 1)
                        ->orderBy('code', 'ASC')
                        ->paginate($pagination);
                        // dd($products);
        } elseif(request()->sort == 'DESC') {
            $products = $childCategory->products()->where('status', 1)
                        ->orderBy('code', 'DESC')
                        ->paginate($pagination);
        } else {
            $products = $childCategory->products()->where('status', 1)->orderBy('id', 'DESC')->paginate($pagination);
        }
        

        return view('shop.products')->with([
            'parentCategory'    =>  $parentCategory,
            'childCategory'     =>  $childCategory,
            'products'          =>  $products
        ]);
    }

    public function product($parent, $child, $slug) {
        $parentCategory = Category::where('slug', $parent)->firstOrFail();

        $childCategory = Category::where('slug', $child)->firstOrFail();

        $product = Product::where('slug', $slug)->firstOrFail();
        $productId = $product->id;

        $features = $product->features()->get();

        $relate = $product->related()->count();

        if ($relate > 0) {
            $related = $product->related()->where('status', 1)->get();
        } else {
            $related = Product::whereHas('categories.products', function ($q) use ($productId) {
                $q->where('product_id', $productId);
            })->where('id', '<>', $productId)->where('status', 1)->inRandomOrder()->limit(10)->get();
        }

        
        $product->file = json_decode($product->file);
        
        return view('shop.product')->with([
            'parentCategory'    =>  $parentCategory,
            'childCategory'     =>  $childCategory,
            'product'           =>  $product,
            'features'          =>  $features,
            'related'           =>  $related
        ]);
    }

    public function latest() {
        $products = Product::paginate(12);

        $categories = Category::where('parent_id', null)->get();

        $brands = Brand::whereNotNull('parent_id')->inRandomOrder()->limit(10)->get();

        $partners = Brand::whereNull('parent_id')->get();

        // dd($parent);
        return view('shop.latest')->with([
            'products'  =>  $products,
            'categories' => $categories,
            'brands'    =>  $brands,
            'partners'  =>  $partners
        ]);
    }

    public function search(Request $request) {
        $query = $request->search;
        if($request->category)
        {
            $parent = Category::where('slug', $request->category)->firstOrFail();
            $category = $parent->children()->pluck('id')->toArray();

            $products = Product::whereHas('categories', function($query) use ($category) {
                $query->whereIn('categories.id', $category);
            })
            ->where('status', 1)
            ->search($query)
            ->with('categories')
            ->paginate(10);
            
        }
        else {
            $products = Product::where('status', 1)->search($query)->paginate(10);
        }
        
        $cartItems = Cart::instance('product')->content();
        
        foreach($cartItems as $cartItem) {
            foreach($products as $product) 
                if($product->id == $cartItem->id)
                    $product->inCart = TRUE;
        }


        return view('pages.search')->with([
            'products' => $products,
            'query' => $query,
            'request'   =>  $request
        ]);
    }

    
}

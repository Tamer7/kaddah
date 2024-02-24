<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $categoryId = $request->category_id;

        $category = Category::find($categoryId);
        $parents = Category::getParentList($category)
            ->map(function ($_category) {
                return [
                    'title' => $_category->name,
                    'url' => route('categories.sub', $_category->id)
                ];
            });
        $parents->pop();
        $parents->prepend([
            'title' => 'All Categories',
            'url' => '/categories'
        ]);
        $products = Product::whereHas('categories', function (Builder $query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->get();

        return view('pages.products', compact('parents', 'category', 'products'));
    }

    public function product(Request $request, Product $product)
    {
        $productId = $product->id;

        $category = Category::where('id', $request->category_id)->first();

        $categoryNames = Category::getParentList($category)
            ->map(function ($_category) {
                return $_category->name;
            });
            
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
        
        return view('pages.product', compact('categoryNames', 'product', 'features', 'related'));
    }
}

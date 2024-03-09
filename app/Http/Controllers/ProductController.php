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
        $categorySlug = $request->category_slug;
        $search = $request->search;

        $category = [];
        $parents = collect([]);
        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->get()->first();
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
        }

        $products = Product::with('categories.parent')
            ->where('status', 1);
        if ($category) {
            $products = $products->whereHas('categories', function (Builder $query) use ($category) {
                $query->where('category_id', $category->id);
            });
        }
        if ($search) {
            $products = $products->search($search);
        }
        $products = $products->paginate(12);

        return view('pages.products', compact('parents', 'category', 'products'));
    }

    public function indexSpec($cateSlug, $subCateSlug)
    {
        $category = Category::where('slug', $subCateSlug)->get()->first();
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

        $products = Product::with('categories.parent')
            ->where('status', 1)
            ->whereHas('categories', function (Builder $query) use ($category) {
                $query->where('category_id', $category->id);
            })
            ->paginate(12);

        return view('pages.products', compact('parents', 'category', 'products'));
    }

    public function product(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)
            ->firstOrFail();

        $productId = $product->id;
        $categorySlug = $request->category_slug;

        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();
            $categoryNames = Category::getParentList($category)
                ->map(function ($_category) {
                    return $_category->name;
                });
        } else {
            $categoryNames = collect([]);
        }
            
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

    public function productSpec($cateSlug, $subCateSlug, $prodSlug)
    {
        $product = Product::where('slug', $prodSlug)
            ->firstOrFail();

        $productId = $product->id;
        $categorySlug = $subCateSlug;

        $category = Category::where('slug', $categorySlug)->first();
        $categoryNames = Category::getParentList($category)
            ->map(function ($_category) {
                return $_category->name;
            });
            
        $features = $product->features()->get();

        $relate = $product->related()->with('categories.parent')->count();

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

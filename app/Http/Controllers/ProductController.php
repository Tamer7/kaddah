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
        $parents = $category->getParentList($category)
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

    public function product(Request $request)
    {
        return 'test';
    }
}

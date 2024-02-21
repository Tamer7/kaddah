<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::with(['children' => function ($query) {
            $query->select(['id', 'name', 'slug', 'parent_id']);
        }])
            ->whereNull('parent_id')
            ->get();

        return view('pages.categories', compact('categories'));
    }

    public function subcategory(Category $category)
    {
        $categories = $category->children;
        $products = $category->products;
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
        $parents = $parents->toArray();

        return view('pages.categories', compact('parents', 'category', 'categories', 'products'));
    }
}

<?php

namespace App\Http\Controllers;


use App\Jobs\ContactMailJob;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Post;
use App\Models\Article;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::with(['products', 'children'])
            ->whereNull('parent_id')
            ->get();

        $events = Post::where('status', 'PUBLISHED')
            ->orderBy('published_date', 'DESC')->paginate(10);

        return view('home', compact('categories', 'events'));



        $parent = Category::where('parent_id', null)->get();

        //        $on_sale = Product::where('status', 1)->where('on_sale', 1)->get();
//        $featured = Product::where('status', 1)->where('featured', 1)->inRandomOrder()->limit(10)->get();

        $latest_products = Product::where('status', 1)->where("created_at", ">", Carbon::now()->subMonths(6))->orderBy('id', 'DESC')->limit(10)->get();

        $brands = Brand::whereNotNull('parent_id')->orderBy('id')->limit(20)->get();

        $events = Post::where('status', 'PUBLISHED')->get();
        $blogs = Article::where('status', 'PUBLISHED')->get();

        //        $best_seller = Product::select('products.*', DB::raw('COUNT(order_product.order_id) as order_count'))
//                            ->leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
//                            ->groupBy('products.id')
//                            ->orderBy('order_count', 'desc')
//                            ->take(9)
//                            ->get();

        // dd($latest_products);
        return view('welcome')->with([
            'parent' => $parent,
            //            'on_sale'   =>  $on_sale,
//            'featured'  =>  $featured,
            'latest_products' => $latest_products,
            'brands' => $brands,
            'events' => $events,
            'blogs' => $blogs,
            //            'best_seller' => $best_seller

        ]);
    }

    public function latest()
    {
        $pagination = 20;
        $allproducts = Product::where('akc', true);
        if (request()->category) {
            $category = Category::where('slug', request()->category)->get()->first();
            $products = $allproducts->where('category_id', $category->id);
            $tagName = $category->name;
        } else if (request()->tag) {
            $tag = Tag::where('slug', request()->tag)->get()->first();
            $tagName = $tag->name;
            $products = collect();
            $tag = $tag->children()->get()
                ->each(function ($tag) use (&$products) {
                    $products = $products->merge($tag->products);
                });
            $products = $products->where('akc', true)->where("created_at", ">", Carbon::now()->subMonths(6))->sortByDesc('id')->paginate($pagination);
            // dd($products);

        } else {
            $products = $allproducts->where("created_at", ">", Carbon::now()->subMonths(6))->orderBy('id', 'DESC')->paginate($pagination);
            $tagName = 'Latest Products';
        }
        // if(request()->sort == 'old') {
        //     $products = $products->orderBy('id')->paginate($pagination);
        // } else if(request()->sort == 'new') {
        //     $products = $products->orderBy('id', 'desc')->paginate($pagination);
        // } else {
        //     $products = $products->orderBy('id')->paginate($pagination);
        // }
        $parents = Tag::whereNull('parent_id')->get();
        $parentcategories = Category::WhereNull('parent_id')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('latest')->with([
            'products' => $products,
            'categories' => $categories,
            'tags' => $tags,
            'parents' => $parents,
            'tagName' => $tagName ?? null,
            'parentcategories' => $parentcategories,
        ]);
    }

    public function contactStore(Request $request)
    {
        $details['user']['name'] = $request->name;
        $details['user']['email'] = $request->email;
        $details['user']['mobile'] = $request->mobile;
        $details['user']['message'] = $request->message;

        // return view('pages.contact');
        dispatch(new ContactMailJob($details));

        return redirect()->route('contact.received');
    }

    public function modal($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('modal')->with('product', $product);
    }
}

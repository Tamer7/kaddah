<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use Carbon\Carbon;

class BrandController extends Controller
{
    public function index()
    {
        $allBrands = Brand::all();

        $globalBrands = Brand::where('slug', 'partners')
            ->first()
            ->children()->with('products')->get();
        $localBrands = Brand::where('slug', 'akc-brands')
            ->first()
            ->children()->with('products')->get();

        return view('brands.brands', compact('globalBrands', 'localBrands'));
    }

    public function show(Request $request, Brand $brand)
    {

        if($request->show) {
            $pagination = $request->show;
        } else {
            $pagination = 20;
        }

        if($request->sort == 'old') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('id')
                        ->paginate($pagination);

        } elseif($request->sort == 'ASC') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('code', 'ASC')
                        ->paginate($pagination);
                        // dd($products);
        } elseif($request->sort == 'DESC') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('code', 'DESC')
                        ->paginate($pagination);
        } else {
            $products = $brand->products()->where('status', 1)->orderBy('id', 'DESC')->paginate($pagination);

        }

        $product = $products;

        return view('brands.brand', compact('brand', 'products', 'product'));
    }
}

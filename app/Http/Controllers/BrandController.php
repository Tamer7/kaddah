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

        $mainBrands = Brand::where('slug', 'partners')
            ->first()
            ->children()
            ->whereIn('slug', ['iteam', 'kraenzle', 'elsea', 'excentr', 'eko', 'lmamachine'])
            ->with('products')
            ->get();

        
        return view('brands.brands', compact('globalBrands', 'localBrands', 'mainBrands'));
    }

    public function show(Request $request, $brand)
    {
        $brand = Brand::where('slug', $brand)
            ->firstOrFail();

        if($request->show) {
            $pagination = $request->show;
        } else {
            $pagination = 20;
        }

        $orderKey = 'id';
        $orderDir = 'DESC';
        if($request->sort == 'old') {
            $orderDir = 'ASC';
        } elseif($request->sort == 'ASC') {
            $orderKey = 'code';
            $orderDir = 'ASC';
        } elseif($request->sort == 'DESC') {
            $orderKey = 'code';
        }

        $products = $brand->products()
            ->with('categories.parent')
            ->where('status', 1)
            ->orderBy($orderKey, $orderDir)
            ->paginate($pagination);

        return view('brands.brand', compact('brand', 'products'));
    }
}

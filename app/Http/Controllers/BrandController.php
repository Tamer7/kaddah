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

        $brands = Brand::where('parent_id', null)->get();
        
        return view('brands.brands', compact('brands', 'allBrands'));
    }

    public function show($slug)
    {
        if(request()->show) {
            $pagination = request()->show;
        } else {
            $pagination = 20;
        }
        
        $brand = Brand::where('slug', $slug)->firstOrFail();

        // if (request()->show == '12') {
        //     $pagination = 12;
        // } elseif(request()->show == '20') {
        //     $pagination = 20;
        // } elseif(request()->show == '40') {
        //     $pagination = 40;
        // } elseif(request()->show == '70') {
        //     $pagination = 70;
        // } else {
        //     $pagination = 20;
        // }
        if(request()->sort == 'old') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('id')
                        ->paginate($pagination);
                        
        } elseif(request()->sort == 'ASC') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('code', 'ASC')
                        ->paginate($pagination);
                        // dd($products);
        } elseif(request()->sort == 'DESC') {
            $products = $brand->products()->where('status', 1)
                        ->orderBy('code', 'DESC')
                        ->paginate($pagination);
        } else {
            $products = $brand->products()->where('status', 1)->orderBy('id', 'DESC')->paginate($pagination);
            
        }
        
        return view('brands.brand')->with([
            'brand' =>  $brand,
            'products'  =>  $products
        ]);
    }
}

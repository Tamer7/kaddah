@extends('master')

@section('title', 'Discover Top Brands')
@section('description', 'At Kaddah Cleaning, we offer an extensive array of cleaning products and services for all your hygienic needs. Discover the best options that match your requirements.')
@section('content')

<!-- Start of Main -->
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title">OUR BRANDS</h1>
                    <h4 style="color: transparent; position: absolute;">
                        We offer a massive selection of brands and cleaning supplies, from well-known international cleaning products to locally made and locally distributed brands.
                        Some of these include ARTAX, Bonjour, Storm, Lacoste, and Royal Home
                    </h4>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <!-- <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>brands</li>
                    </ul>
                </div>
            </nav> -->
            <br />
            <!-- End of Breadcrumb -->
            
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <section class="default-section mb-7">
                        <div class="row title-wrapper">
                            <div class="tab tab-nav-boxed tab-nav-solid show-code-action">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    @foreach($brands as $brand)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first) active @endif" href="#{{$brand->slug}}">{{$brand->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content text-center">
                                    @foreach($brands as $brand)
                                    <div class="tab-pane @if($loop->first) active @endif" id="{{$brand->slug}}">
                                        <div class="row">
                                            @foreach($brand->children as $child)
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                                    <a href="{{route('brand.show', $child->slug)}}" class="brand-wrapper">
                                                        <img src="{{asset('storage/'.$child->image)}}" alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            
        </main>
        

@endsection
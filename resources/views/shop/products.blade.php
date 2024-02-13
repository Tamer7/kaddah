@extends('master')

@section('title', $childCategory->title ?? $childCategory->name)
@section('pkeywords', $childCategory->meta_page_keywords ?? '')
@section('description', $childCategory->meta_description ?? '')

@section('content')

 <!-- Start of Main -->
 <main class="main">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href="/">Home</a></li>
                <li><a href="/category">Shop</a></li>
                <li><a href="/category/{{$parentCategory->slug}}">{{$parentCategory->name}}</a></li>
                <li>{{$childCategory->name}}</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content mb-10">
        @if($childCategory->page_hyperlinks)
            @foreach(json_decode($childCategory->page_hyperlinks) as $hyperlink) 
                <a href="{{$hyperlink->url}}" style="color: transparent; position: absolute;">
                    {{$hyperlink->name}}
                </a>
            @endforeach
        @endif
        @if(!$childCategory->banner)
        <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
            style="background-image: url({{asset('/images/categories/default.jpg')}}); background-color: var(--primary-color);">
               
            <div class="container banner-content">
                <h4 class="banner-subtitle font-weight-bold">{{$parentCategory->name}}</h4>
                <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{$childCategory->name}}</h3>        
                <a href="/category/{{$parentCategory->slug}}" class="btn btn-dark btn-rounded btn-icon-right">Discover
                    ALL<i class="w-icon-long-arrow-right"></i></a>
            </div>            
        </div>
        @else 
        <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
            style="padding-left: 0px; padding-right:0px;"
        >
            <img src="{{Voyager::image($childCategory->banner)}}" style="width: 100%">
            <div class="container banner-content" id="img-banner-content">
                <a href="/category/{{$parentCategory->slug}}" class="btn btn-dark btn-icon-right">
                    Discover ALL<i class="w-icon-long-arrow-right"></i></a>
            </div>
        </div>
        @endif
        @if($childCategory->page_header_1)
        <div class="accordion accordion-bg accordion-gutter-md accordion-border">
            <div class="card">
                <div class="card-header"> 
                    <a href="#collapse1" class="collapse">About</a>
                </div>
            
                <div id="collapse1" class="card-body expanded" style="margin-left: 0.5%;">
                    <h1 style="font-size: 14px; font-weight: normal;">
                        {{$childCategory->page_header_1}}
                    </h1>
                </div>
            </div>
        </div>
        @endif
        @if($childCategory->description)
        <div class="accordion accordion-bg accordion-gutter-md accordion-border">
            <div class="card">
                <div class="card-header"> 
                    <a href="#collapse1" class="collapse">Description</a>
                </div>
            
                <div id="collapse1" class="card-body expanded" style="margin-left: 0.5%;">
                    <h4 style="font-size: 14px; font-weight: normal;" class="categ-description"> 
                        {!! $childCategory->description !!}
                    </h4>
                </div>
            </div>
        </div>
        <br /><br />
        @endif
        <!-- End of Shop Banner -->
        <div class="container-fluid">
            <!-- Start of Shop Content -->
            <div class="shop-content">
                <!-- Start of Shop Main Content -->
                <div class="main-content">
                <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <label>Sort By :</label>
                                <select name="orderby" class="form-control" onchange="window.location.href=this.value;">
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug]) }}" {{ request()->sort ? '' : 'selected' }}>Default sorting</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => 'old']) }}" {{ request()->sort == 'old' ? 'selected' : '' }}>Sort by Oldest</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => 'ASC']) }}" {{ request()->sort == 'ASC' ? 'selected' : '' }}>Sort by Code: A to Z</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => 'DESC']) }}" {{ request()->sort == 'DESC' ? 'selected' : '' }}>Sort by Code: Z to A</option>
                                </select>
                            </div>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show select-box">
                                <select name="count" class="form-control" onchange="window.location.href=this.value;">
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => request()->sort, 'show' => '12']) }}"  {{ request()->show == '12' ? 'selected' : '' }} data-display="Show: 12">Show 12</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => request()->sort, 'show' => '20']) }}"  {{ request()->show == '20' ? 'selected' : '' }} {{ request()->show == '' ? 'selected' : '' }} data-display="Show: 20">Show 20</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => request()->sort, 'show' => '40']) }}"  {{ request()->show == '40' ? 'selected' : '' }} data-display="Show: 40">Show 40</option>
                                    <option value="{{ route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'sort' => request()->sort, 'show' => '70']) }}" {{ request()->show == '70' ? 'selected' : '' }} data-display="Show: 70">Show 70</option>
                                </select>
                            </div>

                        </div>
                    </nav>
                    <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        @foreach($products as $product)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="{{route('product.show', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'slug' => $product->slug])}}">
                                        <img src="{{asset('storage/'.$product->image)}}" alt="Product" width="300"
                                            height="338" />
                                        @if($product->images)
                                            @foreach(json_decode($product->images) as $image)
                                                @if($loop->last)
                                                <img src="{{asset('storage/'.$image)}}" alt="Product" width="300"
                                                    height="338" />
                                                @endif
                                            @endforeach
                                        @endif
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="javascript:void(0)" onClick="$('.cart-submit-{{$product->id}}').submit();"
                                            class="btn-product-icon btn-cart-design w-icon-cart loader-alert-{{$product->id}}"
                                            title="Add to cart"></a>

                                        <form action="javascript:void(0)" method="POST" class="d-none add-to-cart cart-submit-{{$product->id}}" id="{{$product->id}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                        </form>

                                        <button class="d-none btn-cart" id="cart-response-{{$product->id}}">
                                        </button>

{{--                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"--}}
{{--                                            title="Wishlist"></a>--}}
{{--                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" onclick="compare(event)"--}}
{{--                                            title="Compare"></a>--}}

                                        <a href="javascript:void(0);" class="show-modal btn-product-icon  w-icon-search"
                                            title="Quick View" id="{{$product->slug}}"></a>
                                            <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$product->id}}"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="/category/{{$parentCategory->slug}}">{{$childCategory->name}}</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="{{route('product.show', ['parent' => $parentCategory->slug, 'child' => $childCategory->slug, 'slug' => $product->slug])}}">{{$product->name}}</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <a href="/brands/{{$product->brand->slug}}" class="rating-reviews">{{$product->brand->name}}</a>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            <ins class="new-price">{{$product->code}}</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $products->appends(request()->input())->links() }}

                </div>
                <!-- End of Shop Main Content -->

            </div>
            <!-- End of Shop Content -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection

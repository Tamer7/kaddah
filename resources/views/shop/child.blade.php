@extends('master')

@section('title', $parentCategory->title ?? $parentCategory->name)
@section('pkeywords', $parentCategory->meta_page_keywords ?? '')
@section('description', $parentCategory->meta_description ?? '')
@section('content')

 <!-- Start of Main -->
 <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="/">Home</a></li>
                    <li><a href="/category">Category</a></li>
                    <li>{{$parentCategory->name}}</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content mb-10">
            @if($parentCategory->page_hyperlinks)
                @foreach(json_decode($parentCategory->page_hyperlinks) as $hyperlink) 
                    <a href="{{$hyperlink->url}}" style="color: transparent; position: absolute;">
                        {{$hyperlink->name}}
                    </a>
                @endforeach
            @endif
            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
            @if($parentCategory->banner)
                style="background-image: url({{Voyager::image($parentCategory->banner)}}); @else style="background-image: url({{asset('/images/categories/default.jpg')}}); @endif background-color: var(--primary-color);">
                <div class="container banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Subcategories of</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{$parentCategory->name}}</h3>
                    
                </div>
            </div>
            @if($parentCategory->page_header_1)
            <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                <div class="card">
                    <div class="card-header"> 
                        <a href="#collapse1" class="collapse">About</a>
                    </div>
                
                    <div id="collapse1" class="card-body expanded" style="margin-left: 0.5%;">
                        <h1 style="font-size: 14px; font-weight: normal;">
                            {{$parentCategory->page_header_1}}
                        </h1>
                    </div>
                </div>
            </div>
            @endif
            @if($parentCategory->description)
            <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                <div class="card">
                    <div class="card-header"> 
                        <a href="#collapse1" class="collapse">Description</a>
                    </div>
                
                    <div id="collapse1" class="card-body expanded" style="margin-left: 0.5%;">
                        <h4 style="font-size: 14px; font-weight: normal;" class="categ-description"> 
                            {!! $parentCategory->description !!}
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
                        
                        <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($child as $category)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('category.products', ['parent' => $parentCategory->slug, 'child' => $category->slug])}}">
                                            <img src="{{asset('storage/'.$category->image)}}" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="{{route('category.child', $parentCategory->slug)}}">{{$parentCategory->name}}</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="{{route('category.products', ['parent' => $parentCategory->slug, 'child' => $category->slug])}}">{{$category->name}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        
                    </div>
                    
                </div>
                <!-- End of Shop Content -->
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

@endsection
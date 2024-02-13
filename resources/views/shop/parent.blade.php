@extends('master')

@section('title', 'Major Categories')

@section('content')

 <main class="main">
    
        <!-- <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="/">Home</a></li>
                    <li>Main Categories</li>
                </ul>
            </div>
        </nav> -->
        <br />
        
        <div class="page-content mb-10">
            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                style="background-image: url({{asset('/images/categories/default.jpg')}}); background-color: var(--primary-color);">
                <div class="container banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Explore Our</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">Product Categories</h3>
                    
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="shop-content">
                    
                    <div class="main-content">
                        
                        <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($parentCategories as $category)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('category.child', $category->slug)}}">
                                            <img src="{{asset('storage/'.$category->image)}}" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <!-- <div class="product-cat">
                                            <a href="/category">Category</a>
                                        </div> -->
                                        <h3 class="product-name">
                                            <a href="{{route('category.child', $category->slug)}}">{{$category->name}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </main>

@endsection
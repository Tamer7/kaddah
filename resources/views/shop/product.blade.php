@extends('master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/photoswipe/photoswipe.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/photoswipe/default-skin/default-skin.min.css')}}">
@endsection

@section('content')

<!-- Start of Main -->
<main class="main mb-10 pb-1">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav container">
        <ul class="breadcrumb bb-no">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('category.child', $parentCategory->slug)}}">{{$parentCategory->name}}</a></li>
            <li><a href="{{route('category.products', ['parent' => $parentCategory->slug, 'child' => $childCategory])}}">{{$childCategory->name}}</a></li>
            <li>{{$product->slug}}</li>
        </ul>

    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content">
                    <div class="product product-single row">
                        <div class="col-md-4 mb-6">
                            <div class="product-gallery product-gallery-sticky">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="{{asset('storage/'.$product->image)}}"
                                                    data-zoom-image="{{asset('storage/'.$product->image)}}"
                                                    alt="{{$product->name}}" width="800" height="900">
                                            </figure>
                                        </div>
                                        @if($product->images)
                                            @foreach(json_decode($product->images) as $image)
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="{{asset('storage/'.$image)}}"
                                                        data-zoom-image="{{asset('storage/'.$image)}}"
                                                        alt="{{$product->name}}" width="488" height="549">
                                                </figure>
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                    <a href="#" class="product-gallery-btn product-image-full"><i class="w-icon-zoom"></i></a>
                                </div>
                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">

                                        <div class="product-thumb swiper-slide">
                                            <img src="{{asset('storage/'.$product->image)}}"
                                                alt="{{$product->name}} Thumb" width="800" height="900">
                                        </div>
                                        @if($product->images)
                                            @foreach(json_decode($product->images) as $image)
                                            <div class="product-thumb swiper-slide">
                                                <img src="{{asset('storage/'.$image)}}"
                                                    alt="{{$product->name}} Thumb" width="800" height="900">
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-4 mb-md-6">
                            <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                <h1 class="product-title">{{$product->name}}</h1>
                                <div class="product-bm-wrapper">
                                    <figure class="brand">
                                        <img src="{{asset('storage/'.$product->brand->image)}}" alt="Brand"
                                            width="102" height="48" />
                                    </figure>
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Main Category:
                                            <span class="product-category"><a href="#">{{$parentCategory->name}}</a></span>
                                        </div>
                                        <div class="product-sku">
                                            Sub Category: <span>{{$childCategory->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="product-divider">

                                <div class="product-price"><ins class="new-price">{{$product->code}}</ins></div>

                                <div class="product-short-desc">
                                    <p>
                                        {{$product->details}}
                                    </p>
                                    <ul class="list-type-check list-style-none">
                                        <li>Origin: {{$product->origin}}</li>
                                        <li>Warranty: {{$product->warranty}}</li>
                                        <li>Brand Name: {{$product->brand->name}}</li>
                                    </ul>
                                </div>

                                <hr class="product-divider">


                                <div class="row">
                                    <div class="product-form container">

                                        <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form" id="{{$product->id}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <button type="submit" class="btn btn-primary btn-cart-design col-md-5" id="loading-alert-{{$product->id}}">
                                                <i class="w-icon-cart"></i>
                                                Add to Cart
                                            </button>
                                        </form>

                                        <button class="d-none btn-cart" id="cart-response-{{$product->id}}">
                                        </button>
                                    </div>
                                    <div class="product-form container col-md-5">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-specification" class="nav-link">Technical Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a href="#downloads" class="nav-link">Downloads</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                {!! $product->description !!}
                            </div>
                            <div class="tab-pane" id="product-tab-specification">
                                <table class="shop-table">
                                    @foreach($features as $feature)
                                    <tr>
                                        <td>{{$feature->name}}</td>
                                        <td>{{$feature->value}}</td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                            <div class="tab-pane" id="downloads">
                                <table class="shop-table">
                                @if(!empty($product->file) && !empty($product->file[0]->download_link))
                                    <tr>
                                        <td>Product Brochure</th>
                                        <td><a href="/storage/{{$product->file[0]->download_link}}" class="btn btn-primary">Download</a></td>
                                    </tr>
                                @endif
                                    <!-- <tr>
                                        <td>Auto Generate</th>
                                        <td>Generate Now</td>
                                    </tr> -->
                                </table>

                            </div>
                        </div>
                    </div>
                    @if($related->count() > 0)
                    <section class="related-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title">Related Products</h4>
                            <!-- <a href="/latest-products" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a> -->
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 3
                                    },
                                    '768': {
                                        'slidesPerView': 4
                                    },
                                    '992': {
                                        'slidesPerView': 5
                                    }
                                }
                            }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                @foreach($related as $product)
                                    <?php
                                        $child = $product->categories()->first();

                                        $parent = $child->parentId;

                                    ?>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                            <img src="{{asset('storage/'.$product->image)}}" alt="Product"
                                                width="300" height="338" />
                                            @if($product->images)
                                                @foreach(json_decode($product->images) as $image)
                                                    @if($loop->last)
                                                    <img src="{{asset('storage/'.$image)}}" alt="Product"
                                                        width="300" height="338" />
                                                    @endif
                                                @endforeach
                                            @endif
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" onClick="$('.cart-submit-{{$product->id}}').submit();"
                                            class="btn-product-icon btn-cart-design w-icon-cart loader-alert-{{$product->id}}"
                                            title="Add to cart"></a>

                                            <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form cart-submit-{{$product->id}}" id="{{$product->id}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                            </form>
                                            <button class="d-none btn-cart" id="cart-response-{{$product->id}}">
                                            </button>

{{--                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"--}}
{{--                                                title="Add to wishlist"></a>--}}
{{--                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"--}}
{{--                                                title="Add to Compare"></a>--}}
                                        </div>
                                        <div class="product-action">

                                                <a href="javascript:void(0);" class="show-modal btn-product"
                                                title="Quick View" id="{{$product->slug}}">Quick View</a>
                                            <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$product->id}}"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <a href="{{route('brand.show', $product->brand->slug)}}" class="rating-reviews">{{$product->brand->name}}</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">{{$product->code}}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    @endif
                </div>
                <!-- End of Main Content -->
                <!-- <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                    <div class="sidebar-content scrollable">
                        <div class="sticky-sidebar">
                            <div class="widget widget-icon-box mb-6">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-truck"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                        <p>For all orders over $99</p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-bag"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Secure Payment</h4>
                                        <p>We ensure secure payment</p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-money"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Money Back Guarantee</h4>
                                        <p>Any back within 30 days</p>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-banner mb-9">
                                <div class="banner banner-fixed br-sm">
                                    <figure>
                                        <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                            height="220" style="background-color: #1D2D44;" />
                                    </figure>
                                    <div class="banner-content">
                                        <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                            40<sup class="font-weight-bold">%</sup><sub
                                                class="font-weight-bold text-uppercase ls-25">Off</sub>
                                        </div>
                                        <h4
                                            class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                            Ultimate Sale</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-products">
                                <div class="title-link-wrapper mb-2">
                                    <h4 class="title title-link font-weight-bold">More Products</h4>
                                </div>

                                <div class="swiper nav-top">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options = "{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'navigation': {
                                            'prevEl': '.swiper-button-prev',
                                            'nextEl': '.swiper-button-next'
                                        }
                                    }">
                                        <div class="swiper-wrapper">
                                            <div class="widget-col swiper-slide">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/13.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Smart Watch</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$80.00 - $90.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/14.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Sky Medical Facility</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$58.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/15.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Black Stunt Motor</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$374.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-col swiper-slide">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/16.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Skate Pan</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$278.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/17.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Modern Cooker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$324.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/18.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">CT Machine</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$236.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside> -->
                <!-- End of Sidebar -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->


<!-- Root element of PhotoSwipe. Must have class pswp -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
        PhotoSwipe keeps only 3 of them in the DOM to save memory.
        Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="loading-spin"></div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
            <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- End of PhotoSwipe -->

@endsection

@section('js')

    <script src="{{asset('vendor/photoswipe/photoswipe.js')}}"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe-ui-default.js')}}"></script>

@endsection

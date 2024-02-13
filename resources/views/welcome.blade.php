@extends('master')
@section('title', 'Best Cleaning Suppliers in Dubai ')
@section('description', 'Kaddah Cleaning is a wholesale supplier of cleaning equipment & materials in Dubai. ✓ Fast Shipping ✓ Submit A Quote ✓ 24/7 Support.')

@section('content')
<!-- Start of Main-->
<main class="main">
    <h1 class="page-title" style="color: transparent; position: absolute;">
        Premier Cleaning Products and Equipment Suppliers in the UAE
    </h1>
    <h4 style="color: transparent; position: absolute;">
        Kaddah Cleaning Equipment is one of the top cleaning product and cleaning material suppliers in Dubai.
        When it comes to cleaning supplies, we are unmatched in both variety and quality, ensuring every customer finds the perfect solution for their needs. 
        We offer fast shipping and 24/7 support.
    </h4>
    <section class="intro-section">
        <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
            data-swiper-options="{
            'slidesPerView': 1,
            'autoplay': {
                'delay': 8000,
                'disableOnInteraction': false
            }
        }">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                    style="background-image: url({{asset('images/slider/slide-1.jpg')}}); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate">
                            <img src="{{asset('images/slider/i-mop.png')}}" alt="Banner"
                                data-bottom-top="transform: translateY(10vh);"
                                data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                        </figure>
                        <div class="banner-content y-50 text-right">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.2s'
                        }">
                                 <span class="p-relative d-inline-block">Explore Our</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.4s'
                        }">
                                Extensive Range
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.6s'
                        }">
                                of CLEANING <span class="font-weight-bolder text-secondary">MACHINERY </span>
                            </p>

                            <a href="/category/machinery"
                                class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.8s'
                        }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide1 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                    style="background-image: url({{asset('images/slider/slide-2.jpg')}}); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'duration': '1s'
                        }">
                            <img src="{{asset('images/slider/bins.png')}}" alt="Banner"
                                data-bottom-top="transform: translateX(10vh);"
                                data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                        </figure>


                        <div class="banner-content d-inline-block y-50">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                data-animation-options="{
                                'name': 'fadeInUpShorter',
                                'duration': '1s',
                                'delay': '.2s'
                            }">
                                The UAE’s <br>
                                <span class="text-secondary"> Largest Distributor of</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                data-animation-options="{
                                'name': 'fadeInUpShorter',
                                'duration': '1s',
                                'delay': '.4s'
                            }">
                               GARBAGE BINS
                            </h3>

                            <a href="/category/garbage-bins-liners"
                                class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                data-animation-options="{
                                'name': 'fadeInUpShorter',
                                'duration': '1s',
                                'delay': '1s'
                            }">
                                SHOP NOW<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide2 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                    style="background-image: url({{asset('images/slider/slide-3.jpg')}}); background-color: #f0f1f2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                            'name': 'fadeInDownShorter',
                            'duration': '1s'
                        }">
                            <img src="{{asset('images/slider/chemicals.png')}}" alt="Banner"
                                data-bottom-top="transform: translateY(10vh);"
                                data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                        </figure>
                        <div class="banner-content text-right y-50">
                            <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'duration': '1s',
                                'delay': '.6s'
                            }">
                                Cleaning Chemicals to
                            </p>
                            <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'duration': '1s',
                                'delay': '.4s'
                            }">
                                Meet Your
                            </h5>
                            <h3 class="banner-title p-relative font-weight-bolder ls-20 rs-40 slide-animate"
                                data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'duration': '1s',
                                'delay': '.2s'
                            }"><span class="text-white mr-2">Every</span> Need
                            </h3>

                            <div class="btn-group slide-animate" data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'duration': '1s',
                                'delay': '.8s'
                            }">
                                <a href="/category/chemicals"
                                    class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                    NOW<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <!-- End of .banner-content -->
                        </div>
                        <!-- End of .container -->
                    </div>
                </div>
                <!-- End of .intro-slide3 -->
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
        <!-- End of .swiper-container -->
    </section>
    <!-- End of .intro-section -->

    <section class="category-section top-category bg-grey pt-10 pb-10  ">
        <div class="container pb-2">
            <h2 class="title justify-content-center pt-1 ls-normal mb-5">Explore by Category</h2>
            <div class="row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                @foreach($parent as $category)
                <div class="category category-classic category-absolute overlay-zoom br-xs mt-5">
                    <a href="{{route('category.child', $category->slug)}}" class="category-media">
                        <img src="{{asset('storage/'.$category->image)}}" alt="{{$category->name}}"
                            width="130" height="130">
                    </a>
                    <div class="category-content">
                        <h4 class="category-name">{{$category->name}}</h4>
                        <a href="{{route('category.child', $category->slug)}}"
                            class="btn btn-primary btn-link btn-underline">Shop
                            Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of .category-section top-category -->

    <div class="container">


        <div class="row category-banner-wrapper   pt-6 pb-8" style="display:none;">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="{{asset('images/banners/artax.jpg')}}" alt="Artax Banner"
                            width="610" height="160" style="background-color: #ecedec;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-dark">
                            <!-- Explore Our -->
                            <span class="text-secondary font-weight-bolder text-uppercase ls-25"> Limited Edition </span>
                            <!-- of -->
                        </h5>
                        <h3 class="banner-title text-uppercase">HOME VACUUM<br><span
                                class="font-weight-normal text-capitalize">CLEANER</span>
                        </h3>
                        <!-- <div class="banner-price-info font-weight-normal">Starting at <span
                                class="text-secondary                       font-weight-bolder">$170.00</span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="{{asset('images/banners/chemicals.jpg')}}" alt="Chemicals Banner"
                            width="610" height="160" style="background-color: #636363;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-capitalize">Explore Our <br> Wide Range of</h5>
                        <h3 class="banner-title text-white text-uppercase">CHEMICALS</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Banner Wrapper -->

        <!-- End of Deals Wrapper -->
    </div>



    <div class="container">
        <!-- End of Category Cosmetic Lifestyle -->

        <div class="product-wrapper-1   mb-5">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">New Arrivals</h2>
                <a href="/latest-products" class="font-size-normal font-weight-bold ls-25 mb-0">
                    Explore<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url({{asset('images/banners/new.jpg')}});
                        background-color: #ebeced;">
                        <div class="banner-content content-top new-arrival">
                            <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                New Arrivals
                            </h3>
                            <a href="/latest-products"
                                class="btn btn-white btn-outline btn-rounded btn-sm">Explore Now</a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            @foreach($latest_products->split(5) as $group)
                            <div class="swiper-slide product-col">

                                @foreach($group as $product)
                                    <?php
                                        $child = $product->categories()->first();

                                        $parent = $child->parentId;

                                    ?>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                            <img src="{{asset('storage/'.$product->image)}}" alt="Product"
                                                width="216" height="243" />
                                            @if($product->images)
                                                @foreach(JSON_DECODE($product->images) as $image)
                                                    @if($loop->last)
                                                    <img src="{{asset('storage/'.$image)}}" alt="Product"
                                                    width="216" height="243" />
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

                                            <a href="javascript:void(0);" class="show-modal btn-product-icon  w-icon-search"
                                            title="Quick View" id="{{$product->slug}}"></a>
                                            <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$product->id}}"></a>

{{--                                            <a href="javascript:void(0)" class="btn-product-icon btn-compare w-icon-compare" onclick="$('.compare-submit-{{$product->id}}').submit();"--}}
{{--                                                title="Add to Compare" id="btn-compare-{{$product->id}}"></a>--}}

                                            <form action="javascript:void(0)" method="POST" class="compare-form compare-submit-{{$product->id}}" id="{{$product->id}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                            </form>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}"> {{$product->name}} </a>
                                        </h4>
                                        <div class="ratings-container">
                                            <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}" class="rating-reviews">{{$product->brand->name}}</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">{{$product->code}}</ins>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <div class="post-wrapper   mb-4">
            <div class="title-link-wrapper pb-1 mb-0">
                <h2 class="title mb-4 ls-normal">Our Brands</h2>
                <a href="/brands" class="font-weight-bold font-size-normal">View All Brands</a>
            </div>
            <div class="swiper-container swiper-theme brands-wrapper mb-9  " data-swiper-options="{
                'spaceBetween': 0,
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
                    },
                    '1200': {
                        'slidesPerView': 6
                    }
                }
            }">
                <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    @foreach($brands->split(10) as $splits)
                    <div class="swiper-slide brand-col">
                        @foreach($splits as $brand)
                        <figure class="brand-wrapper">
                            <a href="{{route('brand.show', $brand->slug)}}">
                                <img src="{{asset('storage/'.$brand->image)}}" alt="Brand" width="410"
                                    height="186" />
                            </a>
                        </figure>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End of Brands Wrapper -->
        </div>
        <div class="post-wrapper   mb-4">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">From Our Events</h2>
                <a href="/media/events" class="font-weight-bold font-size-normal">View All Events</a>
            </div>
            <div class="swiper">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        @foreach($events as $event)
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="{{route('event.show', $event->slug)}}">
                                    <img src="{{asset('storage/'.$event->image)}}" alt="Post" width="280"
                                        height="180" style="background-color: #4b6e91;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    on <a href="#" class="post-date mr-0">{{dateFormat($event->created_at, 'F j, Y')}}</a>
                                </div>
                                <h4 class="post-title"><a href="{{route('event.show', $event->slug)}}">
                                    {{$event->title}}
                                </a>
                                </h4>
                                <a href="{{route('event.show', $event->slug)}}" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- Post Wrapper -->

        <div class="post-wrapper   mb-4">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">From Our Blogs</h2>
                <a href="/media/blogs" class="font-weight-bold font-size-normal">View All Articles</a>
            </div>
            <div class="swiper">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        @foreach($blogs as $blog)
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="{{route('blog.show', $blog->slug)}}">
                                    <img src="{{asset('storage/'.$blog->image)}}" alt="Post" width="280"
                                        height="180" style="background-color: #4b6e91;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    on <a href="#" class="post-date mr-0">{{dateFormat($blog->created_at, 'F j, Y')}}</a>
                                </div>
                                <h4 class="post-title"><a href="{{route('blog.show', $blog->slug)}}">{{$blog->title}}</a>
                                </h4>
                                <a href="{{route('blog.show', $blog->slug)}}" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- Post Wrapper -->
    </div>
    <!--End of Catainer -->
</main>
<!-- End of Main -->

@endsection

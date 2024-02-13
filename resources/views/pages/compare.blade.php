@extends('master')

@section('title', 'Wishlist')

@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">Compare</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-2">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Compare</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content mb-10 pb-2">
        <div class="container">
            <div class="compare-table">
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-products">
                    <div class="compare-col compare-field">Product</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-product">
                        <a href="#" class="btn remove-product"><i class="w-icon-times-solid"></i></a>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('storage/'.$product->model->image)}}" alt="Product" width="228"
                                        height="257" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"></a>
{{--                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>--}}
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name"><a href="product-default.html">
                                    {{$product->name}}
                                </a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of Compare Products -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-price">
                    <div class="compare-col compare-field">Price</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">
                        <div class="product-price">
                            <span class="new-price">$40.00</span>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of Compare Price -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-availability">
                    <div class="compare-col compare-field">Availability</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">In stock</div>
                    @endforeach
                </div>
                <!-- End of Compare Availability -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-description">
                    <div class="compare-col compare-field">description</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">
                        <ul class="list-style-none list-type-check">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!-- End of Compare Description -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-reviews">
                    <div class="compare-col compare-field">Ratings &amp; Reviews</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-rating">
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width: 80%;"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of Compare Reviews -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-category">
                    <div class="compare-col compare-field">Category</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">Watches</div>
                    @endforeach
                </div>
                <!-- End of Compare Category -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-meta">
                    <div class="compare-col compare-field">SKU</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">MS46891344</div>
                    @endforeach
                </div>
                <!-- End of Compare Meta -->

                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-size">
                    <div class="compare-col compare-field">Size</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">Medium, Small</div>
                    @endforeach

                </div>
                <!-- End of Compare Size -->
                <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-brand">
                    <div class="compare-col compare-field">Brand</div>
                    @foreach(Cart::instance('compare')->content() as $product)
                    <div class="compare-col compare-value">Apple</div>
                    @endforeach
                </div>
                <!-- End of Compare Brand -->
            </div>
        </div>
        <!-- End of Compare Table -->
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection

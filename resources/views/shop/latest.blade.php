@extends('master')

@section('title', 'Latest Products')

@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Breadcrumb -->
    <!-- <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href="/">Home</a></li>
                <li>Latest Products</li>
            </ul>
        </div>
    </nav> -->
    <br />
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <!-- Start of Shop Banner -->
            <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                style="background-image: url({{asset('images/categories/default.jpg')}}); background-color: var(--primary-color);">
                <div class="banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Explore Our</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">
                        Latest Products
                    </h3>

                </div>
            </div>
            <!-- End of Shop Banner -->


            <!-- Start of Shop Content -->
            <div class="shop-content row gutter-lg mb-10">
                <!-- Start of Sidebar, Shop Sidebar -->
                <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <!-- Start of Sidebar Overlay -->
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                    <!-- Start of Sidebar Content -->
                    <div class="sidebar-content scrollable">
                        <!-- Start of Sticky Sidebar -->
                        <div class="sticky-sidebar">
                            <!-- <div class="filter-actions">
                                <label>Filter :</label>
                                <a href="javascript:void(0)" onclick="clearFilter()" class="btn btn-dark btn-link filter-clean">Clean All</a>
                            </div> -->
                            <div class="filter-actions">
                                <label class="text-primary">By Category</label>
                            </div>
                            <!-- Start of Collapsible widget -->
                            @foreach($categories as $category)
                            <div class="widget widget-collapsible categories">
                                <h3 class="widget-title collapsed categories"><span>{{$category->name}}</span></h3>
                                <ul class="widget-body filter-items search-ul">
                                    @foreach($category->children()->get() as $child)
                                    <li><a href="javascript:void(0)" id="{{$child->slug}}" class="categorySlug">{{$child->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                            <!-- End of Collapsible Widget -->
                            <div class="filter-actions mt-5">
                                <label class="text-primary">By Brand</label>
                            </div>
                            <!-- Start of Collapsible Widget -->
                            @foreach($partners as $brand)
                                <div class="widget widget-collapsible brands">

                                    <h3 class="widget-title collapsed"><span>{{$brand->name}}</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        @foreach($brand->children as $child)
                                        <li><a href="javascript:void(0)" class="brandSlug" id="{{$child->slug}}">{{$child->name}}</a></li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endforeach
                            <!-- End of Collapsible Widget -->

                        </div>
                        <!-- End of Sidebar Content -->
                    </div>
                    <!-- End of Sidebar Content -->
                </aside>
                <!-- End of Shop Sidebar -->

                <!-- Start of Shop Main Content -->
                <div class="main-content">
                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <!-- <div class="toolbox-left">
                            <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle
                                btn-icon-left d-block d-lg-none"><i
                                    class="w-icon-category"></i><span>Filters</span></a>
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <label>Sort By :</label>
                                <select name="orderby" class="form-control">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price-low">Sort by pric: low to high</option>
                                    <option value="price-high">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show select-box">
                                <select name="count" id="count" class="form-control">
                                    <option value="12" selected="selected">Show 12</option>
                                    <option value="25">Show 25</option>
                                    <option value="50">Show 50</option>
                                    <option value="100">Show 100</option>
                                </select>
                            </div>

                        </div>
                    </nav>
                    <h4 id="heading" class="text-upper"></h4>
                    <div class="product-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-2" id="show-products">
                        <div class="items-loader"><div></div><div></div><div></div><div></div></div>
                    </div>

                    <div class="toolbox toolbox-pagination justify-content-between" id="pagination-links">

                    </div>
                </div>
                <!-- End of Shop Main Content -->
            </div>
            <!-- End of Shop Content -->
            <!-- Start Of Shop Brand
            <div class="shop-default-brands mb-5">
                <div class="brands-swiper swiper-container swiper-theme "
                    data-swiper-options="{
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 7
                            }
                        },
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        }
                    }">
                    <div class="swiper-wrapper row gutter-no cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                        @foreach($brands as $brand)
                        <div class="swiper-slide">
                            <a href="{{route('brand.show', $brand->slug)}}" class="brand-wrapper">
                                <figure>
                                    <img src="{{asset('storage/'.$brand->image)}}" alt="{{$brand->name}}" width="160" height="90" />
                                </figure>
                            </a>

                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
             End of Shop Brands-->

            <!-- Start of Shop Category
            <div class="shop-default-category category-ellipse-section mb-6">
                <div class="swiper-wrapper row gutter-lg cols-xl-7 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                    @foreach($categories as $category)
                    <div class="swiper-slide category-wrap">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="{{route('category.child', $category->slug)}}">
                                    <img src="{{asset('storage/'.$category->image)}}" alt="Categroy"
                                        width="190" height="190" style="background-color: #5C92C0;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="{{route('category.child', $category->slug)}}">{{$category->name}}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            End of Shop Category -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection

@section('js')

<script>

    var category = '';
    var brand = '';
    var title = 'FEATURED PRODUCTS';

    $(document).ready(function() {
        var route = "{{route('ajax.latest')}}";

        loadProducts(route, null, null, title);
    });


    $('body').on('click', '.pagination a', function(event) {
        event.preventDefault();

        var url = $(this).attr('href');
        if(category !== '') {
            url += '&category=' + category;
        }
        loadProducts(url, category, brand, title);
    });

    $('#count').on('change', function(event) {
        event.preventDefault();

        var loader = `
        <div class="items-loader"><div></div><div></div><div></div><div></div></div>
        `;
        $('#show-products').html(loader);

        var count = $('#count').val();
        var url = "{{route('ajax.latest')}}?count=" + count;

        if(category !== '') {
            url += '&category=' + category;
        }

        loadProducts(url, category, brand, title);
    });
    $('body').on('click', '.categorySlug', function(event) {
        event.preventDefault();

        var loader = `
        <div class="items-loader"><div></div><div></div><div></div><div></div></div>
        `;
        $('#show-products').html(loader);

        $('.brands h3').addClass('collapsed');
        $('.brands .widget-body').css('display', 'none');

        category = $(this).attr('id');
        title = $(this).attr('id');

        var count = $('#count').val();
        var url = "{{route('ajax.latest')}}?count=" + count + '&category=' + category;

        loadProducts(url, category, null, title);
        $('.sticky-sidebar .active').removeClass('active');
        $(this).parent().addClass('active');

    });

    $('body').on('click', '.brandSlug', function(event) {
        event.preventDefault();

        var loader = `
        <div class="items-loader"><div></div><div></div><div></div><div></div></div>
        `;
        $('#show-products').html(loader);

        $('.categories h3').addClass('collapsed');
        $('.categories .widget-body').css('display', 'none');

        brand = $(this).attr('id');
        title = $(this).attr('id');

        var count = $('#count').val();
        var url = "{{route('ajax.latest')}}?count=" + count + '&brand=' + brand;

        loadProducts(url, null, brand, title);
        $('.sticky-sidebar .active').removeClass('active');
        $(this).parent().addClass('active');

    });

    function loadProducts(url, category, brand, title) {
        var count = $('#count').val();

        $.ajax({
            type: 'GET',
            url: url,
            data: {
                count: count,
                category: category,
                brand: brand
            },
            dataType: 'json',
            success: function(res) {
                var data = res.data;
                var products = '';

                $('#heading').html(title);

                $.each(data, function(index, product) {
                    if(product != null && typeof product !== 'undefined'){
                        products += `
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="#" class="product-image-${product.id}">

                                        </a>

                                        <div class="product-action-horizontal">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-cart-design w-icon-cart latest-cart loader-alert-${product.id}"
                                            id="${product.id}" title="Add to cart"></a>

                                            <form action="javascript:void(0)" method="POST" class="d-none add-to-cart cart-form cart-submit-${product.id}" id="${product.id}">
                                                    @csrf
                                                <input type="hidden" name="id" value="${product.id}">
                                            </form>
                                            <button class="d-none btn-cart" id="cart-response-${product.id}">
                                            </button>

                                            <a href="javascript:void(0);" class="show-modal btn-product-icon  w-icon-search"
                                            title="Quick View" id="${product.slug}"></a>
                                            <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-${product.id}"></a>
                                        </div>

                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="#" id="category-url-${product.id}">
                                                <span class="atlantic-spinner atlantic-spinner-black"></span>
                                            </a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="#" class="product-url-${product.id}">${product.name}</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <a href="#" class="rating-reviews product-url-${product.id}">${product.code}</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">${product.code}</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                });

                var productsElement = $('#show-products');
                productsElement.html(products);

                $.each(data, function(index, product) {
                    if(product != null && typeof product !== 'undefined'){
                        var getCategory = "{{route('product.category', ':productId')}}".replace(':productId', product.id);

                        $.ajax({
                            url: getCategory,
                            method: 'GET',
                            success: function(response) {

                                var parentCategory = response.parent;
                                var subCategory = response.category;

                                var categoryUrl = "{{route('category.products', [':parent', ':child'])}}"
                                                    .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug);

                                var productUrl = "{{route('product.show', [':parent', ':child', ':slug'])}}"
                                                    .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug).replace(':slug', product.slug);

                                $('.product-image-'+product.id).attr('href', productUrl);
                                $('#category-url-'+product.id).attr('href', categoryUrl);
                                $('#category-url-'+product.id).html(subCategory.name);
                                $('.product-url-'+product.id).attr('href', productUrl);
                            },
                            error: function(err) {
                                console.log(err);
                            }
                        });
                    }
                });

                $.each(data, function(index, product) {
                    if(product != null && typeof product !== 'undefined'){
                        var productImg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.image);

                        $('.product-image-'+product.id).html(productImg);

                    }
                });
                console.log(res);

                var pagination = `
                    <p class="showing-info mb-2 mb-sm-0">
                        Showing<span>${res.from}-${res.to} of ${res.total}</span>Products
                    </p>
                    <ul class="pagination">
                        <li class="prev ${res.prev_page_url ? '' : 'disabled'}">
                            <a href="${res.prev_page_url ? res.prev_page_url : '#'}" aria-label="Previous" tabindex="-1" aria-disabled="${!res.prev_page_url}">
                                <i class="w-icon-long-arrow-left"></i>Prev
                            </a>
                        </li>
                        ${res.links.slice(1, -1).map(link => `
                            <li class="page-item ${link.active ? 'active' : ''}">
                                <a class="page-link" href="${link.url}" id="${link.label}">${link.label}</a>
                            </li>
                        `).join('')}

                        <li class="next ${res.next_page_url ? '' : 'disabled'}">
                            <a href="${res.next_page_url ? res.next_page_url : '#'}" aria-label="Next">
                                Next<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                `;
                $('#pagination-links').html(pagination);

            },
            error: function(error) {

            }
        });
    }

    $('body').on('click', 'a.show-modal', function(e) {
        e.preventDefault();
        var productSlug = $(this)[0].id;
        $(this).removeClass('w-icon-search');
        $(this).addClass('atlantic-spinner');
        $(this).addClass('atlantic-spinner-black');

        getProduct(productSlug);


    });


    function clearFilter() {
        var loader = `
        <div class="items-loader"><div></div><div></div><div></div><div></div></div>
        `;
        $('#show-products').html(loader);

        var route = "{{route('ajax.latest')}}";

        $('#count').val('');
        $('#count option:first').prop('selected', true);

        $('.sticky-sidebar .active').removeClass('active');

        $('.sticky-sidebar h3').addClass('collapsed');
        $('.sticky-sidebar .widget-body').css('display', 'none');

        category = '';
        brand = '';
        title = 'FEATURED PRODUCTS';

        loadProducts(route, category, brand, title);

    }
    $('body').on('click', '.latest-cart', function(e) {
        e.preventDefault();
        var productId = $(this).attr('id');

        var form = $('.cart-submit-'+productId);
        if(form.length) {
            var csrfToken = form.find('input[name="_token"]').val();

            if(csrfToken) {

                var formData = form.serialize();

                var loaderAlert = $('.loader-alert-'+productId);
                var loaderClass = 'atlantic-spinner atlantic-spinner-black';
                $.ajax({
                    url: `{{route('cartStore.ajax')}}`,
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {

                        loaderAlert.removeClass('w-icon-check-solid');
                        loaderAlert.removeClass('w-icon-cart');
                        loaderAlert.addClass(loaderClass);
                    },
                    success: function(response) {
                        var product = response.product;
                        var message = response.message;

                        console.log(response);

                        var click = $('#cart-response-'+product.id);
                        click.html(message);

                        loaderAlert.removeClass(loaderClass);
                        loaderAlert.addClass('w-icon-check-solid');

                        click.click();
                        cartProducts();
                    },
                    error: function(error) {
                        console.log(error);

                        loaderAlert.removeClass(loaderClass);
                        loaderAlert.addClass('w-icon-cart');
                    }
                });
            } else {
                console.error('CSRF token missing');
            }
        } else {
            console.error('Form not found');
        }


    });

</script>

@endsection

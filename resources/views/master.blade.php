<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>@yield('title') | Kaddah Cleaning Equipment</title>

        <meta name="keywords" content="@yield('pkeywords'),cleaning materials, cleaning products, cleaning supplies, cleaning equipment" />
        <meta name="description" content="@yield('description')">
        <meta name="author" content="D-THEMES">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">

        <!-- WebFont.js -->
        <script>
            WebFontConfig = {
                google: { families: ['Poppins:400,500,600,700,800'] }
            };
            (function (d) {
                var wf = d.createElement('script'), s = d.scripts[0];
                wf.src = "{{asset('/js/webfont.js')}}";
                wf.async = true;
                s.parentNode.insertBefore(wf, s);
            })(document);
        </script>

        <link rel="preload" href="{{asset('vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font" type="font/woff2"
            crossorigin="anonymous">
        <link rel="preload" href="{{asset('vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
            crossorigin="anonymous">
        <link rel="preload" href="{{asset('vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2"
            crossorigin="anonymous">
        <link rel="preload" href="{{asset('fonts/wolmart87d5.woff?png09e')}}" as="font" type="font/woff" crossorigin="anonymous">

        <!-- Vendor CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">

        <!-- Default CSS -->
        @if(request()->is('/'))
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        @else
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">
        @endif
        <link rel="stylesheet" type="text/css" href="{{asset('css/comon.css')}}">
        @yield('css')

        <!-- Google Tag Manager -->
        <script defer async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MGKRQXXG');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body class="home loaded">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGKRQXXG"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <div class="page-wrapper">
            @include('header')

            @yield('content')
            @include('footer')

        </div>


        @include('mobile')
        <div class="product product-single product-popup" id="product-modal">
        </div>
        <form id="logout-user" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <!-- Plugin JS File -->
        <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>

        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('vendor/zoom/jquery.zoom.js')}}"></script>
        <script src="{{asset('vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('vendor/skrollr/skrollr.min.js')}}"></script>

        <!-- Swiper JS -->
        <script defer async src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('js/main.min.js')}}"></script>
        <script src="{{asset('js/ajax.min.js')}}"></script>
        <script src="{{asset('js/common.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <script>
            $(document).ready(function() {
                cartProducts();
                SearchCategory();
                compareProducts();
                $.ajax({
                    type: 'GET',
                    url: `{{route('menu.banner')}}`,
                    dataType: 'json',
                    success: function(res) {
                        var data = res.banners;

                        $.each(data, function(index, banner) {
                            $('#menu-'+banner.category_slug).html(
                                `
                                <div class="banner-fixed menu-banner menu-banner2">
                                <figure>
                                    <img src="{{asset('images/menu/dummy.jpg')}}" alt="Menu Banner"
                                        width="235" height="347" id="banner-${banner.category_slug}" />
                                </figure>
                                <div class="banner-content">
                                    <div class="banner-price-info mb-1 ls-normal"><strong
                                            class="text-primary text-uppercase">${banner.sup_heading}</strong>
                                    </div>
                                    <h3 class="banner-title ls-normal">${banner.heading}</h3>
                                    <a href="/category/${banner.category_slug}"
                                        class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                                `
                            );
                            $('#banner-'+banner.category_slug).attr('src', "{{asset('storage/')}}" + '/' + banner.image);


                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR + '-' + textStatus + '-' + errorThrown);
                    }
                });
            });

            function getProduct(productSlug) {
                var routeProduct = "{{route('product.single', ':slug')}}".replace(':slug', productSlug);
                $.ajax({
                    type: 'GET',
                    url: routeProduct,
                    dataType: 'json',
                    success: function(product) {
                        showModal(product);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR + '-' + textStatus + '-' + errorThrown);
                    }
                });
            }

            $('.show-modal').on('click', function(e) {
                e.preventDefault();

                let el = $(this)[0];
                var productSlug = el.id;

                $(this).removeClass('w-icon-search');
                $(this).addClass('atlantic-spinner');
                $(this).addClass('atlantic-spinner-black');

                getProduct(productSlug);

            });

            function updateOrderQuantity(productId, quantity) {
                if(!quantity) return;
                var loadingAlert = $('#loading-alert-' + productId);
                var loaderAlert = $('#loader-alert-' + productId);
                var spinner = '<span class="atlantic-spinner atlantic-spinner-black"></span>';
                $.ajax({
                    type: 'PUT',
                    url: `{{route('cart.update', [':id', 'product'])}}`.replace(':id', productId),
                    data: {qty: quantity},
                    beforeSend: function() {
                        loadingAlert.html(spinner);
                        loaderAlert.html(spinner);
                    },
                    success: function(response) {
                        loadingAlert.html('<i class="fas fa-check"></i>');
                        loaderAlert.html('<i class="fas fa-check"></i>');
                        console.log("SUCESSS");
                        cartProducts();
                    },
                    error: function(error) {
                        console.log(error);
                        loadingAlert.html('<i class="fas fa-times"></i>');
                        loaderAlert.html('<i class="fas fa-times"></i>');
                    }
                });
            }

            function cartProducts() {
                $.ajax({
                    type: 'GET',
                    url: `{{route('cart.items')}}`,
                    dataType: 'json',
                    success: function(res) {
                        var cartCount = $('.cart-count');
                        cartCount.html(res.length);

                        if(res.length > 0)
                        {
                            var html = '';
                            var mbHtml = '';
                            console.log(res);
                            $.each(res, function(index, product) {
                                html += `
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="/"product class="product-name" id="product-name-${product.rowId}">${product.name}</a>
                                            <div class="price-box" style="display:flex; flex-direction: column; align-items: flex-start;">
                                                <span class="product-price">Code: ${product.model.code}</span>
                                                <span class="product-price number-input-qty">
                                                    Qty: &nbsp;&nbsp;<input type="number" class="prod-qty-inp-${product.rowId}" name="qty" value="${product.qty}" min="1" onKeyDown="return false" />
                                                    <span class="qty-spinners">
                                                        <button class="qty-spinner qty-increment" onclick="incrementQty('${product.rowId}')">&#9650;</button>
                                                        <button class="qty-spinner qty-decrement" onclick="decrementQty('${product.rowId}')">&#9660;</button>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <figure class="product-media" id="-url-${product.rowId}">
                                            <a href="/" id="cart-img-${product.rowId}">
                                            </a>
                                        </figure>
                                        <form action="javascript:void(0)" method="POST" onSubmit="removeCart(event)" id="${product.rowId}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-link btn-close" aria-label="button" id="loading-alert-${product.rowId}">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                `;

                                mbHtml += `
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <h3 class="product-name">
                                                <a href="/" id="cartProduct-name-${product.rowId}"> ${product.name} </a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="product-price">${product.model.code}</span>
                                            </div>
                                        </div>
                                        <figure class="product-media" id="cartProduct-url-${product.rowId}">
                                            <a href="/" id="cartProduct-img-${product.rowId}">

                                            </a>
                                        </figure>
                                        <form action="javascript:void(0)" method="POST" onSubmit="removeCart(event)" id="${product.rowId}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-link btn-close" aria-label="button" id="loader-alert-${product.rowId}">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                `;
                            });

                            $('#cart-products').html(html);

                            $('#mobile-cart-products').html(mbHtml);

                            $.each(res, function(index, product) {
                                var getCategory = "{{route('product.category', ':productId')}}".replace(':productId', product.model.id);
                                var categoryUrl = '';

                                $.ajax({
                                    url: getCategory,
                                    method: 'GET',
                                    success: function(res) {
                                        var parentCategory = res.parent;
                                        var subCategory = res.category;

                                        var categoryUrl = "{{route('product.show', [':parent', ':child', ':slug'])}}"
                                                            .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug).replace(':slug', product.model.slug);

                                        $('#cart-img-'+product.rowId).attr('href', categoryUrl);
                                        $('#product-name-'+product.rowId).attr('href', categoryUrl);

                                        $('#cartProduct-img-'+product.rowId).attr('href', categoryUrl);
                                        $('#cartProduct-name-'+product.rowId).attr('href', categoryUrl);
                                    },
                                    error: function(error) {
                                        console.log(error);
                                    }
                                });
                            });

                            $.each(res, function(index, product) {

                                var Cartimg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.model.image);
                                $('#cart-img-'+product.rowId).html(Cartimg);

                                var CartProductimg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.model.image);
                                $('#cartProduct-img-'+product.rowId).html(CartProductimg);
                            });

                            var cartButtons = `
                            <a href="/cart" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="/cart/checkout" class="btn btn-primary  btn-rounded">REQUEST A QUOTE</a>
                            `;
                            $('.cart-action').html(cartButtons);
                        } else {

                            var emptyCart = `
                                <div class="page-content mt-5 pb-2">
                                    <div class="container">
                                        <section>
                                            <div class="row">
                                                <div class="alert alert-warning alert-simple alert-inline show-code-action">
                                                    <h4 class="alert-title">Heads up!</h4>
                                                    You haven't added anything to your cart. Start adding products to receive a free quote.
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            `;
                            $('#cart-products').html(emptyCart);
                            $('.cart-action').html('');
                        }

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

            function removeCart(event) {
                event.preventDefault();


                var form = $(event.target);
                var RowId = form.attr('id');

                var loadingAlert = $('#loading-alert-'+RowId);
                var loaderAlert = $('#loader-alert-'+RowId);
                var spinner = '<span class="atlantic-spinner atlantic-spinner-black"></span>';

                var formData = form.serialize();

                var Durl = "{{route('cart.destroy', [':rowId', 'product'])}}".replace(':rowId', RowId);

                $.ajax({
                    type: 'DELETE',
                    url: Durl,
                    data: formData,
                    beforeSend: function() {
                        loadingAlert.html(spinner);
                        loaderAlert.html(spinner);
                    },
                    success: function(response) {
                        loadingAlert.html('<i class="fas fa-check"></i>');
                        loaderAlert.html('<i class="fas fa-check"></i>');
                        cartProducts();
                    },
                    error: function(error) {
                        loadingAlert.html('<i class="fas fa-times"></i>');
                        loaderAlert.html('<i class="fas fa-times"></i>');
                    }
                });
                console.log(RowId);
            };

            $('.add-to-cart').on("submit", function(e) {
                e.preventDefault();
                var form = $(this);

                var formData = form.serialize();

                var productId = form.attr('id');

                var loadingAlert = $('#loading-alert-'+productId);
                var loaderAlert = $('.loader-alert-'+productId);
                var loaderClass = 'atlantic-spinner atlantic-spinner-primary';
                $.ajax({
                    url: `{{route('cartStore.ajax')}}`,
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {
                        loadingAlert.html('<span class="atlantic-spinner atlantic-spinner-white"></span>');
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

                        loadingAlert.html('<i class="fas fa-check"></i><span>'+message+'</span>');
                        loaderAlert.removeClass(loaderClass);
                        loaderAlert.addClass('w-icon-check-solid');
                        console.log(loaderAlert);
                        click.click();
                        cartProducts();
                        $('.btn-wishlist-'+product.id).html('<i class="fas fa-check"></i> <span>Added.</span>');
                    },
                    error: function(error) {
                        console.log(error);
                        loadingAlert.html('<i class="fas fa-times"></i><span>Something went wrong.</span>');
                        loaderAlert.removeClass(loaderClass);
                        loaderAlert.addClass('w-icon-cart');
                    }
                });

            });

            function SearchCategory() {
                var categories = '';
                var categoryUrl = "{{route('category.search')}}";

                $.ajax({
                    type: 'GET',
                    url: categoryUrl,
                    dataType: 'json',
                    success: function(response) {

                        $.each(response, function(index, category) {
                            categories += `
                            <option name="searchCat" value="${category.slug}"> ${category.name} </option>
                            `;

                        });

                        $('#searchCategory').append(categories);

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

            $('#search-form').on('submit', function(e) {

                var query = $('#text-search');

                if (query.val().length > 2) {
                    const form = $('#search-form');
                    const url = form.action;
                    const method = form.method;
                    const formData = new FormData(form);
                    const xhr = new XMLHttpRequest();
                    xhr.open(method, url);
                    xhr.send(formData);
                } else {
                    e.preventDefault();
                    alert('Minimun query length is 3');
                }
            });

            function signIn(event){
                event.preventDefault();
                var form = $(event.target);
                var button = form.find('[type="submit"]');
                var loader = `
                    <span class="atlantic-spinner atlantic-spinner-white"></span>
                `;
                var data = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: `{{route('login')}}`,
                    data: data,
                    dataType: 'json',
                    beforeSend: function() {
                        button.html(loader);
                    },
                    success: function(res) {
                        window.location.href= '/dashboard';

                        button.html('Success. Redirecting...');
                    },
                    error: function(errors) {
                        var message = errors.responseJSON;
                        var error = message.errors;

                        $('.errors-error').html(error.email) + 'Try Again.';

                        button.html('Sign In');
                        form.trigger('reset');
                    }
                });

            };

            $('.compare-form').on('submit', function(event) {
                event.preventDefault();
                $('.compare-popup').addClass('show');

                var form = $(this);
                var productId = form.attr('id');

                var e, i = [], a = $(".compare-popup");

                var s = $('#btn-compare-'+productId);

                var formData = form.serialize();


                s.toggleClass("added")
                .addClass("load-more-overlay loading"),

                $.ajax({
                    url: `{{route('compare.store')}}`,
                    type: 'POST',
                    data: formData,
                    success: function(res) {

                        compareProducts();
                        setTimeout(
                                (function() {
                                    s.removeClass("load-more-overlay loading"),
                                    s.toggleClass("w-icon-compare").toggleClass("w-icon-check-solid"),
                                    s.attr("href", "/compare")
                                }),
                                500
                                );

                        $('#compare-message').html(res.message);
                        console.log(res);
                    },
                    error: function(error) {

                    }
                });

                // function n() {
                //     a.find(".title").after(
                //             '<p class="compare-count text-center text-light mb-0">(' +
                //             e + " Products)</p>" ),
                //         a.find(".compare-count").length > 1 &&
                //         a.find("p:last-child").remove()
                // }
                // a.length || document.body.classList.contains("docs") ||
                // ($(".page-wrapper")
                //     .append('<div class="compare-popup"> <div class="container">                        <div class="compare-title">                            <h4 class="title title-center">Compare Products</h4>                        </div>                        <ul class="compare-product-list list-style-none">                            <li></li><li></li><li></li><li></li>                        </ul>                        <a href="#" class="btn btn-clean">Clean All</a>                        <a href="compare.html" class="btn btn-dark btn-rounded">Start Compare !</a>                    </div>                </div>                <div class="compare-popup-overlay">                </div>'
                //         ),
                //     a = $(".page-wrapper > .compare-popup")
                // ),
                // Wolmart.$body.on("click",
                //     ".product .btn-compare",
                //     (function(o) {
                //         var s = $(this);
                //         s.hasClass("added"),
                //             o.preventDefault(),
                //             s.toggleClass("added")
                //             .addClass("load-more-overlay loading"),
                //             setTimeout(
                //                 (function() {
                //                     s.removeClass("load-more-overlay loading"),
                //                     s.toggleClass("w-icon-compare").toggleClass("w-icon-check-solid"),
                //                     s.attr("href", "compare.html"),
                //                     a.addClass("show")
                //                 }),
                //                 500
                //                 );
                //         var r = s.closest(".product")
                //             .find("img")
                //             .eq(0)
                //             .attr("src");
                //         i.length >= 4 && i.shift(),
                //             i.push(r),
                //             $(".compare-popup li")
                //             .each(
                //                 (function(t) {
                //                     i[t] && (this.innerHTML =
                //                             '<a href="product-default.html"><figure><img src="' +
                //                             i[t] +
                //                             '"/></figure></a>                                        <a href="#" class="btn btn-remove"><i class="w-icon-times-solid"></i></a>'
                //                             )
                //                     })
                //                 ),
                //             e = i.length,
                //             n()
                //     })
                // )
                // .on("click", ".compare-popup .btn-remove",
                //     (function(a) {
                //         a.preventDefault();
                //         var o = $(a.currentTarget).closest("li"),
                //             s = o.index(),
                //             r = o.find("img").attr("src");

                //         r && $(".page-wrapper .product img")
                //             .each(
                //                 (function() {
                //                     if (this.getAttribute("src") == r ) {
                //                         var e = $(this).closest(".product")
                //                             .find(".btn-compare");
                //                         e.length &&
                //                         (e.removeClass("added")
                //                         .attr("href", "#"),
                //                         e.toggleClass("w-icon-check-solid")
                //                         .toggleClass("w-icon-compare")
                //                         )
                //                     }
                //                 })
                //                 ),
                //             i.splice(s, 1),
                //             3 == s && o.empty(),
                //             o.nextAll().each(
                //                 (function() {
                //                     $(this).prev().html($(this).html())
                //                 })
                //                 )
                //             .last().empty(),
                //             e = i.length,
                //             n()
                //     })
                //     )
                // .on("click", ".compare-popup .btn-clean",
                //     (function(a) {
                //         a.preventDefault(),
                //         $(".page-wrapper .product img")
                //         .each(
                //             (function() {
                //                 var e = $(this),
                //                     a = this.getAttribute("src");
                //                 i.forEach(
                //                     (function(t) {
                //                         if (a == t) {
                //                             var i = e.closest(".product")
                //                             .find(".btn-compare");
                //                             i.length && (i.removeClass("added").attr("href", "#"),
                //                             i.toggleClass("w-icon-check-solid").toggleClass("w-icon-compare")
                //                             )
                //                         }
                //                     })
                //                 )
                //             })
                //             ),
                //         i.splice(0, 4),
                //         e = i.length,
                //         $(this).parent().find(".compare-product-list li").empty(),
                //         n()
                //         })
                //     ),
                $(".compare-popup-overlay").on("click",
                    (function() {
                        a.removeClass("show")
                        })
                    );
            });

            function compareProducts() {

                $.ajax({
                    url: `{{route('compare.ajax')}}`,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        var products = '';
                        $.each(res, function(index, product) {
                            products += `
                            <li>
                                <a href="/products">
                                    <figure id="compare-img-${product.rowId}">

                                    </figure>
                                </a>
                                <form action="javascript:void(0)" method="POST" onSubmit="removeCompare(event)" id="${product.rowId}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-remove" aria-label="button" id="loading-alert-${product.rowId}">
                                        <i class="w-icon-times-solid"></i>
                                    </button>
                                </form>
                            </li>
                            `;
                        });
                        for(i = res.length; i < 4; i++)
                        {
                            products += `
                            <li></li>
                            `;
                        }
                        $('#compare-products').html(products);

                        $.each(res, function(index, product) {

                            var Cartimg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.model.image);
                            $('#compare-img-'+product.rowId).html(Cartimg);

                        });
                        $('#compare-count').html('(' + res.length + ') Products!');

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

            function removeCompare(event) {

                event.preventDefault();


                var form = $(event.target);
                var RowId = form.attr('id');

                var loadingAlert = $('#loading-alert-'+RowId);
                var loaderAlert = $('#loader-alert-'+RowId);
                var spinner = '<span class="atlantic-spinner atlantic-spinner-black"></span>';

                var formData = form.serialize();

                var Durl = "{{route('compare.destroy', [':rowId', 'product'])}}".replace(':rowId', RowId);

                $.ajax({
                    type: 'DELETE',
                    url: Durl,
                    data: formData,
                    beforeSend: function() {
                        loadingAlert.html(spinner);
                        loaderAlert.html(spinner);
                    },
                    success: function(response) {
                        loadingAlert.html('<i class="fas fa-check"></i>');
                        loaderAlert.html('<i class="fas fa-check"></i>');
                        $('#compare-message').html(response.message);
                        compareProducts();
                    },
                    error: function(error) {
                        loadingAlert.html('<i class="fas fa-times"></i>');
                        loaderAlert.html('<i class="fas fa-times"></i>');
                    }
                });
                console.log(RowId);
            };

            function Loader(event) {
                event.preventDefault();
                var button = $(event.target);
                var loader = '<span class="atlantic-spinner atlantic-spinner-black"></span>';

                button.html(loader);

            };

            function dateFormat(date) {
                var convertedDate = moment(date, "YYYY-MM-DD HH:mm:ss").format("MMMM D, YYYY");

                return convertedDate;
            }
            const incrementQty = (prodRowId) => {
                const inputs = document.querySelectorAll('.prod-qty-inp-' + prodRowId);
                inputs.forEach(input => {
                    input.value = Number(input.value) + 1;
                    updateOrderQuantity(prodRowId, input.value);
                });

            }
            const decrementQty = (prodRowId) => {
                const inputs = document.querySelectorAll('.prod-qty-inp-' + prodRowId);
                inputs.forEach(input => {
                    if(input.value < 2) input.value = 2;
                    input.value = Number(input.value) - 1;
                    updateOrderQuantity(prodRowId, input.value);
                });
            }
        </script>
        @include('modal')
        @yield('js')
        <!-- <script>
            (function()
            {
                var js = "window['__CF$cv$params']={r:'7b1f53723b181fa9',m:'wynim8oKjeK7blmjletWF8W3bzLUsyIlTdWlwbiO3Tk-1680504088-0-Afkk85spXbGhQW0thiH1i/IOa0ValHQjMnM5dCMWOLxGa7vlgcgLPbsgW9+lTesCCC5xQycj9ew/ADRviJ/b9HfuW/u6vbQ+R57xlWarlfaBPw0QFhe1s0Q4h0HYymrpAB0BnnQiyKrow+9y8StwZXM=',s:[0x9c702fa2d6,0xcca4408bdc],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible5615.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                        }
                }
                if (document.readyState !== 'loading') {handler();}
                else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);}
                else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {
                        prev(e);

                        if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}
                    };
                }
            })();
        </script> -->
    </body>

</html>

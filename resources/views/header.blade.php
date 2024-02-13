<!-- Start of Header -->
<header class="header">
    <!--<div class="header-top">-->
    <!--    <div class="container">-->
    <!--        <div class="header-left">-->
    <!--            <p class="welcome-msg">Welcome to KADDAH Cleaning Equipment UAE!</p>-->
    <!--        </div>-->
    <!--        <div class="header-right">-->
    <!--            @guest-->
    <!--            <a href="/login" class="d-lg-show">My Account</a>-->
    <!--            <span class="divider d-lg-show"></span>-->
    <!--            <a href="{{route('login.popup')}}" class="d-lg-show login sign-in"><i-->
    <!--                    class="w-icon-account"></i>Sign In</a>-->
    <!--            <span class="delimiter d-lg-show">/</span>-->
    <!--            <a href="{{route('login.popup')}}" class="ml-0 d-lg-show login register">Register</a>-->
    <!--            @else-->
    <!--            <a href="/dashboard" class="d-lg-show"><i-->
    <!--                    class="w-icon-account"></i>{{auth()->user()->name}}</a>-->
    <!--            <span class="divider d-lg-show"></span>-->
    <!--            <a href="javascript:void(0)" class="d-lg-show"-->
    <!--                onClick="$('#logout-user').submit()"><i-->
    <!--                    class="w-icon-power-off"></i>{{ __('Logout') }}</a>-->
    <!--            @endguest-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="/" class="logo">
                    <img src="{{asset('images/logo-new.png')}}" alt="logo" width="100" height="100%" />
                </a>
                <form method="GET" action="{{route('product.search')}}" id="search-form"
                    class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    <!-- <div class="select-box">
                        <select id="searchCategory" name="category">
                            <option value="">All Categories</option>

                        </select>
                    </div> -->
                    <input type="text" class="form-control" name="search" placeholder="Search for a product …"
                        id="text-search" required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>

            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
{{--                    <a href="/wishlist" class="wishlist label-down link d-xs-show">--}}
{{--                        <i class="w-icon-heart"></i>--}}
{{--                        <span class="wishlist-label d-lg-show">Wishlist</span>--}}
{{--                    </a>--}}
                </div>
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">{{Cart::instance('product')->count()}}</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products" id="cart-products">


                        </div>

                        <div class="cart-action mt-2 mb-20">

                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header {{Request::is('/') ? 'has-dropdown' : ''}}">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle {{Request::is('/') ? 'text-dark' : ''}}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Products">
                            <i class="w-icon-category"></i>
                            <span>Browse Products</span>
                        </a>

                        {{menu('head', 'menu.dropdown')}}

                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="{{Request::is('/') ? 'active':''}}">
                                <a href="/">Home</a>
                            </li>
                             <li class="@if(Request::segment(1) == 'about-us') active @endif">
                                <a href="/about-us">About Us</a>
                            </li>
                            <li class="@if(Request::segment(1) == 'brands') active @endif">
                                <a href="/brands">Brands</a>

                            </li>
                            <li class="@if(Request::segment(2) == 'blogs') active @endif">
                                <a href="/media/blogs">Blog</a>
                            </li>
                            <li class="@if(Request::segment(2) == 'events') active @endif">
                                <a href="/media/events">Press</a>
                            </li>
                            <!-- <li class="{{Request::is('services') ? 'active':''}}">
                                <a href="/services">Services</a>
                            </li> -->
                            <!--<li class="{{Request::is('about-us') ? 'active':''}}">-->
                            <!--    <a href="/about-us">About Us</a>-->
                            <!--</li>-->
                            <li class="{{Request::is('contact-us') ? 'active':''}}">
                                <a href="/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End of Header -->

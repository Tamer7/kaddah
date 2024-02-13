<div class="compare-popup">
    <div class="container">
        <div class="compare-title">
            <h4 class="title title-center">Compare Products</h4>
            <p class="compare-count text-center text-light mb-0" id="compare-count">(1 Products)</p>
            <p class="compare-count text-center text-light mb-0" id="compare-message"></p>
        </div>
        <ul class="compare-product-list list-style-none" id="compare-products">
            @foreach(Cart::instance('compare')->content() as $product)
            <li>
                <a href="/products">
                    <figure>
                        <img src="{{asset('storage/'.$product->model->image)}}" alt="">
                    </figure>
                </a>
                <a href="#" class="btn btn-remove">
                    <i class="w-icon-times-solid"></i>
                </a>
            </li>
            @endforeach
            @for($i = Cart::instance('compare')->content()->count(); $i < 4; $i++)
            <li></li>
            @endfor
        </ul>
        <a href="#" class="btn btn-clean">Clean All</a>
        <a href="#" class="btn btn-dark btn-rounded">Start Compare!</a>
    </div>
</div>
<div class="compare-popup-overlay"></div>
<!-- Start of Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
    <a href="/" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    <a href="#" class="mobile-menu-toggle sticky-link">
        <i class="w-icon-category"></i>
        <p>Categories</p>
    </a>
    <a href="/dashboard" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="/cart" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Cart</p>
        </a>
        <div class="dropdown-box">
            <div class="products" id="mobile-cart-products">

            </div>

            <div class="cart-action">
                <a href="/cart" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                <a href="/cart/checkout" class="btn btn-primary  btn-rounded">REQUEST A QUOTE</a>
            </div>
        </div>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a id="mobile-top" href="#top" class="search-toggle sticky-link">
            <i class="w-icon-angle-up"></i>
            <p>Go Top</p>
        </a>
    </div>
</div>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button">
    <i class="w-icon-angle-up"></i>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
            r="34" style="stroke-dasharray: 16.4198, 400;">
        </circle>
    </svg>
</a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <!-- <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a> -->
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="{{route('product.search')}}" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Products</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="/">Home</a></li>
                     <li><a href="/about-us">About Us</a></li>
                    <li>
                        <a href="/brands">Brands</a>
                    </li>
                    <!-- <li>
                        <a href="/services">Services</a>
                    </li> -->
                    <li>
                        <a href="/media/events">Press</a>
                    </li>
                    <li>
                        <a href="/media/blogs">Blog</a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="/about-us">About Us</a>-->
                        
                    <!--</li>-->
                    <li>
                        <a href="/contact-us">Contact Us</a>
                        
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    {{menu('head', 'menu.mobile-menu')}}

                    <li>
                        <a href="/category"
                            class="font-weight-bold text-primary text-uppercase ls-25">
                            View All Categories<i class="w-icon-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Mobile Menu -->
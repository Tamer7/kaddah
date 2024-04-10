<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="cleaning materials, cleaning products, cleaning supplies, cleaning equipment" />
  <meta name="description" content="Explore premium cleaning and care products for floors and stone at Kaddah. Find a wide selection of supplies and equipment for effective cleaning with Kaddah.">
  <meta name="author" content="D-THEMES">

  @yield('canonical')

  <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    
  <!-- Google Tag Manager -->
  <script defer async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGKRQXXG');</script>
  <!-- End Google Tag Manager -->

  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Kaddah",
    "url": "http://www.example.com",
    "logo": "http://www.example.com/images/logo.png",
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+1-800-555-1212",
      "contactType": "customer service"
    }],
    "sameAs": [
      "http://www.facebook.com/yourprofile",
      "http://www.twitter.com/yourprofile",
      "http://plus.google.com/yourprofile"
    ]
  }
  </script>

  @csrf

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>{{ htmlspecialchars_decode($title) }}</title>

  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

  <style>
    #te-search-input:focus-within {
      box-shadow: inset 0 0 0 1px #3b71ca;
    }
  </style>

  @stack('styles')
</head>
<body class="relative">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGKRQXXG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between py-4 px-9" aria-label="Global">
      <div class="flex lg:flex-1 p-21">
        <a href="/" class="-m-1.5 p-1.5">
          <img src="{{ asset('images/about/image 37.png') }}" alt="Kaddah Logo" class="lg:pl-20 md:pl-6">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" id="open_mobile_menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-28">
        <a href="/categories" {{ $segment_1 == "categories" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
        <a href="/brands" {{ $segment_1 === "brands" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
        <a href="/about-us" {{ $segment_1 === "about-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
        <a href="/blogs" {{ $segment_1 === "blogs" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
        <a href="/events" {{ $segment_1 === "events" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
        <a href="/contact-us" {{ $segment_1 === "contact-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6  data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
        <a href="#" id="shopping-cart" class="cart-toggle label-down link relative" data-drawer-target="cart-sidebar" data-drawer-toggle="cart-sidebar" aria-controls="cart-sidebar">
            @if (Cart::instance('product')->count() > 0)    
                <span class="absolute -top-2 -right-2 inline-block bg-sky-400 text-white text-[0.5rem] flex items-center justify-center text-center w-4 h-4 rounded-full font-sm uppercase tracking-wide">
                    {{Cart::instance('product')->count()}}
                </span>
            @endif
            
            <i class="fa fa-shopping-cart text-xl text-slate-600"></i>
        </a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-start">
        <form class="group relative mb-0 flex flex-wrap items-stretch ml-16" method="GET" action="{{ route('products.index') }}">
          <div class="rounded-full text-sm bg-[theme(colors.blue)] text-white px-2 py-1 group-hover:hidden">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <input id="te-search-input" name="search" autocomplete="off" type="search" class="hidden group-hover:block focus:shadow-te-blue relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1 text-base font-normal text-gray-700 outline-none transition duration-300 ease-in-out focus:text-gray-700"
            placeholder="Search products"
            value="{{ Request::get('search') }}"
          >
        </form>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden invisible" id="mobile_menu" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on `lide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white py-4 px-9 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Kaddah</span>
            <img src="{{ asset('images/about/image 37.png') }}" alt="Kaddah Logo">
          </a>
          <button type="button" id="close_mobile_menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/categories" {{ $segment_1 == "categories" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
              <a href="/brands" {{ $segment_1 === "brands" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
              <a href="/about-us" {{ $segment_1 === "about-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
              <a href="/blogs" {{ $segment_1 === "blogs" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
              <a href="/events" {{ $segment_1 === "events" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
              <a href="/contact-us" {{ $segment_1 === "contact-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
              <a href="#" class="cart-toggle label-down link relative my-2" >
                @if (Cart::instance('product')->count() > 0)    
                    <span class="absolute -top-2 -right-2 inline-block bg-sky-400 text-white text-[0.5rem] flex items-center justify-center text-center w-4 h-4 rounded-full font-sm uppercase tracking-wide">
                        {{Cart::instance('product')->count()}}
                    </span>
                @endif
                <i class="fa fa-shopping-cart text-xl text-slate-600"></i>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="relative isolate pt-24 min-h-[650px]">
    @if (empty($attributes["noDecorator"]))
      <div class="absolute top-0 left-0 -z-10 -translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
        <img src="{{ asset('images/about/Vector-left.png') }}" alt="Side image Left">
      </div>
    @endif

    {{ $slot }}

    @if (empty($attributes["noDecorator"]))
      <div class="absolute top-[17px] -z-10 right-0 translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
        <img src="{{ asset('images/about/Vector-right.png') }}" alt="Side image Right">
      </div>
    @endif
  </main>
    <div id="cart-sidebar" class=" w-96 shadow-2 border-l-2 -right-full h-screen bg-white fixed top-0 p-2 z-50 transition-all duration-300 ease-in-out">
        <div class="border-b-2 border-gray-300 h-16 flex items-center justify-between px-4 mb-4">
            <span class="text-lg font-extrabold text-gray-600" >Shopping Cart</span>
            <a href="#" id="close-cart" class="btn-close text-gray-400">Close<i class="ml-1 fa fa-arrow-right"></i></a>
        </div>
        {{-- cart-products --}}
        <div class="products" id="cart-products">

        </div>

        <div class="cart-action mt-2 mb-20 flex justify-between p-2">

        </div>
    </div>
  <footer class="pt-[72px] pb-[42px] bg-[#e5f8ff]">
    <div class="lg:w-[985px] lg:px-0 px-8 mx-auto">
      <div class="divide-y">
        <div class="flex flex-col lg:flex-row items-center pb-[40px] text-gray-600">
          <img src="{{ asset('images/about/image 37.png') }}" alt="Logo Mobile Kaddah" class="lg:pr-20 lg:pb-0 pb-8">
          <div class="flex justify-between items-center w-full">
            <a href="/categories"><span>Products</span></a>
            <a href="/brands"><span>Brands</span></a>
            <a href="/about-us"><span>About</span></a>
            <a href="/blogs"><span>Blog</span></a>
            <a href="/events"><span>Events</span></a>
            <a href="/contact-us"><span>Contact</span></a>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row text-center justify-between items-center pt-[44px] text-neutral-400">
          <div class="flex lg:gap-10 gap-3">
            <span>© <?php echo date("Y"); ?> Kaddah </span>
            <span>Privacy Policy</span>
            <span>Cookies Policy</span>
            <span>Terms of Service</span>
          </div>
          <!-- <div class="flex gap-8 pt-10 lg:pt-0">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i>
          </div> -->
        </div>
      </div>
    </div>
  </footer>

  <div class="product product-single product-popup scale-75 -translate-y-32" id="product-modal"></div>
  @include('modal')

  <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
  <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/zoom/jquery.zoom.js')}}"></script>
  <script src="{{asset('vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('vendor/skrollr/skrollr.min.js')}}"></script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    const mobileMenu = document.getElementById('mobile_menu');
    document.getElementById('open_mobile_menu').addEventListener('click', () => {
      mobileMenu.classList.remove('invisible')
    })
    document.getElementById('close_mobile_menu').addEventListener('click', () => {
      mobileMenu.classList.add('invisible');
    })
  </script>
  <script src="{{asset('js/main.min.js')}}"></script>
  <script src="{{asset('js/ajax.min.js')}}"></script>
  <script src="{{asset('js/common.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <script>
      $(document).ready(function() {
          cartProducts();
          SearchCategory();
          compareProducts();
          $("main").click(function(){
            // alert();
            $("#cart-sidebar").removeClass('right-0');
          })
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
      $(".cart-toggle").click(function(){
        $('#cart-sidebar').toggleClass('right-0');
      })
      $("#close-cart").click(function(){
        $('#cart-sidebar').toggleClass('right-0');
      })
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
                      var totalCnt = 0;
                      $.each(res, function(index, product) {
                         totalCnt += Number(product.qty);
                          html += `
                              <div class="product product-cart flex">
                                  <div class="product-detail w-2/3 text-lg font-bold">
                                      <a href="/"product class="product-name" id="product-name-${product.rowId}">${product.name}</a>
                                      <div class="price-box  flex flex-col mt-5">
                                          <span class="product-price text-sky-400">Code: ${product.model.code}</span>
                                          <span class="product-price number-input-qty flex relative items-center w-28 mt-5">
                                              <span class="text-sky-400 flex items-center">Qty:</span>
                                              <input type="text" readonly class="prod-qty-inp-${product.rowId} ont-sm ml-4 pl-2 py-1 max-w-16 bg-gray-800 rounded-md text-white" name="qty" value="${product.qty}" min="1" onKeyDown="return false" />
                                              <span class="qty-spinners flex flex-col justify-center absolute z-100 right-[-5px] text-white font-sm">
                                                  <button class="qty-spinner qty-increment leading-none" onclick="incrementQty('${product.rowId}')">&#9650;</button>
                                                  <button class="qty-spinner qty-decrement leading-none" onclick="decrementQty('${product.rowId}')">&#9660;</button>
                                              </span>
                                          </span>
                                      </div>
                                  </div>
                                  <figure class="product-media  w-1/3 flex justify-center items-center" id="-url-${product.rowId}">
                                      <a href="/" id="cart-img-${product.rowId}">
                                      </a>
                                  </figure>
                                  <form action="javascript:void(0)" method="POST" onSubmit="removeCart(event)" id="${product.rowId}">
                                      @csrf
                                      @method('DELETE')
                                      
                                      <button class=" border-2 border-gray-200 shadow-3 shadow-slate-400 rounded-full w-6 h-6" aria-label="button" id="loading-alert-${product.rowId}">
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
                                      
                                      <button class="border-2 border-gray-200 shadow-3 shadow-slate-400 rounded-full w-6 h-6" aria-label="button" id="loader-alert-${product.rowId}">
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
                      <a href="/cart" class="flex-1 w-full m-1 border-4 border-gray-600 text-gray-600 h-12 font-medium justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white">VIEW CART</a>
                      <a href="/cart/checkout" class="flex-1 m-1 w-full border-4 border-gray-600 text-gray-600 h-12 font-medium justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white">REQUEST A QUOTE</a>
                      `;
                      $('.cart-action').html(cartButtons);
                      $("#shopping-cart").html(
                        `<span class="absolute -top-2 -right-2 inline-block bg-sky-400 text-white text-[0.5rem] flex items-center justify-center text-center w-4 h-4 rounded-full font-sm uppercase tracking-wide">
                            ${totalCnt}
                            </span>
                        <i class="fa fa-shopping-cart text-xl text-slate-600"></i>
                        `
                      )

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
                      $("#shopping-cart").html(`<i class="fa fa-shopping-cart text-xl text-slate-600"></i>`);
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
                              
                              <button class="border-2 border-gray-200 shadow-3 shadow-slate-400 rounded-full w-6 h-6" aria-label="button" id="loading-alert-${product.rowId}">
                                  <i class="fas fa-times"></i>
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

      document.addEventListener('DOMContentLoaded', function() {
        const cartToggle = document.getElementById('cartToggle');
        const cartMenu = document.getElementById('cartMenu');
        const closeCart = document.getElementById('closeCart');

        cartToggle.addEventListener('click', function(event) {
            event.preventDefault();
            cartMenu.classList.toggle('translate-x-full');
        });

        closeCart.addEventListener('click', function(event) {
            event.preventDefault();
            cartMenu.classList.add('translate-x-full');
        });
    });

  </script>
  @stack('scripts')
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="cleaning materials, cleaning products, cleaning supplies, cleaning equipment" />
  <meta name="description" content="">
  <meta name="author" content="D-THEMES">

  <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">

  <!-- Google Tag Manager -->
  <script defer async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGKRQXXG');</script>
  <!-- End Google Tag Manager -->

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

  <main class="relative isolate pt-24 min-h-[650px]">
    @if (empty($attributes["noDecorator"]))
      <div class="absolute top-0 left-0 -z-10 -translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
        <img src="{{ asset('images/about/Vector-left.png') }}" alt="">
      </div>
    @endif

    {{ $slot }}

    @if (empty($attributes["noDecorator"]))
      <div class="absolute top-[17px] -z-10 right-0 translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
        <img src="{{ asset('images/about/Vector-right.png') }}" alt="">
      </div>
    @endif
  </main>

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
  @stack('scripts')

</body>
</html>

<x-layout title="Cart">

    <!-- Start of Main -->
    <x-panel>
        <!-- Start of Breadcrumb -->
        {{-- <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="active"><a href="/cart">CART</a></li>
                    <li><a href="/cart/checkout">REQUEST A QUOTE</a></li>
                </ul>
            </div>
        </nav> --}}
        <!-- End of Breadcrumb -->
        <x-slot name="title"> CART/Inquiry </x-slot>
        <!-- Start of PageContent -->
        <div class="sm:container">
            <div class="row gutter-lg mb-10">
                <div class="mb-6 cart-content">
                    @if (Cart::instance('product')->count() > 0)
                    <div id="cart-page-products">
                        <div class="text-2xl text-sky-400">
                            Loading ....
                        </div>
                    </div>
                    <div class="cart-page-action mb-6 flex items-center flex-col md:flex-row mt-2">
                        <div class="flex-1">
                            <a href="{{route('categories.index')}}"
                                class="m-1 border-[3px] border-gray-600 px-3 text-gray-600 w-48 h-12 font-bold justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white">
                                <i class="fa fa-arrow-left mr-2"></i>Continue Browsing
                            </a>
                        </div>
                        <div class=" flex-1 flex flex-col md:flex-row justify-end">
                            <a href="{{route('cart.checkout')}}"
                                class="m-1 border-[3px] px-3  border-gray-600 text-gray-600 w-48 h-12 font-bold justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white">REQUEST
                                A QUOTE <i class="ml-2 fa fa-arrow-right"></i></a>
                            <button
                                class="m-1 border-[3px] border-gray-600 text-gray-600 px-3 w-48 h-12 font-bold justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white"
                                onClick="emptyCart(event)"> Clear Cart</button>
                        </div>
                    </div>
                    @else
                    <div class="page-content mb-5 mt-5 pb-2">
                        <div class="container">
                            <section class="mb-7">
                                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4"
                                    role="alert">
                                    <p class="font-bold">Heads up!</p>
                                    <p>You haven't added anything to your cart. Start adding products to receive a free
                                        quote.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                    <a href="{{route('categories.index')}}"
                        class="m-1 border-[3px] px-3  border-gray-600 text-gray-600 w-48 h-12 font-bold justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white"><i
                            class="fa fa-arrow-left mr-2"></i>Continue Browsing</a>
                    @endif
                </div>
            </div>
        </div>
        <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
        @push('scripts')
            <script>
                $(document).ready(function() {
                    CartPageProducts();

                });
                function CartPageProducts() {
                    $.ajax({
                        type: 'GET',
                        url: `{{route('cart.items')}}`,
                        dataType: 'json',
                        success: function(res) {
                            var cartProducts = '';
                            if(res.length > 0)
                            {
                                $('#cart-page-products').html('');
                                $.each(res, function(index, product) {
                                    console.log(product,'000');
                                    cartProducts += `
                                    <div class="flex  p-2 sm:flex-row justify-between h-32 items-center shadow-lg shadow-slate-200 mt-4 border-2 border-slate-100 rounded-md">
                                        <div class="w-full sm:1/2 flex items-center">
                                            <div class="product-thumbnail">
                                                <div class="p-relative">
                                                    <a href="/"
                                                        class="cart-product-url-${product.rowId}">
                                                        <figure id="cart-product-img-${product.rowId}">
                                                            <img src="/"
                                                                class=" max-h-24" data-xblocker="passed"
                                                                style="visibility: visible;">
                                                        </figure>
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-name ml-3 text-neutral-800 flex flex-col">
                                                <a href="/"
                                                    class="cart-product-url-${product.rowId} text-sm sm:text-lg font-semibold">
                                                    ${product.model.name}
                                                </a>
                                                <a href="/"
                                                    class="text-sm" id="category-name-${product.id}">Loading...</a>
                                            </div>
                                        </div>
                                        <div class="w-full sm:w-1/2 flex justify-around items-center">
                                            <div class="product-stock-status text-center flex flex-col">
                                                <span class="product-price relative">

                                                    <span class="product-price number-input-qty flex text-xl font-bold h-10">
                                                        <input type="number"
                                                            class="prod-qty-inp-${product.rowId} w-10" name="qty"
                                                            value="${product.qty}" min="1" onkeydown="return false">
                                                        <span class="qty-spinners flex flex-col text-sky-400 absolute right-0" style="background-color: white;">
                                                            <button class="qty-spinner qty-increment leading-none"
                                                                onclick="incrementQty('${product.rowId}')">▲</button>
                                                            <button class="qty-spinner qty-decrement leading-none"
                                                                onclick="decrementQty('${product.rowId}')">▼</button>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="btn btn-link" aria-label="button"
                                                    id="loader-alert-${product.rowId}"></span>
                                            </div>
                                            <div class="product-price"><span class="amount">${product.model.code}</span></div>
                                            <div class="product-action-remove">
                                                <form action="javascript:void(0)" method="POST" onsubmit="removeCartPage(event)"
                                                    class="${product.rowId}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-close" aria-label="button"
                                                        id="cart-loader-${product.rowId}">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    `;
                                    
                                });

                                $('#cart-page-products').html(cartProducts);

                                $.each(res, function(index, product) {
                                    var getCategory = "{{route('product.category', ':productId')}}".replace(':productId', product.model.id);

                                    $.ajax({
                                        url: getCategory,
                                        method: 'GET',
                                        success: function(res) {
                                            var parentCategory = res.parent;
                                            var subCategory = res.category;
                                            var brandName = $('#brand-name-'+product.model.id);
                                            var categoryName = $('#category-name-'+product.model.id);

                                            var productUrl = "{{route('products.productSpec', [':parent', ':child', ':slug'])}}"
                                                                .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug).replace(':slug', product.model.slug);

                                            $('.cart-product-url-'+product.rowId).attr('href', productUrl);

                                            var categoryUrl = "{{route('categories.sub', [':parent', ':child'])}}"
                                                                .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug);

                                            categoryName.attr('href', categoryUrl).html(subCategory.name);
                                            
                                        },
                                        error: function(error) {
                                            console.log(error);
                                        }
                                    });
                                });

                                $.each(res, function(index, product) {
                                    
                                    var Cartimg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.model.image).addClass('max-h-24 min-h-24 min-w-24');
                                    $('#cart-product-img-'+product.rowId).html(Cartimg);
                                    
                                });
                            }
                            else {
                                var cartContent = `
                                <div class="page-content mb-5 mt-5 pb-2">
                                        <div class="container">
                                            <section class="mb-7">
                                                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                                                    <p class="font-bold">Heads up!</p>
                                                    <p>You haven't added anything to your cart. Start adding products to receive a free quote.</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <a href="{{route('categories.index')}}" class="m-1 border-[3px] px-3  border-gray-600 text-gray-600 w-48 h-12 font-bold justify-center rounded inline-flex items-center hover:bg-gray-600 hover:text-white"><i class="fa fa-arrow-left mr-2"></i>Continue Browsing</a>
                                `;
                                $('.cart-content').html(cartContent);
                            }
                            
                            
                            
                        },
                        error: function(error) {

                        }
                    });
                }

                function removeCartPage(event) {
                    event.preventDefault();
                    

                    var form = $(event.target);
                    var RowId = form.attr('class');
                    
                    var loadingAlert = $('#cart-loader-'+RowId);

                    var formData = form.serialize();

                    var Durl = "{{route('cart.destroy', [':rowId', 'product'])}}".replace(':rowId', RowId);
                    
                    $.ajax({
                        type: 'DELETE',
                        url: Durl,
                        data: formData,
                        beforeSend: function() {
                            loadingAlert.html('<span class="atlantic-spinner atlantic-spinner-black"></span>');
                        },
                        success: function(response) {
                            // loadingAlert.html('<i class="fas fa-check"></i>');
                            cartProducts();
                            CartPageProducts();
                        },
                        error: function(error) {
                            loadingAlert.html('<i class="fas fa-times"></i>');
                        }
                    });
                    console.log(RowId);
                };

                function emptyCart(event) {
                    event.preventDefault();
                    var emptyUrl = "{{route('empty.cart')}}";

                    $.ajax({
                        type: 'GET',
                        url: emptyUrl,
                        dataType: 'json',
                        beforeSend: function() {
                            $('.btn-clear').html('Processing...').addClass('atlantic-spinner').addClass('atlantic-spinner-black');
                        },
                        success: function(res) {
                            CartPageProducts();
                            cartProducts();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                };
            </script>
        @endpush
    </x-panel>
</x-layout>
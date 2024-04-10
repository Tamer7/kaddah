<x-layout title="Cart">

    <!-- Start of Main -->
    <x-panel>

        <!-- Start of Main -->
        <!-- Start of Breadcrumb -->
        {{-- <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="/cart">Cart</a></li>
                    <li class="active"><a href="/cart/checkout">REQUEST A QUOTE</a></li>
                </ul>
            </div>
        </nav> --}}
        <x-slot name="title"> Quotation </x-slot>
        <!-- End of Breadcrumb -->


        <!-- Start of PageContent -->
        <div class="page-content">

            <div class="sm:container">
                {{-- @guest
                <div class="login-toggle">
                    Returning customer? <a href="#"
                        class="show-login font-weight-bold text-uppercase text-dark">Login</a>
                </div>
                <form class="login-content" action="{{route('login')}}" method="post">
                    <p>If you have shopped with us before, please enter your details below.
                        If you are a new customer, please proceed to the Billing section.</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control form-control-md" name="email" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="text" class="form-control form-control-md" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember">
                        <label for="remember" class="mb-0 lh-2">Remember me</label>
                        <a href="#" class="ml-3">Last your password?</a>
                    </div>
                    <button class="btn btn-rounded btn-login">Login</button>
                </form>
                @endguest --}}
                    <div class=" grid grid-cols-12 mb-9 text-slate-800 text-sm ">
                        <form class="form checkout-form col-span-12 md:col-span-7" id="cart-checkout-form" action="{{route('checkout.store')}}" method="post">
                            @csrf
                        <div class=" px-3 mb-4">
                            <h3 class=" uppercase font-bold  text-lg ls-10 pt-1 pb-3 mb-0">
                                GENERAL INFORMATION
                            </h3>
                            <div class="flex flex-col mb-3">
                                <label>Full Name *</label>
                                <input type="text" class="w-full border rounded-md border-slate-300 h-8" name="name" required>
                            </div>
                            <div class="flex flex-col mb-3">
                                <label>Contact Number *</label>
                                <input type="text" class="w-full border rounded-md border-slate-300 h-8" name="phone" required>
                            </div>
                            <div class="flex flex-col mb-3">
                                <label>E-mail Address *</label>
                                <input type="email" class="w-full border rounded-md border-slate-300 h-8" name="email" required>
                            </div>
                            <div class="flex flex-col mb-3">
                                <label>Company Name</label>
                                <input type="text" class="w-full border rounded-md border-slate-300 h-8" name="company">
                            </div>
                            <div class="flex flex-col">
                                <label>Emirate Inquiring From *</label>
                                <div class="select-box mt-2">
                                    <select id="citySel" name="state" class="w-full border rounded-md border-slate-300 h-8 block appearance-none w-full bg-white border border-gray-400 text-gray-700 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500 focus:bg-white">
                                        <option value="Dubai" class="border-none" selected="selected">Dubai
                                        </option>
                                        <option value="Sharjah">Sharjah</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Umm Al Quwain">Umm al Quwain</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="OutsideUAE">I'm inquiring from outside the UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div id="OutsideUAEDet" class="flex flex-col mt-2" style="display:none;">
                                <label>Country & City Inquiring From *</label>
                                <input class="w-full border rounded-md border-slate-300 h-8 mt-2" name="otherCity">
                            </div>

                            <div class="flex flex-col mt-3">
                                <label for="order-notes">Additional Requests</label>
                                <textarea class="p-2 w-full border rounded-md border-slate-300 mb-0" id="order-notes" name="order-notes" cols="30"
                                    rows="4"
                                    placeholder="Do you require additional product information? Product specifications, catalogs, demonstrations, & others…"></textarea>
                            </div>
                            <button type="submit" class="display:none;" id="btn-ask-quotation">Ask For Quotation</button>
                        </form>
                        </div> 
                        <div class="col-span-12 md:col-span-5 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <h3 class=" uppercase text-lg font-bold text-slate-800 ls-10">Your Inquiry</h3>
                                <div class="order-summary">
                                    <div id="cart-page-products">

                                    </div>
                                    <div id="recaptcha-el" class="g-recaptcha mt-4 checkout-actions-pc"
                                        data-sitekey="{{config('services.recaptcha.key')}}"
                                        data-validate="{required:true}"></div>
                                    <div class="form-group place-order pt-6 checkout-actions-pc">
                                        <button type="submit" onclick="$('#btn-ask-quotation').click();" id="btn-ask-quotation" class="m-1  px-3  w-full h-12 font-bold justify-center rounded inline-flex items-center bg-gray-600 text-white">Ask For
                                            Quotation</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div id="recaptcha-el" class="g-recaptcha mt-4 checkout-actions-mobile"
                        data-sitekey="{{config('services.recaptcha.key')}}" data-validate="{required:true}"></div>
                    <div class="form-group place-order pt-6 checkout-actions-mobile">
                        <button type="submit" class="m-1  px-3  w-full h-12 font-bold justify-center rounded inline-flex items-center bg-gray-600 text-white">Ask For Quotation</button>
                    </div> --}}
            </div>
        </div>
        <!-- End of PageContent -->


@push('scripts')

<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
<script>
    $('#citySel').on("change", function(e) {
    let outsideUAEDet = $('#OutsideUAEDet');
    if($(this).val() == 'OutsideUAE') {
        $('#OutsideUAEDet').slideDown();
        $('#OutsideUAEDet input').attr('required', true);
    } else { 
        $('#OutsideUAEDet input').attr('required', false)
        $('#OutsideUAEDet').hide();
    }
});

$(document).ready(function() {
    $("#btn-ask-quotation").click(function(e){
        // e.preventDefault();
        // $("#cart-checkout-form").submit();
    })
    setTimeout(() => {
        if(screen.width <= 767) 
            $('.checkout-actions-pc').remove()
        else 
            $('.checkout-actions-mobile').remove()

        grecaptcha.render('recaptcha-el', {
            'sitekey': "{{config('services.recaptcha.key')}}"
        });

        const $recaptcha = document.querySelector('#g-recaptcha-response');
        if ($recaptcha) {
            $recaptcha.setAttribute('required', 'required');
        }
    }, 1000);
});

</script>
@endpush
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
                        cartProducts += `
                        <div class="flex  p-2 flex-col sm:flex-row justify-between h-40 lg:h-32 items-center shadow-lg shadow-slate-200 mt-4 border-2 border-slate-100 rounded-md">
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
                                        class="cart-product-url-${product.rowId} text-sm lg:text-lg font-semibold">
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
                                            <input type="text" readonly
                                                class="prod-qty-inp-${product.rowId} w-10" name="qty"
                                                value="${product.qty}" min="1" onkeydown="return false">
                                            <span class="qty-spinners flex flex-col text-sky-400 absolute right-0">
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
                                <div class="product-price"><span class="amount">ST18</span></div>
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
                loadingAlert.html('<i class="fas fa-check"></i>');
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
<!-- End of Main -->

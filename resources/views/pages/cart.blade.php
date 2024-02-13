@extends('master')

@section('title', 'Cart')

@section('content')

<!-- Start of Main -->
<main class="main cart">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="active"><a href="/cart">CART</a></li>
                <li><a href="/cart/checkout">REQUEST A QUOTE</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg mb-10">
                <div class="mb-6 cart-content">
                    <table class="shop-table cart-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Image</span></th>
                                <th>Product Name</th>
                                <th class="product-price"><span>Code</span></th>
                                <th class="product-stock-status"><span>Brand</span></th>
                                <th class="product-stock-status"><span>Category</span></th>
                                <th class="product-stock-status"><span>Qty</span></th>
                            </tr>
                        </thead>
                        <tbody id="cart-page-products">
                            @foreach(Cart::instance('product')->content() as $product)
                            <tr>
                                <td class="product-thumbnail">
                                    
                                </td>
                                <td class="product-name">
                                    <div class="items-loader"><div></div><div></div><div></div><div></div></div>
                                </td>
                                <td class="product-price">
                                    
                                </td>
                                <td class="product-quantity">
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="cart-page-action mb-6">
                        <a href="/category" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Browsing</a>
                        <a href="{{route('cart.checkout')}}" class="btn btn-primary btn-rounded btn-icon-right btn-shopping">REQUEST A QUOTE <i class="w-icon-long-arrow-right"></i></a>
                        <button class="btn btn-rounded btn-default btn-clear" onClick="emptyCart(event)"> Clear Cart</button> 
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->

@endsection

@section('js')
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
                    $.each(res, function(index, product) {
                        cartProducts += `
                        <tr>
                            <td class="product-thumbnail">
                                <div class="p-relative">
                                    <a href="/" class="cart-product-url-${product.rowId}">
                                        <figure id="cart-product-img-${product.rowId}" >
                                                    
                                        </figure>
                                    </a>
                                    <form action="javascript:void(0)" method="POST" onSubmit="removeCartPage(event)" class="${product.rowId}">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button class="btn btn-close" aria-label="button" id="cart-loader-${product.rowId}">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class="product-name text-center">
                                <a href="/" class="cart-product-url-${product.rowId}">
                                    ${product.model.name}
                                </a>
                            </td>
                            <td class="product-price"><span class="id-tag">Code:&nbsp;</span><span class="amount">${product.model.code}</span></td>

                            <td class="product-stock-status text-center">
                                <span class="wishlist-in-stock">
                                    <span class="id-tag">Brand:</span>
                                    <a href="/brands/${product.options.brand.slug}" id="brand-name-${product.id}">${product.options.brand.name}</a>
                                </span>
                            </td>
                            <td class="product-stock-status text-center">
                                <span class="wishlist-in-stock">
                                    <span class="id-tag">Category:</span>
                                    <a href="#" id="category-name-${product.id}">Loading...</a>
                                </span>
                            </td>
                            <td class="product-stock-status text-center">
                                <span class="product-price">
                                    <span class="id-tag">Qty:</span>
                                    <span class="product-price number-input-qty">
                                    <input type="number" class="prod-qty-inp-${product.rowId}" name="qty" value="${product.qty}" min="1" onKeyDown="return false" />
                                    <span class="qty-spinners">
                                        <button class="qty-spinner qty-increment" onclick="incrementQty('${product.rowId}')">&#9650;</button>
                                        <button class="qty-spinner qty-decrement" onclick="decrementQty('${product.rowId}')">&#9660;</button>
                                    </span>
                                    </span>
                                </span>
                                <span class="btn btn-link" aria-label="button" id="loader-alert-${product.rowId}"></span>
                            </td>
                        </tr>
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

                                var productUrl = "{{route('product.show', [':parent', ':child', ':slug'])}}"
                                                    .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug).replace(':slug', product.model.slug);

                                $('.cart-product-url-'+product.rowId).attr('href', productUrl);

                                var categoryUrl = "{{route('category.products', [':parent', ':child'])}}"
                                                    .replace(':parent', parentCategory.slug).replace(':child', subCategory.slug);

                                categoryName.attr('href', categoryUrl).html(subCategory.name);
                                
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    });

                    $.each(res, function(index, product) {
                        
                        var Cartimg = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.model.image).attr('width', '300').attr('height', '338');
                        $('#cart-product-img-'+product.rowId).html(Cartimg);
                        
                    });
                }
                else {
                    var cartContent = `
                    <div class="page-content mb-5 mt-5 pb-2">
                        <div class="container">
                            <section class="mb-7">
                                <div class="row">
                                    <div class="alert alert-primary alert-simple alert-inline show-code-action">
                                        <h4 class="alert-title">Heads up!</h4>
                                        You haven't added anything to your cart. Start adding products to receive a free quote.
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <a href="/category" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Browsing</a>
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
@endsection
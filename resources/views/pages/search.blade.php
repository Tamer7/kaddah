@extends('master')

@section('title', $query)

@section('content')

<!-- Start of Main -->
<main class="main wishlist-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">SEARCH</h1>
        </div>
    </div>
    <br />
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <!-- <nav class="breadcrumb-nav mb-10">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>search</li>
                <li>{{$query}}</li>
            </ul>
        </div>
    </nav> -->
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            @if ($products->total() > 0 )
                <h3 class="wishlist-title">Your search query for <span class="text-primary">{{ $query }}</span> showed {{ $products->total() }} @if($products->total() > 1) results @else result @endif
                    @if($request->category)
                    for the category <a href="{{route('category.child', $request->category)}}"><span class="text-primary"> {{$request->category}}</span></a>
                    @endif
                </h3>
                <table class="shop-table search-res wishlist-table mb-4">
                    <thead>
                        <tr>
                            <th class="product-name"><span>Image</span></th>
                            <th>Product Name</th>
                            <th class="product-price"><span>Code</span></th>
                            <th class="product-stock-status"><span>Brand</span></th>
                            <th class="product-stock-status"><span>Category</span></th>
                            <th class="wishlist-action">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $add => $product)
                        <?php
                            $child = $product->categories()->first();
                            
                            $parent = $child->parentId;
                        
                        ?>
                        <tr>
                            <td>
                                <div class="p-relative">
                                    <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                        <figure>
                                            <img src="{{asset('storage/'.$product->image)}}" alt="product" width="300"
                                                height="250" style="margin: auto;">
                                        </figure>
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                    {{$product->name}}
                                </a>
                            </td>
                            <td class="product-price text-center">
                                <span class="new-price"> <span class="id-tag">Code:&nbsp;</span>{{$product->code}}</span>
                            </td>
                            <td class="product-stock-status text-center">
                                <span class="wishlist-in-stock">
                                    <span class="id-tag">Brand:</span>
                                    <a href="{{route('brand.show', $product->brand->slug)}}">{{$product->brand->name}}</a>
                                </span>
                            </td>
                            <td class="product-stock-status text-center">
                                <span class="wishlist-in-stock">
                                    <span class="id-tag">Category:</span>
                                    <a href="{{route('category.products', ['parent' => $parent->slug, 'child' => $child->slug])}}">{{$child->name}}</a>
                                </span>
                            </td>
                            <td class="wishlist-action">
                                <div class="d-lg-flex">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline btn-default show-modal btn-rounded btn-sm mb-2 mb-lg-0" 
                                        id="{{$product->slug}}"
                                        style="line-height: inherit;"
                                    >
                                        Quick View
                                    </a>
                                    <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$product->id}}"></a>

                                    <a href="javascript:void(0)" class="btn btn-primary btn-rounded btn-sm ml-lg-2 btn-cart-design"
                                    id="loading-alert-{{$product->id}}"
                                    onClick="$('.cart-submit-search-{{$product->id}}').submit();">
                                        @if($product->inCart == true) 
                                            <span>This Product is Already in Your Cart</span> 
                                        @else 
                                            <span>Add to cart</span> 
                                        @endif
                                    </a>
                                    
                                    <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form cart-submit-search-{{$product->id}}" 
                                        id="{{$product->id}}"  style="display:none;"
                                    >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                    </form>
                                    
                                    <button class="d-none btn-cart" id="cart-response-{{$product->id}}">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->appends(request()->input())->links() }}
            @else
            <h3 class="wishlist-title">Your search query for <span class="text-primary">{{$query}}</span> showed no results.</h3>
            <!-- <div class="page-content mb-5 mt-5 pb-2">
                <div class="container">
                    <section class="mb-7">
                        <div class="row">
                            <div class="alert alert-error alert-simple alert-inline show-code-action">
                                 Your search query for <span class="text-primary">{{$query}}</span> showed no results.
                            </div>
                        </div>
                    </section>
                </div>
            </div> -->
            <br />
            @endif
        </div>
    </div>

</main>
<!-- End of Main -->

@endsection

@section('js')

<script>
    $(document).ready(function() {
        var query = `{{$query}}`;
        
        $('input[name="search"]').val(query);

        var searchCategory = `{{$request->category}}`;

        if(searchCategory.length > 0) {

            var category = $('select option[name="searchCat"][value="' + searchCategory + '"]');

            console.log(category);
            
        } else {
            console.log(searchCategory.length);
        }

    });
    $('.search-add-cart').on("submit", function(e) {
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

               
                var click = $('#cart-response-'+product.id);
                click.html(message);

                loadingAlert.html('<i class="fas fa-check"></i><span>'+message+'</span>');
                loaderAlert.removeClass(loaderClass);
                loaderAlert.addClass('w-icon-check-solid');
                
                click.click();
                cartProducts();
            },
            error: function(error) {
                console.log(error);
                loadingAlert.html('<i class="fas fa-times"></i><span>Something went wrong.</span>');
                loaderAlert.removeClass(loaderClass);
                loaderAlert.addClass('w-icon-cart');
            }
        });
        
    });
</script>

@endsection
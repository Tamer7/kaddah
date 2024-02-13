@extends('master')

@section('title', 'Wishlist')

@section('content')

<!-- Start of Main -->
<main class="main wishlist-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">Wishlist</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">My Account</a></li>
                <li>Wishlist</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            <h3 class="wishlist-title">My wishlist</h3>
            <table class="shop-table wishlist-table">
                <thead>
                    <tr>
                        <th class="product-name"><span>Product</span></th>
                        <th></th>
                        <th class="product-price"><span>Code</span></th>
                        <th class="product-stock-status"><span>Brand</span></th>
                        <th class="wishlist-action">Actions</th>
                    </tr>
                </thead>
                <tbody id="wishlist-products">
                    @foreach($products as $product)
                        <?php
                            $child = $product->categories()->first();
                            $parent = $child->parentId;
                        
                        ?>
                    
                        @if($product)
                        <tr>
                            <td class="product-thumbnail">
                                <div class="p-relative">
                                    <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                        <figure>
                                            <img src="{{asset('storage/'.$product->image)}}" alt="product" width="300"
                                                height="338">
                                        </figure>
                                    </a>
                                    <button type="submit" class="btn btn-close"><i
                                            class="fas fa-times"></i></button>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                    {{$product->name}}
                                </a>
                            </td>
                            <td class="product-price">
                                <ins class="new-price">{{$product->code}}</ins>
                            </td>
                            <td class="product-stock-status">
                                <span class="wishlist-in-stock">{{$product->brand->name}}</span>
                            </td>
                            <td class="wishlist-action">
                                <div class="d-lg-flex">
                                    <a href="javascript:void(0);"
                                        class="show-modal btn btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0 wishlist-modal"
                                        id="{{$product->slug}}">Quick
                                        View</a>

                                        <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$product->id}}"></a>

                                    <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form" id="{{$product->id}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <button type="submit" class="btn btn-cart-design btn-dark btn-rounded btn-sm ml-lg-2 btn-wishlist-{{$product->id}}" id="loading-alert-{{$product->id}}">
                                            <span>Add to Cart</span>
                                        </button>
                                    </form>
                                    
                                    <button class="d-none btn-cart" id="cart-response-{{$product->id}}">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->

@endsection

@section('js')

<script>
    var wishlsitproducts = '';
    
    $('#wishlist-products').html();
</script>

@endsection
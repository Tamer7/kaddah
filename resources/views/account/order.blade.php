@extends('master')

@section('content')

<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{$order->tracking_id}}
                        </li>
                    </ol>
                </div>
            </nav>

            <h1>My Order</h1>
        </div>
    </div>
    
    <div class="shopping_cart_area">
        <div class="container">
            <div class="wishlist-title">
                <div class="row">
                    <div class="col-6" style="float:left;">
                        <h4>Tracking ID : <span>{{$order->tracking_id}}</span></h4>
                    </div>
                    <div class="col-6" style="float:left;text-align:right;">
                        <h4>Ordered at : <span>{{dateFormat($order->created_at, 'F j, Y')}}</span></h4>
                    </div>
                    &nbsp;
                    <div class="col-lg-12">
                        <div class="coupon_code">
                            <h3>Track Order</h3>
                            <div class="coupon_inner">
                                <div class="progress-track">
                                    <ul id="progressbar">
                                        @if($order->status == 'CANCELLED')
                                        <style>
                                            #progressbar li {
                                                width: 50%;
                                            }
                                        </style>
                                            <li class="step0 active " id="step1">Ordered({{date('d-m-Y', strtotime($order->created_at))}}) </li>
                                            <li class="step0 text-right active " id="step3" style="display:none;"> </li>
                                            <li class="step0 text-right active " id="step4">Cancelled </li>
                                        @else
                                            <li class="step0 active " id="step1">Ordered({{date('d-m-Y', strtotime($order->created_at))}}) @if($order->status == 'PENDING') (Pending) @if($order->state == 'Dubai') 3 days @else 5-7 days @endif @endif</li>
                                            <li class="step0 @if($order->status == 'PENDING') @else active @endif text-center" id="step2">Processing @if($order->status == 'PROCESSING') ( @if($order->state == 'Dubai') 2 days @else 2-3 days @endif ) @endif</li>
                                            <li class="step0 @if($order->status == 'PENDING') @elseif($order->status == 'PROCESSING') @else active @endif text-right" id="step3">Shipped @if($order->status == 'SHIPPED') (1 day) @endif</li>
                                            <li class="step0 text-right @if($order->status == 'DELIVERED') active @elseif($order->status == 'REQUESTED REFUND') active @elseif($order->status == 'REFUNDED') active @endif" id="step4">Delivered @if($order->status == 'DELIVERED')({{date('d-m-Y', strtotime($order->delivered_at))}})@endif</li>
                                            @if($order->status == 'REQUESTED REFUND' OR $order->status == 'REFUNDED')
                                            <li class="step0 text-right active" id="step4">@if($order->status == 'REQUESTED REFUND') Requested for Refund @elseif($order->status == 'REFUNDED') Refunded ({{date('d-m-Y', strtotime($order->updated_at))}}) @endif </li>
                                            @else
                                            <style>
                                                #progressbar li {
                                                    width: 25%;
                                                }
                                            </style>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                                <hr>
                                @if($order->status == 'PENDING')
                                    <div class="checkout_btn">
                                        <button class="btn btn-dark" data-toggle="modal" data-target="#{{$order->tracking_id}}">Cancel Order</a>
                                    </div>
                                @elseif($order->status == 'DELIVERED')
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('order.print', $order->tracking_id)}}" class="btn btn-primary">{{ __('Print Invoice') }}</a>
                                    @if($expired > 7)
                                    @else
                                    <a data-toggle="modal" data-target="#refund-{{$order->tracking_id}}" class="btn btn-gray" >{{ __('Refund Order') }}</a>
                                    @include('dashboard.refundModal')
                                    @endif
                                    
                                    <a href="javascript:$('#reorder-{{$order->tracking_id}}').submit();" class="btn btn-dark">{{ __('Reorder') }}</a>
                                    <form action="{{route('order.reorder')}}" method="post" id="reorder-{{$order->tracking_id}}" class="d-none">
                                        @csrf
                                        <input type="hidden" value="{{$order->id}}" name="id">
                                    </form>
                                </div>
                                @endif
                            </div>
                            
                            <!-- Modal Cancel Order Start -->
                            <div class="modal fade" id="{{$order->tracking_id}}" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalCenterTitle">Confirm Order Cancel</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal_body">
                                            <div class="m-2 py-2 px-5">
                                                <h5>Cancel Order Terms:</h5>
                                                <ul>
                                                    <li>Once you cancel the order, you can't change the status again.</li>
                                                    <li>You can contact our team in case of processing the order again and We'll review your details.</li>
                                                    <li>We'll refund your payment within 1 week.</li>
                                                    <li>You can see your order history even if you cancel it.</li>
                                                </ul>  
                                            </div>
                                        </div> 
                                        
                                        <div class="modal-footer justify-content-between">
                                            <form action="{{route('order.cancel', $order->id)}}" method="POST" >
                                                @method('patch')
                                                @csrf
                                                <button type="submit" class="btn btn-dark">{{ __('Cancel Order') }}</button>
                                            </form>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Cancel Order End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h4>Ordered Products</h4>
                    </div>
                    &nbsp;
                    <div class="row gutter-lg mb-10">
                        @if($order->products()->count() > 0)
                        <div class="mb-6 cart-content">
                            
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Image</span></th>
                                        <th>Name</th>
                                        <th class="product-price"><span>Code</span></th>
                                        <th class="product-stock-status"><span>Brand</span></th>
                                        <th class="product-stock-status"><span>Category</span></th>
                                    </tr>
                                </thead>
                                <tbody id="cart-page-products">
                                    @foreach($order->products as $product)
                                    <?php
                                        $child = $product->categories()->first();
                                                
                                        $parent = $child->parentId;
                                    ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}">
                                                    <figure>
                                                            <img src="{{asset('storage/'.$product->image)}}" alt="">    
                                                    </figure>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name text-center">
                                            <a href="{{route('product.show', ['parent' => $parent->slug, 'child' => $child->slug, 'slug' => $product->slug])}}" class="cart-product-url-${product.rowId}">
                                                {{$product->name}}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">{{$product->code}}</span></td>

                                        <td class="product-stock-status text-center">
                                            <h4 class="product-name">
                                                <a href="{{route('brand.show', $product->brand->slug)}}">{{$product->brand->name}}</a>
                                            </h4>
                                        </td>
                                        <td class="product-stock-status text-center">
                                            <h4 class="product-name">
                                                <a href="#">{{$parent->name}}</a> | <a href="#">{{$child->name}}</a>
                                            </h4>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- End .cart-table-container -->
                        
                        @endif
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="order-summary">
                        <h3>Summary</h3>
                        
                        <div class="payment-methods">
                            
                            <ul class="checkout-steps">
                                <li>
                                    <h2 class="step-title mb-2">Customer Details</h2>
                                    <p> {{$order->billing_name}} </p>
                                    <p> {{$order->billing_email}} </p>
                                    <p> {{$order->billing_phone}} </p>
                                    <p> {{$order->billing_address}}, {{$order->area}} </p>
                                    <p> {{$order->state}} </p>
                                    @if($order->note)
                                    <p> {{$order->note}} </p>
                                    @endif
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <!-- End .col-lg-8 -->

                <div class="col-lg-5">
                    <div class="order-summary">
                        <h3>YOUR ORDER</h3>

                        <div class="payment-methods">
                            <table class="table table-mini-cart">
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Subtotal</h4>
                                        </td>
                                        <td class="price-col">
                                            <span>AED {{format($order->billing_subtotal)}}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="2">
                                            <h4 class="m-b-sm">Discount</h4>     
                                        @if ($order->billing_discount_code)
                                        Coupon({{ $order->billing_discount_code }}):
                                        </td>
                                        <td>
                                            -AED {{format($order->billing_discount)}}
                                        
                                        @else
                                        </td>
                                        <td>
                                            - AED 0.00
                                        @endif
                                        </td>
                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <b class="total-price"><span>AED {{format($order->billing_total)}}</span></b>
                                        </td>
                                    </tr>
                                    
                                    
                                </tfoot>
                            </table>
                        </div>
                        
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->        
        </div>     
    </div>
</main>

@endsection
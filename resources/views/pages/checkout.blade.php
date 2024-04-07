@extends('master')

@section('title', 'Checkout')

@section('content')

<!-- Start of Main -->
<main class="main checkout">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="passed"><a href="/cart">Cart</a></li>
                <li class="active"><a href="/cart/checkout">REQUEST A QUOTE</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->


    <!-- Start of PageContent -->
    <div class="page-content">

        <div class="container">
            <!-- @guest
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
                            <input type="text" class="form-control form-control-md" name="email"
                                required>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="text" class="form-control form-control-md" name="password"
                                required>
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
            @endguest -->
            <form class="form checkout-form" action="{{route('checkout.store')}}" method="post">
                @csrf
                <div class="row mb-9 flex-reverse-checkout">
                    <div class="col-lg-7 pr-lg-4 mb-4">
                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                            GENERAL INFORMATION
                        </h3>
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" class="form-control form-control-md" name="name"
                                required>
                        </div>
                        <div class="form-group mb-7">
                            <label>Contact Number *</label>
                            <input type="text" class="form-control form-control-md" name="phone" required>
                        </div>
                        <div class="form-group mb-7">
                            <label>E-mail Address *</label>
                            <input type="email" class="form-control form-control-md" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control form-control-md" name="company">
                        </div>
                        <div class="form-group">
                            <label>Emirate Inquiring From *</label>
                            <div class="select-box">
                                <select id="citySel" name="state" class="form-control form-control-md">
                                    <option value="Dubai" selected="selected">Dubai
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
                        <div id="OutsideUAEDet" class="form-group" style="display:none;">
                            <label>Country & City Inquiring From *</label>
                            <input class="form-control form-control-md" name="otherCity">
                        </div> 

                        <div class="form-group mt-3">
                            <label for="order-notes">Additional Requests</label>
                            <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
                                rows="4"
                                placeholder="Do you require additional product information? Product specifications, catalogs, demonstrations, & others…"></textarea>
                            </div>
                        </div>
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                        <div class="order-summary-wrapper sticky-sidebar">
                            <h3 class="title text-uppercase ls-10">Your Inquiry</h3>
                            <div class="order-summary">
                                <div class="w-full mt-4">
                                    @foreach(Cart::instance('product')->content() as $product)
                                    <div class="flex justify-center w-full flex-row">
                                        <div class="product-item flex-col flex md:flex-row w-full gap-1 items-center border border-solid border-1 rounded shadow px-15 py-25 mb-4">
                                            <div class="product-img flex flex-col items-center w-100px md:flex-row md:w-400px">
                                                <figure>
                                                    <img src="{{asset('storage/'.$product->model->image)}}" alt="" class="w-100px">
                                                </figure>
                                                
                                                <div class="product-name flex w-full justify-center pl-0 md:mb-0 pl-2 items-center">
                                                    <a href="/" class="cart-product-url-${product.rowId} md:w-400px truncate">
                                                        {{$product->model->name}} 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-qty flex-grow-2">
                                                <span class="product-price number-input-qty">
                                                    <input type="number" class="prod-qty-inp-${product.rowId}" name="qty" value="{{$product->qty}}" min="1" onKeyDown="return false" />
                                                </span>
                                            </div>
                                            <div class="product-code flex-grow-2">
                                                {{$product->model->code}}
                                            </div>
                                            <div class="product-delete grow flex justify-center">
                                                <form action="javascript:void(0)" method="POST" onSubmit="removeCartPage(event)" class="${product.rowId}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-delete">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div id="recaptcha-el" class="g-recaptcha mt-4 checkout-actions-pc" data-sitekey="{{config('services.recaptcha.key')}}" data-validate="{required:true}"></div>
                                <div class="form-group place-order pt-6 checkout-actions-pc">
                                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Ask For Quotation</button>
                                </div>
                                
                            </div> 
                        </div>
                    </div>
                </div>
                
                <div id="recaptcha-el" class="g-recaptcha mt-4 checkout-actions-mobile" data-sitekey="{{config('services.recaptcha.key')}}" data-validate="{required:true}"></div>
                <div class="form-group place-order pt-6 checkout-actions-mobile">
                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Ask For Quotation</button>
                </div>
                
            </form>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->

@endsection

@section('js')

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
@endsection
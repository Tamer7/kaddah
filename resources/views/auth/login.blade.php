@extends('master')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Start of Main -->
<main class="main login-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">My Account</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>My account</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->
    <div class="page-content">
        <div class="container">
            <div class="login-popup">
                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                        <li class="nav-item">
                            <a href="#sign-in" class="nav-link active">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sign-up" class="nav-link">Sign Up</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="sign-in">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email address *</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group mb-0">
                                    <label>Password *</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">{{ __('Remember Me') }}</label>

                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Lost your password?') }}</a>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary" id="login-button" style="width:100%">{{ __('Login') }}</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="sign-up">
                            <form method="POST" action="{{ route('user.register') }}">
                                @csrf
                            <div class="form-group">
                                <label>Your name *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Your email address *</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label>Password *</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror " name="password" id="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group mb-5">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            <div class="form-group mb-5">
                                <label>Telephone</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group mb-5">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company" id="company">
                            </div>
{{--                            <div class="checkbox-content login-vendor">--}}
{{--                                <div class="form-group mb-5">--}}
{{--                                    <label>First Name *</label>--}}
{{--                                    <input type="text" class="form-control" name="first-name" id="first-name" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mb-5">--}}
{{--                                    <label>Last Name *</label>--}}
{{--                                    <input type="text" class="form-control" name="last-name" id="last-name" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mb-5">--}}
{{--                                    <label>Shop Name *</label>--}}
{{--                                    <input type="text" class="form-control" name="shop-name" id="shop-name" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mb-5">--}}
{{--                                    <label>Shop URL *</label>--}}
{{--                                    <input type="text" class="form-control" name="shop-url" id="shop-url" required>--}}
{{--                                    <small>https://d-themes.com/wordpress/wolmart/demo-1/store/</small>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mb-5">--}}
{{--                                    <label>Phone Number *</label>--}}
{{--                                    <input type="text" class="form-control" name="phone-number" id="phone-number" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-checkbox user-checkbox mt-0">--}}
{{--                                <input type="checkbox" class="custom-checkbox checkbox-round active" id="check-customer" name="check-customer" required="">--}}
{{--                                <label for="check-customer" class="check-customer mb-1">I am a customer</label>--}}
{{--                                <br>--}}
{{--                                <input type="checkbox" class="custom-checkbox checkbox-round" id="check-seller" name="check-seller" required="">--}}
{{--                                <label for="check-seller" class="check-seller">I am a vendor</label>--}}
{{--                            </div>--}}
                            <p>Your personal data will be used to support your experience
                                throughout this website, to manage access to your account,
                                and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
{{--                            <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>--}}
                            <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                            </div>
                                <button type="submit" class="btn btn-primary" style="width:100%;">
                                    {{ __('Sign Up') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    @if(Cart::instance('product')->total() > 0)
                    <p class="text-center">Do you want to checkout without login?</p>
                    <div class="tab-content">
                        <div class="tab-pan">
                            <a href="{{route('checkout.guest')}}" class="btn btn-primary">Guest Checkout</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Main -->
@endsection

@section('js')

<script>
    $('#login-button').on('click', function(e) {
        // e.preventDefault();
        var button = $('#login-button');
        button.addClass('atlantic-spinner atlantic-spinner-white flex-row-reverse justify-content-evenly');
        console.log(button);
    });
</script>

@endsection

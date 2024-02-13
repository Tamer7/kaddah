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
                <form action="javascript:void(0)" onsubmit="signIn(event)" class="login-form">
                @csrf
                    <div class="form-group">
                        <label>Email address *</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="form-group mb-0">
                        <label>Password *</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-checkbox" name="remember">
                        <label for="remember">Remember me</label>
                        <a href="#">Last your password?</a>
                    </div>
                    <span class="errors errors-error"></span>
                    <button type="submit" class="btn btn-primary" style="width:100%">Sign In</button>
                </form>
            </div>
            <div class="tab-pane" id="sign-up" style="overflow: auto; max-height: 400px;">

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
    </div>
</div>

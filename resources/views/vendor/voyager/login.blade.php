<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
    <!-- <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}"> -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
        

        body {
        font-family: "Open Sans", sans-serif;
        height: 100vh;
        background: url("https://i.imgur.com/HgflTDf.jpg") 50% fixed;
        background-size: cover;
        }

        @keyframes spinner {
        0% {
            transform: rotateZ(0deg);
        }
        100% {
            transform: rotateZ(359deg);
        }
        }
        * {
        box-sizing: border-box;
        }

        .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
        background: rgba(4, 40, 68, 0.85);
        }
        .wrapper h1 {
            color: #fff;
            top: 50px;
            position:absolute;
            font-size:30px;
        }

        .login_page {
        border-radius: 2px 2px 5px 5px;
        padding: 10px 20px 20px 20px;
        width: 90%;
        max-width: 320px;
        background: #ffffff;
        position: relative;
        padding-bottom: 80px;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
        }
        .login_page.loading button {
        max-height: 100%;
        padding-top: 50px;
        }
        .login_page.loading button .spinner {
        opacity: 1;
        top: 40%;
        }
        .login_page.ok button {
        background-color: #649b53;
        }
        .login_page.ok button .spinner {
        border-radius: 0;
        border-top-color: transparent;
        border-right-color: transparent;
        height: 20px;
        animation: none;
        transform: rotateZ(-45deg);
        }
        .login_page.no button {
        background-color: #E22027;
        }
        .login_page.no button .spinner {
        display:none;
        }
        .login_page input {
        display: block;
        padding: 15px 10px;
        margin-bottom: 10px;
        width: 100%;
        border: 1px solid #ddd;
        transition: border-width 0.2s ease;
        border-radius: 2px;
        color: #ccc;
        }
        .login_page input + i.fa {
        color: #fff;
        font-size: 1em;
        position: absolute;
        margin-top: -47px;
        opacity: 0;
        left: 0;
        transition: all 0.1s ease-in;
        }
        .login_page input:focus {
        outline: none;
        color: #444;
        border-color: #1f5a77;
        border-left-width: 35px;
        }
        .login_page input:focus + i.fa {
        opacity: 1;
        left: 30px;
        transition: all 0.25s ease-out;
        }
        .login_page a {
        font-size: 0.8em;
        color: #1f5a77;
        text-decoration: none;
        }
        .login_page .title {
        color: #444;
        font-size: 1.2em;
        font-weight: bold;
        margin: 10px 0 30px 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
        }
        .login_page button {
        width: 100%;
        height: 100%;
        padding: 10px 10px;
        background: #1f5a77;
        color: #fff;
        display: block;
        border: none;
        margin-top: 20px;
        position: absolute;
        left: 0;
        bottom: 0;
        max-height: 60px;
        border: 0px solid rgba(0, 0, 0, 0.1);
        border-radius: 0 0 2px 2px;
        transform: rotateZ(0deg);
        transition: all 0.1s ease-out;
        border-bottom-width: 7px;
        }
        .login_page button .spinner {
        display: block;
        width: 40px;
        height: 40px;
        position: absolute;
        border: 4px solid #ffffff;
        border-top-color: rgba(255, 255, 255, 0.3);
        border-radius: 100%;
        left: 50%;
        top: 0;
        opacity: 0;
        margin-left: -20px;
        margin-top: -20px;
        animation: spinner 0.6s infinite linear;
        transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
        }
        .login_page:not(.loading) button:hover {
        box-shadow: 0px 1px 3px #1f5a77;
        }
        .login_page:not(.loading) button:focus {
        border-bottom-width: 4px;
        }
        .login_page span.error {
        font-size:12px;
        padding: 10px 10px;
        background: #E22027;
        color: #fff;
        display: block;
        margin-top: 20px;
        left: 0;
        bottom: 0;
        max-height: 60px;
        border: 0px solid rgba(0, 0, 0, 0.1);
        border-radius: 0 0 2px 2px;
        transform: rotateZ(0deg);
        transition: all 0.1s ease-out;
        border-bottom-width: 7px;
        text-align:center;
        }

        footer {
        display: block;
        padding-top: 50px;
        text-align: center;
        color: #ddd;
        font-weight: normal;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
        font-size: 0.8em;
        }
        footer img {
            min-width:100%;
            height:100px;
            padding-bottom:30px;
        }
        footer a, footer a:link {
        color: #fff;
        text-decoration: none;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body>
    
    <div class="wrapper">
        <h1>CleanShop Online Store</h1>
        <form class="login_page" action="javascript:void(0)" method="POST" enctype="multipart/form-data" id="login_page">
            {{ csrf_field() }}
            <p class="title">{{ __('voyager::login.signin_below') }}</p>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" autofocus>
            <i class="fa fa-user"></i>
            
            <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" required>
            <i class="fa fa-key"></i>
            <a href="#">Forgot your password?</a>
            <br>
            <span class="errors"></span>
            <button type="submit">
            <i class="spinner"></i>
            <span class="state">Log in</span>
            </button>
        </form>
        <footer>
            <img src="{{asset('/images/logo/logo-white.svg')}}" alt="">
            <a target="_blank" href="https://cleanshop.net/">&copy; 2022 CleanShop Online Store. All rights reserved.</a>
        </footer>
        
    </div>
<!-- .container-fluid -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        $('.login_page').on('submit', function(e) {
            e.preventDefault();
                var working = false;
                    if (working) return;
                    working = true;
                    var $this = $(this),
                    $state = $this.find('button > .state');
                    $this.addClass('loading');
                    $state.html('Authenticating');

            /* Submit form data using ajax*/
            $.ajax({
                url: "{{ route('voyager.login') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $('.login_page').serialize(),
                
                success: function(response) {
                    //------------------------

                    setTimeout(function() {
                        $this.addClass('ok');
                        $state.html('Welcome back!');
                        setTimeout(function() {
                            $state.html('Log in');
                            $this.removeClass('ok loading');
                            working = true;
                            }, 2000);
                            location.reload(true);
                        }, 1000);
                    

                    document.getElementById("login_page").reset();
                    
                    //--------------------------
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                    setTimeout(function() {
                        $this.addClass('no');
                        $state.html('Failed to Login');
                        setTimeout(function() {
                            $state.html('Log in');
                            $this.removeClass('no loading');
                            working = true;
                            }, 1000);
                        }, 500);
                    $('.login_page span.errors').addClass('error');
                    $('.login_page span.error').html('' + errors.errors.email);
                }
            });
        });
    });

</script>
</body>
</html>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - {{ trans('panel.site_title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Modernize js -->
    <script src="{{ asset('js/modernizr-3.6.0.min.js')}}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    {{-- <img src="img/logo2.png" alt="logo"> --}}
                    <h1>{{ trans('panel.site_title') }}</h1>
                </div>
                <form method="POST" action="{{ route('register') }}" class="login-form">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        required autofocus placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <i class="far fa-user"></i>
                    </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Register</button>
                    </div>
                </form>
                <div class="login-social">
                    <p>Hhave an account ? <a href="{{ route('login') }}">Signin now!</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('main.js')}}"></script>

</body>


</html>

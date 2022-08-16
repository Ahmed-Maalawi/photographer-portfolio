<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Original URL: https://demo.hasthemes.com/adomx-preview/dark/login.html
    Date Downloaded: 6/14/2022 6:02:22 PM !-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Adomx - Responsive Bootstrap 4 Admin Template </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin_style/images/favicon.ico') }}" />

    <!-- CSS
   ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin_style/css/vendor/bootstrap.min.css') }}" />

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('admin_style/css/vendor/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_style/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_style/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_style/css/vendor/cryptocurrency-icons.css') }}" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin_style/css/plugins/plugins.css') }}" />

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('admin_style/css/helper.css') }}" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin_style/css/style.css') }}" />

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('admin_style/css/style-primary.css') }}" />

</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">

                        <div class="content">
                            <h1>Sign in </h1>
                            <p>Login as admin. </p>
                        </div>

                        <div class="login-register-form">
                            @error('password')
                            <div class="alert alert-danger">
                                <small class="text-danger">{{ $message }}</small>
                            </div>
                            @enderror
                            @error('email')
                            <div class="alert alert-danger">
                                <small class="text-danger">{{ $message }}</small>
                            </div>
                            @enderror

                            <form action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-20"><input id="email" name="email" class="form-control" type="email" placeholder="User ID / Email" /></div>
                                    <div class="col-12 mb-20"><input id="password" name="password" class="form-control" type="password" placeholder="Password" /></div>
                                    <div class="col-12 mb-20"><label for="remember_me" class="adomx-checkbox-2"><input name="remember" id="remember_me" type="checkbox" /><i class="icon"></i>Remember. </label></div>
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mb-15"><a href="{{ route('password.request') }}">Forgot Password? </a></div>
                                            <div class="col-auto mb-15">Dont have account?🥺  <a href="#">So you are not a admin  😂 😂 😂 </a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-10"><button type="submit" class="button button-primary button-outline">sign in </button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    <div class="content">
                        <h1>Sign in </h1>
                        <p>Lorem Ipsum is simply _____ text of the printing ___ typesetting industry. </p>
                    </div>
                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

</div>
<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('admin_style/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('admin_style/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_style/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('admin_style/js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('admin_style/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_style/js/plugins/tippy4.min.js.js') }}"></script>
<!--Main JS-->
<script src="{{ asset('admin_style/js/main.js') }}"></script>


</body>

</html>

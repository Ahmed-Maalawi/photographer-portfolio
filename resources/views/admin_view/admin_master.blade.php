<!doctype html>
 <html class="no-js" lang="en">

 <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="utf-8" />
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <title>Adomx - Responsive Bootstrap 4 Admin Template </title>
     <meta name="robots" content="noindex, follow" />
     <meta name="description" content="" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{  asset('admin_style/images/favicon.ico') }}" />
     <script src="https://kit.fontawesome.com/8390e63b26.js" crossorigin="anonymous"></script>

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


         <!-- Header Section Start -->
         @include('admin_view.body.header')
         <!-- Header Section End -->


         <!-- Side Header Start -->
         @include('admin_view.body.sidebar')

         <!-- Side Header End -->

         <!-- Content Body Start -->
         <div class="content-body">
            @yield('admin')
         </div>
         <!-- Content Body End -->

         <!-- Footer Section Start -->

         @include('admin_view.body.footer')


         <!-- Footer Section End -->

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

     <!-- Plugins & Activation JS For Only This Page -->

     <!--Moment-->
     <script src="{{ asset('admin_style/js/plugins/moment/moment.min.js') }}"></script>

     <!--Daterange Picker-->
     <script src="{{ asset('admin_style/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

     <!--Echarts-->
     <script src="{{ asset('admin_style/js/plugins/chartjs/Chart.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/chartjs/chartjs.active.js') }}"></script>

     <!--VMap-->
     <script src="{{ asset('admin_style/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/vmap/vmap.active.js') }}"></script>

 </body>

 </html>

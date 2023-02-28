<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>PHOXEL </title>
    <link rel="shortcut icon" href=" {{ asset('user_style/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('user_style/fonts.googleapis.com/css2_a3524230.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_style/css/plugins.css')}}" />
    <link rel="stylesheet" href="{{ asset('user_style/css/style.css') }}" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="{{ asset('user_style/www.googletagmanager.com/gtag/js_93270489.js') }}"></script>


    <style>
        @media only screen and (min-width: 1100px) {
            .masonry {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        @media only screen and (min-width: 900px) {
            .masonry {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        @media only screen and (min-width: 700px) {
            .masonry {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        .masonry {
            margin: 1.5em 0;
            padding: 0;
            -moz-column-gap: 1.5em;
            -webkit-column-gap: 1.5em;
            column-gap: 1.5em;
            font-size: .85em;
        }

        .item {
            /*background-color: #eee;*/
            display: inline-block;
            margin: 0 0 1em;
            width: 100%;
        }

        .item img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>

<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader">  <span></span>  </div>
    </div>
</div>
<!-- Progress scroll totop -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

@include('user_view.body.header')
{{--   start content   --}}

@yield('user')

{{-- end content --}}
<!-- Footer -->
@include('user_view.body.footer')
<!-- jQuery -->
<script src="{{ asset('user_style/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('user_style/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('user_style/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('user_style/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('user_style/js/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ asset('user_style/js/popper.min.js') }}"></script>
<script src="{{ asset('user_style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user_style/js/scrollIt.min.js') }}"></script>
<script src="{{ asset('user_style/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('user_style/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user_style/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('user_style/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('user_style/js/YouTubePopUp.js') }}"></script>
<script src="{{ asset('user_style/js/custom.js') }}"></script>
</body>
</html>

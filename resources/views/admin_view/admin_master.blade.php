<!doctype html>
 <html class="no-js" lang="en">

 <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="utf-8" />
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <title>PHOXEL - Admin Dashboard </title>
     <meta name="robots" content="noindex, follow" />
     <meta name="description" content="" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Favicon -->
     <link rel="shortcut icon" href=" {{ asset('user_style/img/favicon.png') }}" />
{{--     <link rel="shortcut icon" type="image/x-icon" href="{{  asset('admin_style/images/favicon.ico') }}" />--}}
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

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
         .image-gallery {
             display: flex;
             flex-wrap: wrap;
             gap: 10px;
         }

         .image-gallery > li {
             height: 300px;
             cursor: pointer;
             position: relative;
         }

         .image-gallery li img {
             object-fit: cover;
             width: 100%;
             height: 100%;
             vertical-align: middle;
             border-radius: 5px;
         }

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
             background-color: #eee;
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

     <!-- Plugins & Activation JS For (Tables) Only This Page -->
     <script src="{{ asset('admin_style/js/plugins/moment/moment.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/footable/footable.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/footable/footable.active.js') }}"></script>


     <!-- Plugins & Activation JS For upload file -->
     <script src="{{ asset('admin_style/js/plugins/filepond/filepond.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/filepond/filepond-plugin-image-preview.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/filepond/filepond.active.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/dropify/dropify.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/dropify/dropify.active.js') }}"></script>


     <!-- Plugins & Activation JS For form editor -->
     <script src="{{ asset('admin_style/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/summernote/summernote.active.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/quill/quill.min.js') }}"></script>
     <script src="{{ asset('admin_style/js/plugins/quill/quill.active.js') }}"></script>


     <!-- Plugins & Activation JS For sweetalert -->
     <script src="assets/js/plugins/sweetalert/sweetalert.min.js"></script>
     <script src="assets/js/plugins/sweetalert/sweetalert.active.js"></script>

{{--     for toastr --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script type="text/javascript">
         @if(Session::has('message'))
             var type = "{{ Session::get('alert-type', 'info') }}"
         switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                // toastr.clear()
                // setTimeout(function () {
                    @php session()->flush(); @endphp
                // }, 3000);
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
         }
          @endif
     </script>

{{--     change edit collection image   --}}
     <script type="text/javascript">
         $(document).ready(function () {
             $('#Collection_img').change(function (e) {
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $('#newImg').attr('src', e.target.result)
                 }
                 reader.readAsDataURL(e.target.files[0]);
             });
         });


         $('.grid').isotope({
             // options
             itemSelector: '.grid-item',
             layoutMode: 'fitRows'
         });
     </script>

 </body>
 <script src="/path/to/isotope.pkgd.min.js"></script>
 </html>

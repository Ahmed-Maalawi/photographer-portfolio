@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="{{ route('user.home') }}">  <img src="{{ asset('user_style/img/logo.png') }}" alt="" />  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  <span class="icon-bar"><i class="ti-line-double"></i></span>  </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ ($route == 'user.home')? 'active' : ''}}" href="{{ route('user.home') }}">Home </a></li>
                <li class="nav-item"><a class="nav-link {{ ($route == 'about')? 'active' : ''}}" href="{{ route('about') }}">About </a></li>
                <li class="nav-item"><a class="nav-link {{ ($route == 'service')? 'active' : ''}}" href="{{ route('service') }}">Services </a></li>
                <li class="nav-item"><a class="nav-link {{ ($route == 'work')? 'active' : ''}}" href="{{ route('work') }}">Works </a></li>
                <li class="nav-item dropdown">  <span class="nav-link {{ ($prefix == '/gallery')? 'active' : ''}}"> Gallery  <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item" ><a href="{{ route('photos') }}">My Photos </a></li>
                        <li class="dropdown-item"><a href="gallery-02.html">My Videos </a></li>
{{--                        <li class="dropdown-item"><a href="video-gallery.html">Gallery 03 </a></li>--}}
                        <!--
                       <li class="dropdown-item"><span>Dropdown 2 <i class="ti-angle-right"></i></span>
                           <ul class="sub-menu">
                               <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                               <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                           </ul>
                       </li>
                       -->
                    </ul>
                </li>
{{--                <li class="nav-item"><a class="nav-link" href="blog.html">Blog </a></li>--}}
                <li class="nav-item"><a class="nav-link {{ ($route == 'contact')? 'active' : ''}}" href="{{ route('contact') }}">Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->

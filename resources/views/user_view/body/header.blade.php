@php
    use Illuminate\Support\Facades\Route;
    $prefix = Request::route()->getPrefix();
//    $route = Route::current()->getName();
@endphp


    <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="{{ route('user.home') }}"> <img src="{{ asset('user_style/img/logo.png') }}" alt=""/> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="icon-bar"><i class="ti-line-double"></i></span></button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ (Route::is('user.home'))? 'active' : ''}}"
                                        href="{{ route('user.home') }}">Home </a></li>
                <li class="nav-item"><a class="nav-link {{ (Route::is('user.about'))? 'active' : ''}}"
                                        href="{{ route('user.about') }}">About </a></li>
                <li class="nav-item"><a class="nav-link {{ (Route::is('user.service'))? 'active' : ''}}"
                                        href="{{ route('user.service') }}">Services </a></li>
                                <li class="nav-item"><a class="nav-link {{ (Route::is('user.work'))? 'active' : ''}}" href="{{ route('user.work') }}">Works </a></li>
                <li class="nav-item dropdown"><span
                        class="nav-link {{ (Route::is('user.gallery.photos') || Route::is('user.gallery.videos'))? 'active' : ''}}"> Gallery  <i
                            class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item {{ (Route::is('user.gallery.photos'))? 'active' : '' }}"><a
                                href="{{ route('user.gallery.photos') }}">My
                                Photos </a></li>
                        <li class="dropdown-item {{ (Route::is('user.gallery.videos'))? 'active' : '' }}"><a
                                href="{{ route('user.gallery.videos') }}">My Videos </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{ (Route::is('user.blog.index') || $prefix === '/blog')? 'active' : ''}}"
                                        href="{{ route('user.blog.index') }}">Blog </a></li>
                <li class="nav-item"><a class="nav-link {{ (Route::is('user.contact'))? 'active' : ''}}"
                                        href="{{ route('user.contact') }}">Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->

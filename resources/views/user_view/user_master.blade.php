<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Original URL: https://duruthemes.com/demo/html/phoxel/main/index.html
    Date Downloaded: 7/23/2022 8:14:19 PM !-->
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

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>

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
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="index.html">  <img src="img/logo.png" alt="" />  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  <span class="icon-bar"><i class="ti-line-double"></i></span>  </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('user.home') }}">Home </a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About </a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Services </a></li>
                <li class="nav-item"><a class="nav-link" href="works.html">Works </a></li>
                <li class="nav-item dropdown">  <span class="nav-link"> Gallery  <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="gallery-01.html">Gallery 01 </a></li>
                        <li class="dropdown-item"><a href="gallery-02.html">Gallery 02 </a></li>
                        <li class="dropdown-item"><a href="video-gallery.html">Gallery 03 </a></li>
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
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog </a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->
<header id="slider-area" class="header slider-fade">
    <div class="ruby-container">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="2" data-background="{{ asset('user_style/img/slider/1.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Welcome to my </h4>
                                <h1>Phoxel Studio </h1>
                                <p>I love to pause ___ wild, happy and real _______ of life, just to ____ their stories untold. </p>  <a href="#" class="button-primary">My works </a>  <a href="#" class="button-tersiyer">Contact me </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="2" data-background="{{ asset('user_style/img/slider/2.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Hello there ! </h4>
                                <h1>I'm Martin Dan </h1>
                                <p>I am professional photographer _____ on New York, creating ___________ with black, white and ______ in-between. </p>  <a href="#" class="button-primary">My works </a>  <a href="#" class="button-tersiyer">Contact me </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <h2 class="section-title">Hello, I'm Martin Dan, _ professional photographer based on ___ York </h2>
                <p>I love to pause ___ wild, happy and real _______ of life, just to ____ their stories untold. Viverra _________ usto duis vitae diam _____ nivamus estan ateuene artines _______ nec setlie no curabit _________. </p>
                <ul class="list-unstyled about-list mb-30">
                    <li>
                        <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                        <div class="about-list-text">
                            <p>Over 15 years of __________ </p>
                        </div>
                    </li>
                    <li>
                        <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                        <div class="about-list-text">
                            <p>200+ successfully executed projects </p>
                        </div>
                    </li>
                    <li>
                        <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                        <div class="about-list-text">
                            <p>Exceptional work quality </p>
                        </div>
                    </li>
                </ul>
                <hr class="border-2" />
                <div class="about-bottom">  <img src="{{ asset('user_style/img/signature-dark.svg') }}" alt="" class="image about-signature" />
                    <div class="about-name-wrapper">
                        <div class="about-name-dark">Martin Dan </div>
                        <div class="about-rol">Founder of Photography </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                <div class="about-img">
                    <div class="img">  <img src="{{ asset('user_style/img/about.jpg') }}" class="img-fluid" alt="" />  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section -->
<section class="services section-padding bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mb-30 text-center">
                <h2 class="section-title"><span>My Services </span></h2>
                <p class="section-title2">Quverra tristique justo duis _____ diam neque nivamus aestan _______ artinaelition finibus viverra nec _____ setlie suscipe tristique. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 border-1">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-1.svg') }}" alt="" />
                    <h5>Photography </h5>
                    <p>Photography bibendum eros amet _____ the vulputate in the _____ miss. </p>
                </div>
            </div>
            <div class="col-md-4 border-2">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-2.svg') }}" alt="" />
                    <h5>Videography </h5>
                    <p>Videography bibendum eros amen _____ the vulputate in the _____ miss. </p>
                </div>
            </div>
            <div class="col-md-4 border-3">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-3.svg') }}" alt="" />
                    <h5>Photo Retouching </h5>
                    <p>Photo Retouching bibenum eros ____ vacun the vulputate the _____ miss. </p>
                </div>
            </div>
            <div class="col-md-4 border-4">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-4.svg') }}" alt="" />
                    <h5>Aerial Photography </h5>
                    <p>Aerial Photography bibendum eros ____ vacun the vulputate in ___ miss. </p>
                </div>
            </div>
            <div class="col-md-4 border-5">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-5.svg') }}" alt="" />
                    <h5>Lightning Setup </h5>
                    <p>Lightning Setup bibendum eros ____ vacus duru in the _____ miss. </p>
                </div>
            </div>
            <div class="col-md-4 border-6">
                <div class="item">  <img src="{{ asset('user_style/img/icons/icon-6.svg') }}" alt="" />
                    <h5>Video Color Grading </h5>
                    <p>Video Color Grading bibendum ____ vacus the vulputate in ___ vitae. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News section -->
<section class="blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-30">
                <h2 class="section-title">Latest News </h2>
                <hr class="border-2" />
                <p class="section-title2">Quisque sed tellus nullam _____ the volutpat dignissim pretium. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 owl-carousel owl-theme">
                <div class="news">
                    <figure><img src="{{ asset('user_style/img/blog/4.jpeg') }}" alt="" class="img-fluid" /></figure>
                    <div class="caption">
                        <h6>Resources </h6>
                        <h4><a href="post.html">Cosina announces its fastest ____-_____ lens, the Nokton 50mm </a></h4>
                        <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>
                        <hr class="border-2" />
                        <div class="info-wrapper">
                            <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>
                            <div class="date">20 December 2022 </div>
                        </div>
                    </div>
                </div>
                <div class="news left">
                    <figure><img src="{{ asset('user_style/img/blog/3.jpeg') }}" alt="" class="img-fluid" /></figure>
                    <div class="caption">
                        <h6>Lens News </h6>
                        <h4>Which Camera Will Survive? ____ a1, Nikon Z9 and _____ R3 </h4>
                        <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>
                        <hr class="border-2" />
                        <div class="info-wrapper">
                            <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>
                            <div class="date">18 December 2022 </div>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <figure><img src="{{ asset('user_style/img/blog/2.jpeg') }}" alt="" class="img-fluid" /></figure>
                    <div class="caption">
                        <h6>Mobile </h6>
                        <h4><a href="post.html">The camera components inside ___ iPhone 11 Pro Max </a></h4>
                        <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>
                        <hr class="border-2" />
                        <div class="info-wrapper">
                            <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>
                            <div class="date">16 December 2022 </div>
                        </div>
                    </div>
                </div>
                <div class="news left">
                    <figure><img src="{{ asset('user_style/img/blog/1.jpeg') }}" alt="" class="img-fluid" /></figure>
                    <div class="caption">
                        <h6>Resources </h6>
                        <h4><a href="post.html">Fujifilm's new Instax Mini ___ Hybrid is an instant ______ </a></h4>
                        <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>
                        <hr class="border-2" />
                        <div class="info-wrapper">
                            <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>
                            <div class="date">14 December 2022 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Works Gallery -->
<section class="section-padding bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-left">
                <h2 class="section-title"><span>My Works </span></h2>
                <hr class="border-2" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-left">
                <ul class="gallery-filter">
                    <li class="active" data-filter="*">All </li>
                    <li data-filter=".personal">Personal </li>
                    <li data-filter=".wedding">Wedding </li>
                    <li data-filter=".event">Event </li>
                    <li data-filter=".fashion">Fashion </li>
                    <li data-filter=".product">Product </li>
                </ul>
            </div>
        </div>
        <div class="row gallery-items">
            <div class="masonry-items">
                <div class="col-md-4 gallery-masonry-wrapper single-item wedding">
                    <a href="{{ asset('user_style/img/works/w2.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/w2.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Wedding </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item personal">
                    <a href="{{ asset('user_style/img/works/p1.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/p1.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Personal </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item event">
                    <a href="{{ asset('user_style/img/works/e1.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/e1.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Event </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item personal">
                    <a href="{{ asset('user_style/img/works/p2.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/p2.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Personal </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item event">
                    <a href="{{ asset('user_style/img/works/e2.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/e2.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Event </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item wedding">
                    <a href="{{ asset('user_style/img/works/w1.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/w1.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Wedding </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item fashion">
                    <a href="{{ asset('user_style/img/works/f1.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/f1.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Fashion </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item product">
                    <a href="{{ asset('user_style/img/works/p3.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/p3.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Product </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-masonry-wrapper single-item fashion">
                    <a href="{{ asset('user_style/img/works/f2.jpg') }}" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img">  <img src="{{ asset('user_style/img/works/f2.jpg') }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <div class="gallery-masonry-item-category">Fashion </div>
                                <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testiominals -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('user_style/img/banner/2.jpg') }}" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <!-- Work together -->
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h5>Need help with professional ___________? Let's work together! </h5>  <a href="contact.html" class="button-tersiyer">Contact me </a>
                </div>
                <!-- Testiominals -->
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="testimonials-box">
                        <div class="owl-carousel owl-theme">
                            <div class="item">  <span class="quote"><img src="{{ asset('user_style/img/quot.png') }}" alt="" /></span>
                                <p class="v-border">Photographers viverra tristique duis _____ dias the nesue niva ______ ateuene artines duruna setlie _______ fermen. Quisque sed tellus ___ lorem nullam dururana tortor _____ porta. </p>
                                <div class="info">
                                    <div class="author-img">  <img src="{{ asset('user_style/img/team/1.jpg') }}" alt="" />  </div>
                                    <div class="cont">
                                        <h6>Jason Brown </h6>  <span>Project Owner </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">  <span class="quote">
                                         <img src="{{ asset('user_style/img/quot.png') }}" alt="" />
                                     </span>
                                <p class="v-border">Photographers viverra tristique duis _____ dias the nesue niva ______ ateuene artines duruna setlie _______ fermen. Quisque sed tellus ___ lorem nullam dururana tortor _____ porta. </p>
                                <div class="info">
                                    <div class="author-img">  <img src="{{ asset('user_style/img/team/2.jpg') }}" alt="" />  </div>
                                    <div class="cont">
                                        <h6>Emily White </h6>  <span>Project Owner </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7 owl-carousel owl-theme">
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/1.png') }}" alt="" /></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/2.png') }}" alt="" /></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/3.png') }}" alt="" /></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/4.png') }}" alt="" /></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/5.png') }}" alt="" /></a>
                </div>
                <div class="clients-logo">
                    <a href="#0"><img src="{{ asset('user_style/img/clients/6.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer clearfix" data-overlay-darkgray="8">
    <div class="container">
        <!-- First footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-6 widget-area">
                    <h3>Sign up to get ______ update </h3>
                    <p>Sign up for our _______ newsletter for the latest ____ &amp; articles </p>
                </div>
                <div class="col-md-6 widget-area">
                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                            <p>
                                <input type="email" name="email" placeholder="Enter Your Email" required="" />
                            </p>
                            <p>
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Subscribe Now </button>
                            </p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo">  <img class="img-fluid" src="{{ asset('user_style/img/logo.png') }}" alt="" />  </div>
                        <div class="widget-text">
                            <p>Photography inila miss uman _____ eliten finus vivera alacus ____ the drudean seneice miss ________ tonec a fermen. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links </h3>
                        <ul>
                            <li><a href="about.html">About </a></li>
                            <li><a href="services.html">Services </a></li>
                            <li><a href="works.html">Works </a></li>
                            <li><a href="blog.html">Blog </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Contact </h3>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">  <i class="ti-mobile"></i>  </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>+1 123-456-0606 </p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">  <i class="ti-email"></i>  </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>info@phoxel.com </p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">  <i class="ti-location-pin"></i>  </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>120 King St, Charleston __ 29401, USA </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-8">
                    <p class="mb-0">Copyright © 2022 by  <a href="#">DuruThemes </a>. All rights reserved. </p>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <ul class="list-inline">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
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

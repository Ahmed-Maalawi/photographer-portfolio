@extends('user_view.user_master')
@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="4" data-background="{{ asset('user_style/img/banner/4.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left caption">
                    <h1>My Services </h1>
                    <hr class="border-1" />
                    <p>Praesent sed nisl ullamcorper, viverra magna the finibus viventa ipsum eros amet vacun in the vitae miss. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 border-1">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-1.svg') }}" alt="" />
                        <h5>Photography </h5>
                        <p>Photography bibendum eros amet vacun the vulputate in the vitae miss. </p>
                    </div>
                </div>
                <div class="col-md-4 border-2">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-2.svg') }}" alt="" />
                        <h5>Videography </h5>
                        <p>Videography bibendum eros amen vacun the vulputate in the vitae miss. </p>
                    </div>
                </div>
                <div class="col-md-4 border-3">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-3.svg') }}" alt="" />
                        <h5>Photo Retouching </h5>
                        <p>Photo Retouching bibenum eros amen vacun the vulputate the vitae miss. </p>
                    </div>
                </div>
                <div class="col-md-4 border-4">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-4.svg') }}" alt="" />
                        <h5>Aerial Photography </h5>
                        <p>Aerial Photography bibendum eros amen vacun the vulputate in the miss. </p>
                    </div>
                </div>
                <div class="col-md-4 border-5">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-5.svg') }}" alt="" />
                        <h5>Lightning Setup </h5>
                        <p>Lightning Setup bibendum eros amen vacus duru in the vitae miss. </p>
                    </div>
                </div>
                <div class="col-md-4 border-6">
                    <div class="item">  <img src="{{ asset('user_style/img/icons/icon-6.svg') }}" alt="" />
                        <h5>Video Color Grading </h5>
                        <p>Video Color Grading bibendum amen vacus the vulputate in the vitae. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="annie-pricing section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-20">
                    <h2 class="section-title">Pricing Plan </h2>
                    <hr class="border-2" />
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner img-grayscale" style="background-image: url({{ asset('user_style/img/pricing/1.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Standart </h3>
                                </li>
                                <li class="pricing-prices">  <sup class="pricing-dolar">EGP </sup>  <span class="pricing-price">300 </span>  </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>3 Hours Session </li>
                                        <li>Photo Editing </li>
                                        <li>50 Digital Images </li>
                                        <li>Online Gallery </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url({{ asset('user_style/img/pricing/2.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Premium </h3>
                                </li>
                                <li class="pricing-prices">  <sup class="pricing-dolar">EGP </sup>  <span class="pricing-price">450 </span>  </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>6 Hours Session </li>
                                        <li>Photo Editing </li>
                                        <li>100 Digital Images </li>
                                        <li>Online Gallery </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box" data-animate-effect="fadeInUp">
                        <div class="price-box-inner" style="background-image: url({{ asset('user_style/img/pricing/3.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title">Platinum </h3>
                                </li>
                                <li class="pricing-prices">  <sup class="pricing-dolar">EGP </sup>  <span class="pricing-price">750 </span>  </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>12 Hours Session </li>
                                        <li>Photo Editing </li>
                                        <li>250 Digital Images </li>
                                        <li>Online Gallery </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
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
                        <h5>Need help with professional photography? Let's work together! </h5>  <a href="{{ route('contact') }}" class="button-tersiyer">Contact me </a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item">  <span class="quote"><img src="{{ asset('user_style/img/quot.png') }}" alt="" /></span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta. </p>
                                    <div class="info">
                                        <div class="author-img">  <img src="{{ asset('user_style/img/team/1.jpg') }}" alt="" />  </div>
                                        <div class="cont">
                                            <h6>Jason Brown </h6>  <span>Project Owner </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  <span class="quote">
                                         <img src="img/quot.png" alt="" />
                                     </span>
                                    <p class="v-border">Photographers viverra tristique duis vitae dias the nesue niva aestan ateuene artines duruna setlie suscipe fermen. Quisque sed tellus man lorem nullam dururana tortor felis porta. </p>
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
@endsection

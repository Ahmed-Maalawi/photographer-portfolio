@extends('user_view.user_master')
@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>About me </h1>
                    <hr class="border-1" />
                    <p>I am professional photographer _____ on New York, creating ___________ with black, white and ______ in-between. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p>Quisque sed tellus lorem. ______ bibena tortor seman marine _____ felis the porta dignissim _______. </p>
                    <p class="mb-30">Vivamus tortor risus, pharetra __ venenatis ac, rutrum eget ____. Fusce convallis nibh felis, ____ hendrerit diam rhoncus eget. _____ dictum lacus eleifend nisl _________ venenatis. </p>
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
                    <hr class="border-1" />
                    <div class="about-bottom">  <img src="{{asset('user_style/img/signature.svg')}}" alt="" class="image about-signature" />
                        <div class="about-name-wrapper">
                            <div class="about-name">Martin Dan </div>
                            <div class="about-rol">Founder of Photography </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img">  <img src="{{ asset('user_style/img/about.jpg') }}" class="img-fluid" alt="" />  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Info -->
    <section class="about-info section-padding">
        <div class="container">
            <div class="about-info">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-info-img mb-60">
                            <div class="img">  <img src="{{ asset('user_style/img/about2.jpg') }}" class="img-fluid" alt="" />  </div>
                        </div>
                        <h2 class="section-title">My only mission: Capture ___________ moments </h2>
                        <p>Nulla quis efficitur lacus, ________ posuere augue. Duis eu __________ arcuman. Mauris luctus nulla _ scelerisque ultricies. Integer leo ____, auctor ac aliquamen the ________ quis risus. Maecenas vitae ______ massa. </p>
                    </div>
                    <div class="col-md-6 offset-md-1 pt-60">
                        <h2 class="section-title">Why I started as _ photographer </h2>
                        <p>Nulla quis efficitur lacus, ________ posuere augue. Duis eu __________ arcuman. Mauris luctus nulla _ scelerisque ultricies. Integer leo ____, auctor ac aliquamen the ________ quis risus. Maecenas vitae ______ massa. Phasellus faucibus leo __ finibus pharetra. Suspendisse est ____, convallis vitae arcuma euismo. </p>
                        <p>Integer leo nisl, auctor __ aliquam a, placerat quis _____. Maecenas vitae tellus massa. _________ faucibus leo in finibus ________. Suspendisse est diam, convallis _____ arcu at, euismod pulvinar _____. </p>
                        <div class="about-info-img pt-60">
                            <div class="img">  <img src="{{ asset('user_style/img/about3.jpg') }}" class="img-fluid" alt="" />  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-20">
                    <h2 class="section-title"><span>Professional Team </span></h2>
                    <hr class="border-1" />
                    <p class="section-title2">Quisque sed tellus nullam _____ the volutpat dignissim pretium. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('user_style/img/team/3.jpg') }}" alt="" class="w-100" /></div>
                        <div class="team-content">
                            <h3 class="team-title">Enrico Brown </h3>
                            <p class="team-text">I'm a professional product ____________ in New York, NY. _______ sed tellus nullam biben ___ volutan vetium. </p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Enrico Brown </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('user_style/img/team/2.jpg') }}" alt="" class="w-100" /></div>
                        <div class="team-content">
                            <h3 class="team-title">Olivia White </h3>
                            <p class="team-text">I'm a professional fashion ____________ in Bern, Switzerland. Quisque ___ tellus nullam biben the _______ vetium. </p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Olivia White </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('user_style/img/team/1.jpg') }}" alt="" class="w-100" /></div>
                        <div class="team-content">
                            <h3 class="team-title">Micheal Martin </h3>
                            <p class="team-text">I'm a professional bride ____________ in London, UK. Quisque ___ tellus nullam biben the _______ vetium. </p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Micheal Martin </h3>
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
@endsection

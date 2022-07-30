@extends('user_view.user_master')
@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>About me </h1>
                    <hr class="border-1" />
                    <p>I am professional photographer based on New York, creating dreamscapes with black, white and shades in-between. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p>Quisque sed tellus lorem. Nullam bibena tortor seman marine porta felis the porta dignissim pretium. </p>
                    <p class="mb-30">Vivamus tortor risus, pharetra ut venenatis ac, rutrum eget ante. Fusce convallis nibh felis, eget hendrerit diam rhoncus eget. Donec dictum lacus eleifend nisl efficitur venenatis. </p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                            <div class="about-list-text">
                                <p>Over 15 years of experience </p>
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
                        <h2 class="section-title">My only mission: Capture captivating moments </h2>
                        <p>Nulla quis efficitur lacus, pulvinar posuere augue. Duis eu vestibulum arcuman. Mauris luctus nulla a scelerisque ultricies. Integer leo nisl, auctor ac aliquamen the placerat quis risus. Maecenas vitae tellus massa. </p>
                    </div>
                    <div class="col-md-6 offset-md-1 pt-60">
                        <h2 class="section-title">Why I started as a photographer </h2>
                        <p>Nulla quis efficitur lacus, pulvinar posuere augue. Duis eu vestibulum arcuman. Mauris luctus nulla a scelerisque ultricies. Integer leo nisl, auctor ac aliquamen the placerat quis risus. Maecenas vitae tellus massa. Phasellus faucibus leo in finibus pharetra. Suspendisse est diam, convallis vitae arcuma euismo. </p>
                        <p>Integer leo nisl, auctor ac aliquam a, placerat quis risus. Maecenas vitae tellus massa. Phasellus faucibus leo in finibus pharetra. Suspendisse est diam, convallis vitae arcu at, euismod pulvinar purus. </p>
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
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium. </p>
                </div>
            </div>
            <div class="row">
                @foreach($teamMember as $member)
                    <div class="col-md-4">
                        <div class="team-card mb-30">
                            <div class="team-img"><img style="max-height: 411.4px" src="{{ asset($member->img_path) }}" alt="{{ $member->name }}" class="w-100" /></div>
                            <div class="team-content">
                                <h3 class="team-title">{{ $member->name }}</h3>
                                <p class="team-text">{{ $member->pio }} </p>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">{{ $member->jop_title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('user_style/img/team/3.jpg') }}" alt="" class="w-100" /></div>
                        <div class="team-content">
                            <h3 class="team-title">Enrico Brown </h3>
                            <p class="team-text">I'm a professional product photographer in New York, NY. Quisque sed tellus nullam biben the volutan vetium. </p>
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
                            <p class="team-text">I'm a professional fashion photographer in Bern, Switzerland. Quisque sed tellus nullam biben the volutan vetium. </p>
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
                            <p class="team-text">I'm a professional fashion photographer in Bern, Switzerland. Quisque sed tellus nullam biben the volutan vetium. </p>
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
                        <h5>Need help with professional photography? Let's work together! </h5>  <a href="contact.html" class="button-tersiyer">Contact me </a>
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
                                         <img src="{{ asset('user_style/img/quot.png') }}" alt="" />
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

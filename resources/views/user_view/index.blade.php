@extends('user_view.user_master')
@section('user')
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
                                    <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold. </p>  <a href="#" class="button-primary">My works </a>  <a href="{{ route('contact') }}" class="button-tersiyer">Contact me </a>
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
                                    <p>I am professional photographer based on New York, creating dreamscapes with black, white and shades in-between. </p>  <a href="#" class="button-primary">My works </a>  <a href="{{ route('contact') }}" class="button-tersiyer">Contact me </a>
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
                    <h2 class="section-title">Hello, I'm Martin Dan, a professional photographer based on New York </h2>
                    <p>I love to pause the wild, happy and real moments of life, just to hear their stories untold. Viverra tristique usto duis vitae diam neque nivamus estan ateuene artines viverra nec setlie no curabit tristique.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                            <div class="about-list-text">
                                <p>Over 15 years of experience</p>
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
                    <p class="section-title2">Quverra tristique justo duis vitae diam neque nivamus aestan ateuene artinaelition finibus viverra nec lacus setlie suscipe tristique. </p>
                </div>
            </div>
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
    <!-- News section -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30">
                    <h2 class="section-title">Latest News </h2>
                    <hr class="border-2" />
                    <p class="section-title2">Quisque sed tellus nullam biben the volutpat dignissim pretium. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="news">
                        <figure><img src="{{ asset('user_style/img/blog/4.jpeg') }}" alt="" class="img-fluid" /></figure>
                        <div class="caption">
                            <h6>Resources </h6>
                            <h4><a href="post.html">Cosina announces its fastest full-frame lens, the Nokton 50mm </a></h4>
                            <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene artines duru setlie suscipe the fermen. </p>
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
                            <h4>Which Camera Will Survive? Sony a1, Nikon Z9 and Canon R3 </h4>
                            <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene artines duru setlie suscipe the fermen. </p>
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
                            <h4><a href="post.html">The camera components inside the iPhone 13 Pro Max </a></h4>
                            <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene artines duru setlie suscipe the fermen. </p>
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
                            <h4><a href="post.html">Fujifilm's new Instax Mini Evo Hybrid is an instant camera </a></h4>
                            <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene artines duru setlie suscipe the fermen. </p>
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

                        @foreach($collections as $collection) <li data-filter=".{{ $collection->name }}">{{ $collection->name }} </li>
                        @endforeach


{{--                        <li data-filter=".personal">Personal </li>--}}
{{--                        <li data-filter=".wedding">Wedding </li>--}}
{{--                        <li data-filter=".event">Event </li>--}}
{{--                        <li data-filter=".fashion">Fashion </li>--}}
{{--                        <li data-filter=".product">Product </li>--}}
                    </ul>
                </div>
            </div>
            <div class="row gallery-items">
                <div class="masonry-items">

                    @foreach($photos as $img)
                        <div class="col-md-4 gallery-masonry-wrapper single-item {{ $img['collection']['name'] }}">
                            <a href="{{ asset($img->img_path) }}" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img">  <img src="{{ asset($img->img_path) }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                                    <div class="gallery-masonry-item-img"></div>
                                    <div class="gallery-masonry-item-content">
                                        <div class="gallery-masonry-item-category">{{ $img['collection']['name'] }} </div>
                                        <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

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
                        <h5>Need help with professional photography? Let's work together! </h5>  <a href="{{ route('contact') }}" class="button-tersiyer">Contact me </a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                @foreach($feedback as $item)
                                    <div class="item">  <span class="quote"><img src="{{ asset('user_style/img/quot.png') }}" alt="" /></span>

                                        <p class="v-border">{{ $item->feedback }} </p>
                                        <div class="info">
                                            <div class="author-img">  <img class="img-fluid" src="{{ asset($item->profile_img) }}" alt="" />  </div>
                                            <div class="cont">
                                                <h6>{{ $item->name }} </h6>  <span>{{ $item->job }} </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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

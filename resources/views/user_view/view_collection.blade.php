@extends('user_view.user_master')

@section('user')

    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset($collection->img_path) }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>{{ $collection->name }} </h1>
                    <hr class="border-1" />
                    <p>{{ $collection->description }} </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Works Gallery -->
    <section class="projects2 section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 work-masonry-wrapper-padding">
                    <div class="portfolio-item-wrapp">


                        @foreach($photos as $photo)
                            <div class="portfolio-item">
                                <div class="work-masonry-wrapper">
                                    <div class="work-masonry-item-img-link">  <img src="{{ asset($photo->img_path) }}" alt="" />
                                        <div class="work-masonry-item-img"></div>
{{--                                        <div class="work-masonry-item-content">--}}
{{--                                            <div class="work-masonry-item-category">{{ $photo->name }} </div>--}}
{{--                                            <h4 class="work-masonry-item-title">{{ $photo->description }}</h4>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <div href="" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/w2.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Wedding </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/e2.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Event </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/f1.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Fashion </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 work-masonry-wrapper-padding">
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/p1.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Personal </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/p2.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Fashion </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/p3.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Product </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 work-masonry-wrapper-padding">
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/e1.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Event </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/w1.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Wedding </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapp">
                        <div class="portfolio-item">
                            <div class="work-masonry-wrapper">
                                <a href="project-page.html" class="work-masonry-item-img-link">  <img src="{{ asset('user_style/img/works/f2.jpg') }}" alt="" />
                                    <div class="work-masonry-item-img"></div>
                                    <div class="work-masonry-item-content">
                                        <div class="work-masonry-item-category">Fashion </div>
                                        <h4 class="work-masonry-item-title">Quisue sen duru martin </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

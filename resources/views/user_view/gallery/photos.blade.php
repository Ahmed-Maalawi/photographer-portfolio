@extends('user_view.user_master')

@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Gallery</h1>
                    <hr class="border-1" />
                    <p>Fusceler mollis augue sit amet hendrerit vestibulum uisteyer the miss martine venenatis nito lacus. </p>
                </div>
            </div>
        </div>
    </section>
    <!--  Gallery 01 -->
    <section class="section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="gallery-filter">
                        <li class="active" data-filter="*">All </li>
                        @foreach($collections as $item)
                            <li class="" data-filter=".{{ $item->id }}">{{ $item->name }} </li>
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
                    @foreach($images as $img)
                        <div class="col-md-4 gallery-masonry-wrapper single-item {{ $img['collection']['id'] }}">
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
                        <a href="{{ asset('user_style/img/works/p2.jpg') }}" title="Personal" class="gallery-masonry-item-img-link img-zoom">
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
                        <a href="img/works/f1.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
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
@endsection

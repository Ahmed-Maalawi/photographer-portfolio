@extends('user_view.user_master')

@section('user')

<!-- Header Banner -->
<section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay"
    data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/7.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Video Gallery</h1>
                <hr class="border-1">
                <p>Fusceler mollis augue sit amet hendrerit vestibulum uisteyer the miss duru viventa enenatis lacus.
                </p>
            </div>
        </div>
    </div>
</section>
<!--  Video Gallery -->
<section class="section-padding bg-black">
    <div class="container">
        <div class="row">
            <!-- 2 columns -->
            <div class="col-md-6">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="{{ asset('user_style/img/slider/1.jpg') }}" alt="YouTube">
                        <a class="video-gallery-button vid" href="https://vimeo.com/74295728"> <span
                                class="video-gallery-polygon">
                                <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="{{ asset('user_style/img/slider/2.jpg') }}" alt="Vimeo">
                        <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=ybso7mzV2hY"> <span
                                class="video-gallery-polygon">
                                <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>
            <!-- 3 columns -->
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="{{ asset('user_style/img/slider/1.jpg') }}" alt="YouTube">
                        <a class="video-gallery-button vid" href="https://vimeo.com/74295728"> <span
                                class="video-gallery-polygon">
                                <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="{{ asset('user_style/img/slider/2.jpg') }}" alt="YouTube">
                        <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=ybso7mzV2hY"> <span
                                class="video-gallery-polygon">
                                <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vid-area mb-30">
                    <div class="vid-icon"> <img src="{{ asset('user_style/img/slider/3.jpg') }}" alt="YouTube">
                        <a class="video-gallery-button vid" href="https://vimeo.com/74295728"> <span
                                class="video-gallery-polygon">
                                <i class="ti-control-play"></i>
                            </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

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
           @forelse($videos as $video)
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ asset($video['video_img']) }}" alt="YouTube">
                            <a class="video-gallery-button vid"
                               href="{{ asset($video['video_path']) }}">
                                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
           @empty
               <h2 class="h1 text-capitalize text-center my-4 mx-auto">no videos added yet</h2>
           @endforelse
        </div>
    </div>
</section>
@endsection

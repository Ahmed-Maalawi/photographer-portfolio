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
            <div class="row gallery-items">
                <div class="masonry-items">

                    @foreach($photos as $img)
                        <div class="col-md-4 gallery-masonry-wrapper single-item {{ $img['collection']['name'] }}">
                            <a href="{{ asset($img->img_path) }}" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img">  <img src="{{ asset($img->img_path) }}" class="img-fluid mx-auto d-block" alt="" />  </div>
                                    <div class="gallery-masonry-item-img"></div>
{{--                                    <div class="gallery-masonry-item-content">--}}
{{--                                        <div class="gallery-masonry-item-category">{{ $img['collection']['name'] }} </div>--}}
{{--                                        <h4 class="gallery-masonry-item-title">Quisue sen duru martin </h4>--}}
{{--                                    </div>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

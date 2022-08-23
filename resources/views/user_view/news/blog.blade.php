@extends('user_view.user_master')
@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/7.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Latest News </h1>
                    <hr class="border-1" />
                    <p>Quisque sed tellus lorem. ______ bibendum seman tortor works _____ felis porta the quis ________ miss viventa. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @foreach($posts as $index => $post)
{{--                        {{ dd($posts) }}--}}
                        <div class="news animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="{{ asset($post->post_img) }}" alt="" class="img-fluid" /></figure>
                            <div class="caption">
                                <h6>{{ $post->tag }} </h6>
                                <h4><a href="{{ route('blog.view.post', $post->id) }}">{{ $post->title }} </a></h4>
                                <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>
                                <hr class="border-2" />
                                <div class="info-wrapper">
                                    <div class="more"><a href="{{ route('blog.view.post', $post->id) }}" class="link-btn" tabindex="0">Read Post </a></div>
                                    <div class="date">{{ $post->created_at->format('D, d M Y h:i A')}} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

{{--                    {!! $posts->render() !!}--}}
{{----------------------------------------------------------------------------------------------}}
{{--                    <div class="news left animate-box" data-animate-effect="fadeInUp">--}}
{{--                        <figure><img src="{{ asset('user_style/img/blog/3.jpeg') }}" alt="" class="img-fluid" /></figure>--}}
{{--                        <div class="caption">--}}
{{--                            <h6>Lens News </h6>--}}
{{--                            <h4>Which Camera Will Survive? ____ a1, Nikon Z9 and _____ R3 </h4>--}}
{{--                            <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>--}}
{{--                            <hr class="border-2" />--}}
{{--                            <div class="info-wrapper">--}}
{{--                                <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>--}}
{{--                                <div class="date">18 December 2022 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="news animate-box" data-animate-effect="fadeInUp">--}}
{{--                        <figure><img src="{{ asset('user_style/img/blog/2.jpeg') }}" alt="" class="img-fluid" /></figure>--}}
{{--                        <div class="caption">--}}
{{--                            <h6>Mobile </h6>--}}
{{--                            <h4><a href="post.html">The camera components inside ___ iPhone 11 Pro Max </a></h4>--}}
{{--                            <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>--}}
{{--                            <hr class="border-2" />--}}
{{--                            <div class="info-wrapper">--}}
{{--                                <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>--}}
{{--                                <div class="date">16 December 2022 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="news left animate-box" data-animate-effect="fadeInUp">--}}
{{--                        <figure><img src="{{ asset('user_style/img/blog/1.jpeg') }}" alt="" class="img-fluid" /></figure>--}}
{{--                        <div class="caption">--}}
{{--                            <h6>Resources </h6>--}}
{{--                            <h4><a href="post.html">Fujifilm's new Instax Mini ___ Hybrid is an instant ______ </a></h4>--}}
{{--                            <p>Photographers viverra tristique duis _____ diam the neque nivamus ______ ateuene artines duru setlie _______ the fermen. </p>--}}
{{--                            <hr class="border-2" />--}}
{{--                            <div class="info-wrapper">--}}
{{--                                <div class="more"><a href="post.html" class="link-btn" tabindex="0">Read more </a></div>--}}
{{--                                <div class="date">14 December 2022 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                {{ $posts->links() }}

                    <!-- Pagination -->
{{--                    <ul class="news-pagination-wrap align-center mt-90">--}}
{{--                        <li><a href="#"><i class="ti-angle-left"></i></a></li>--}}
{{--                        <li><a href="#" class="active">1 </a></li>--}}
{{--                        <li><a href="#">2 </a></li>--}}
{{--                        <li><a href="#">3 </a></li>--}}
{{--                        <li><a href="#"><i class="ti-angle-right"></i></a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        $(document).ready(function (){
            window.onload(function () {
                $('li .page-item').remove('page-item');
            });
        })
    </script>
@endsection

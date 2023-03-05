@extends('user_view.user_master')
@section('user')

    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/7.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="news-post-categorydate-wrapper">
                        <a href="{{ route('user.blog.index') }}" class="text-capitalize"><div>{{ $post['tag'] }} </div></a>
                        <div class="news-post-categorydate-divider"></div>
                        <div>{{ $post['created_at']->format('d M Y') }}</div>
                    </div>
                    <h1 class="text-capitalize">{{ $post['title'] }} </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Post -->
    <section class=" section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset($post['post_img']) }}" class="mb-30" alt="" />
                    <div style="color: #999 !important;">
                        {!! $post['content'] !!}
                    </div>
{{--                    <p>Quisque pretium fermentum quam, ___ amet cursus ante sollicitudin ___. Morbi consequat risus consequat, _________ orci sit amet, iaculis ____. Integer quis sapien nec ____ ultrices euismod sit amet __ lacus. Sed a imperdiet ____. Duis eu est dignissim _____ dictum hendrerit quis vitae __. Fusce eu nulla ac ____ cursus tincidunt. Interdum et _________ fames ac ante ipsum ______ in faucibus. Integer tristique ___ eget leo faucibus porttiton. </p>--}}
{{--                    <p>Nulla vitae metus tincidunt, ______ nunc quis, porta nulla. ____________ vel dui nec libero ______ pretium id sed arcu. ____ consequat diam id nisl _______ dignissim. Etiam commodo diam _____, at scelerisque sem finibus ___ amet. Curabitur id lectus ____ purus finibus laoreet. </p>--}}
{{--                    <p>Nam eget lectus ac ___ luctus hendrerit sed nec _____. Maecenas vulputate magna sed ____ pellentesque, in consectetur nisi ___________. </p>--}}
                </div>
            </div>
{{--            <div class="news-comment-section">--}}
{{--                <div class="row">--}}

{{--                    <!-- Comment -->--}}
{{--                    <div class="col-md-7">--}}
{{--                        <div class="news-post-comment-wrap">--}}
{{--                            <div class="news-post-user-comment">  <img src="{{ asset('user_style/img/team/4.jpg') }}" alt="" />  </div>--}}
{{--                            <div class="news-post-user-content">--}}
{{--                                <h3>Betty Misse &nbsp;&nbsp; <span>29 Dec 2022 </span></h3>--}}
{{--                                <p>Photography ultricies nibh non _____ maximus sceleue inte molliser _____ neque nec tincidunte aliquam ____ volutpat. Praeser tempore.  </p>  <a class="news-post-repay" href="#">Reply <i class="ti-back-left"></i></a>  </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Contact Form -->--}}
{{--                    <div class="col-md-5">--}}
{{--                        <h3>Leave a Reply </h3>--}}
{{--                        <form method="post" class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="text" name="name" id="name" placeholder="Full Name *" required="" />  </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="email" name="email" id="email" placeholder="Email Address *" required="" />  </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Comment *" required=""></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <button class="button-primary mt-15"><a href="#0"><span>Send Comment </span></a></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection

@extends('admin_view.admin_master')

@section('admin')

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>News <span>/ Add Post </span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row">

    <!--Summernote Start-->
    <div class="col-12 mb-30">
        <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="box mb-30">
                <div class="box-head">
                    <h3 class="title">Post Title Here </h3>
                </div>
                <div class="box-body">
                    @error('video_title')
                        <div class="alert alert-danger">
                            <small class="text-danger">{{ $message }}</small>
                        </div>
                    @enderror
                    <div class="col-12 my-20">
                        <label for="video_title">Enter Post Title </label>
                        <input id="video_title" name="video_title" type="text" class="form-control" placeholder="Title">
                    </div>
                </div>
            </div>

            <div class="box mb-30">
                <div class="box-head">
                    <h3 class="title">Upload Video </h3>
                </div>
                <div class="box-body">
                    <input name="Video_file" id="Video_file" class="dropify mb-3" type="file"
                        data-default-file="{{ asset('user_style/img/slider/1.jpg'   ) }}">
                </div>
                @error('Video_file')
                    <div class="alert alert-danger">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="box mb-30">
                <div class="box-head">
                    <h3 class="title">Upload Video image</h3>
                </div>
                <div class="box-body">
                    <input name="video_img" id="video_img" class="dropify mb-3" type="file"
                        data-default-file="{{ asset('user_style/img/slider/2.jpg') }}">
                </div>
                @error('video_img')
                    <div class="alert alert-danger">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="col-12 mb-20">
                <input type="submit" value="Share Post" class="button button-primary float-left">
                <a href="{{ route('admin.dashboard') }}" class="button button-danger float-right">Cancle</a>
            </div>
        </form>
    </div>
    <!--Summernote End-->
</div>
@endsection

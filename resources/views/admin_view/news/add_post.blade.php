@extends('admin_view.admin_master')
@section('admin')
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>News  <span>/ Add Post </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Summernote Start-->
        <div class="col-12 mb-30">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box mb-30">
                    <div class="box-head">
                        <h3 class="title">Create Your Post Here </h3>
                    </div>
                    <div class="box-body">
                        @error('content')
                        <div class="alert alert-danger">
                            <small class="text-danger">{{ $message }}</small>
                        </div>
                        @enderror
                        <textarea id="content" name="content" class="summernote"></textarea>
                    </div>
                </div>

                <div class="box mb-30">
                    <div class="box-head">
                        <h3 class="title">Upload Post Image Here </h3>
                    </div>
                    <div class="box-body">
                        <input name="post_img" id="post_img" class="dropify mb-3" type="file" data-default-file="{{ asset('admin_style/images/error/error-2.png') }}">
                    </div>
                    @error('post_img')
                    <div class="alert alert-danger">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                    @enderror
                </div>

                <div class="box mb-30">
                    <div class="box-head">
                        <h3 class="title">Post Title Here </h3>
                    </div>
                    <div class="box-body">
                        @error('post_title')
                        <div class="alert alert-danger">
                            <small class="text-danger">{{ $message }}</small>
                        </div>
                        @enderror
                        <div class="col-12 my-20">
                            <label for="formLayoutEmail1">Enter Post Title </label>
                            <input id="post_title" name="post_title" type="text" class="form-control" placeholder="Title">
                        </div>
                    </div>

                </div>


                <div class="box mb-30">
                    <div class="box-head">
                        <h3 class="title">Post Tag Here </h3>
                    </div>
                    <div class="box-body">
                        @error('Tag')
                        <div class="alert alert-danger">
                            <small class="text-danger">{{ $message }}</small>
                        </div>
                        @enderror
                        <div class="col-12 my-20">
                            <label for="formLayoutEmail1">Enter Post Tag </label>
                            <input id="post_tag" name="post_tag" type="text" class="form-control" placeholder="Tag">
                        </div>
                    </div>

                </div>

                <div class="col-12 mb-20">
                    <input type="submit" value="Share Post" class="button button-primary float-left">
                    <input type="submit" value="cancle" class="button button-danger float-right">
                </div>
            </form>

        </div>
        <!--Summernote End-->


    </div>


@endsection

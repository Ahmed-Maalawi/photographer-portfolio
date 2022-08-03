@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Gallery  <span>/ Add Feedback </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Add Feedback </h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('store.feedback') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12 mb-15">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Client Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="job" name="job" type="text" class="form-control" placeholder="Client Job">
                            @error('job')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="profile_img" name="profile_img" type="file" class="form-control" placeholder="Client Img">
                            @error('profile_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <textarea id="feedback" name="feedback" class="form-control" placeholder="Feedback"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

{{--                        <button class="sweetalert sweetalert-warning button button-warning">Warning </button>--}}

                        <div class="col-12 mb-15">
                            <input  type="submit" class="button button-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
            <!--Form controls End-->

        </div>
@endsection

@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Feedback  <span>/ Edit Feedback </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Edit Feedback </h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('update.feedback') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
                        <input type="hidden" name="old_img" value="{{ $feedback->profile_img }}">

                        <div class="col-12 mb-15">
                            <input id="client_name" name="client_name" type="text" class="form-control" placeholder="Member Name" value="{{ $feedback->name }}">
                            @error('client_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="job_title" name="job_title" type="text" class="form-control" placeholder="client job" value="{{ $feedback->job }}">
                            @error('job_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="client_img" name="client_img" type="file" class="form-control" placeholder="Client Img" onchange="previewFile(this);">
                            @error('client_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="row justify-content-around">
                                <div class="col-md-6 my-2">
                                    <h5>Current Img :</h5>
                                    <img src="{{ asset( $feedback->profile_img ) }}" alt="">
                                </div>
                                <hr>
                                <div class="col-md-6 my-2 ">
                                    <h5>New Img :</h5>
                                    <div id="previewImg"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-15">
                            <textarea id="feedback" name="feedback" class="form-control" placeholder="feedback">{{ $feedback->feedback }}</textarea>
                            @error('feedback')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input  type="submit" class="button button-primary" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
            <!--Form controls End-->

        </div>

        {{------------------------------------   preview new image for client   ------------------------------------}}
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];

                if(file){
                    var reader = new FileReader();

                    reader.onload = function(){
                        let image = new Image();
                        image.src = reader.result;
                        $('#previewImg').append(image);
                    }

                    reader.readAsDataURL(file);
                }
            }
        </script>
@endsection

@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Our Team  <span>/ Add Member </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Edit Member </h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('update.member') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <input type="hidden" name="old_img" value="{{ $member->img_path }}">

                        <div class="col-12 mb-15">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Member Name" value="{{ $member->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="job_title" name="job_title" type="text" class="form-control" placeholder="Member job title" value="{{ $member->jop_title }}">
                            @error('job_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <input id="member_img" name="member_img" type="file" class="form-control" placeholder="Member Img" onchange="previewFile(this);">
                            @error('member_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                           <div class="row justify-content-around">
                               <div class="col-md-6 my-2">
                                   <h5>Current Img :</h5>
                                   <img src="{{ asset( $member->img_path ) }}" alt="">
                               </div>
                               <hr>
                               <div class="col-md-6 my-2 ">
                                   <h5>New Img :</h5>
                                    <div id="previewImg"></div>
                               </div>
                           </div>
                        </div>

                        <div class="col-12 mb-15">
                            <textarea id="description" name="description" class="form-control" placeholder="Member pio">{{ $member->pio }}</textarea>
                            @error('description')
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

{{------------------------------------   preview new image for team member   ------------------------------------}}
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

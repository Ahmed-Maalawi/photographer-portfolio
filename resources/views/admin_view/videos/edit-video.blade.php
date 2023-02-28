@extends('admin_view.admin_master')

@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Videos  <span>/ Edit Video </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <div class="col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">{{ $video->video_title }} </h4>
                </div>
                <div class="box-body">
                    <video poster="{{ asset($video['video_img']) }}" class="img-fluid mx-auto" playsinline="" controls="">
                        <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="720"></source>
                        <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="576"></source>
                        <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="1080"></source>
                    </video>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-30">
           <div class="box">
               <div class="box-head">
                   <h3 class="title">Edit Video Info </h3>
               </div>
               <div class="box-body">
                   <form action="{{ route('admin.video.update', $video['id']) }}" method="POST" enctype="multipart/form-data">
                       @csrf

                       <div class="col-12 mb-15">
                           <label for="video_title">Video Title <span class="text-danger">*</span></label>
                           <input id="video_title" name="video_title" value="{{ $video['video_title'] }}" type="text" class="form-control" placeholder="video title">
                           @error('video_title')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>

                       <hr>

                       <div class="col-12 mb-15">
                           <label>Current Video Cover </label>
                           <img class="img-fluid" src="{{ asset($video['video_img']) }}" alt="{{ $video['video_title'] }}">
                       </div>

                       <hr>

                       <div class="col-12 mt-15">
                           <label for="new_cover">Upload new Cover (optional)</label>
                           <input  id="new_cover" name="new_cover" type="file" class="dropify" placeholder="new cover video">
                           @error('new_cover')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                       </div>
                       <div class="col-12 mt-30 d-flex justify-content-between">

                           <input  type="submit" class="button button-primary" value="Add">
                           <a class="button button-danger" href="{{ route('admin.videos.all') }}">Cancel</a>
                       </div>
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection

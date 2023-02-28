@extends('admin_view.admin_master')

@section('admin')
    <div class="row justify-content-between align-items-center mb-10 relative">
        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Dashboard  <span>/ All Videos </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        @forelse($videos as $video)
            <!--HTML5 Video Start-->
            <div class="col-md-4 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">{{ $video->video_title }} </h4>
                        </div>
                        <div class="box-body">
                            <video poster="{{ asset($video['video_img']) }}" class="plyr-video-{{ $video['id'] }} img-fluid" playsinline="" controls="">
                                <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="720"></source>
                                <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="576"></source>
                                <source src="{{ asset($video->video_path) }}" type="video/mp4" data-res="1080"></source>
                            </video>

                            <div class="d-flex justify-content-between mt-4">
                                <a class="btn btn-primary" href="{{ route('admin.videos.edit', $video, ['id']) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('admin.videos.delete', $video['id']) }}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
        @empty
            <h2 class="text-4xl text-center font-bold">videos not found</h2>
        @endforelse
    </div>

@endsection

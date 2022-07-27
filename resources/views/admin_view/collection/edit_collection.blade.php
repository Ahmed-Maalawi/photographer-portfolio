@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Gallery  <span>/ Edit Collection </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Edit Collection </h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('update.collection') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="collection_id" value="{{ $collection->id }}">
                        <input type="hidden" name="collection_img" value="{{ $collection->img_path }}">


                        <div class="col-12 mb-15">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Collection Name" value="{{ $collection->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <label for="Collection_img">Change Collection Image :</label>
                            <input id="Collection_img" name="Collection_img" type="file" class="form-control" placeholder="Collection Img">
                            <img id="newImg"/>

                            @error('Collection_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <textarea id="description" name="description" class="form-control" placeholder="Collection Description">{{ $collection->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 mb-15">
                            <h4> current Image :</h4>
                            <img src="{{ asset($collection->img_path) }}" alt="{{ $collection->name }}" class="img-fluid rounded mb-3 ">
                        </div>

                        <div class="col-12 mb-15">
                            <input  type="submit" class="button button-primary" value="Edit">
                        </div>

                    </form>
                </div>
        </div>
            <!--Form controls End-->
    </div>


@endsection

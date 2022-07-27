@extends('admin_view.admin_master')
@section('admin')

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Gallery  <span>/ Add Photos </span></h3>
                </div>
            </div>
            <!-- Page Heading End -->

        </div>
        <!-- Page Headings End -->

        <div class="row mbn-30">

            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">Add Collection </h3>
                    </div>
                    <div class="box-body">

                        <form action="{{ route('storeImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="collectionID" id="collectionID" value="{{ $collection->id }}">

                            <div class="col-12 mb-30">
                                <input id="images" name="images[]" class="dropify" type="file" data-height="220" multiple>
                            </div>

                            <div class="col-12 mb-15">
                                <input type="submit" class="button button-primary" value="Add">
                            </div>
                        </form>

                    </div>
                </div>
                <!--Form controls End-->

            </div>

            <!--Order Details Head Start-->
            <div class="col-12 mb-30">
                <div class="row mbn-15">
                    <div class="col-12 col-md-4 mb-15">
                        <h4 class="text-primary fw-600 m-0">{{ $collection->name }}</h4>
                    </div>
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Added At:  <span class="badge badge-round badge-success">{{ $collection->created_at->format('d/m/Y') }} </span></span></div>
                </div>
            </div>
            <!--Order Details Head End-->

            <!--Order Details Customer Information Start-->
            <div class="col-12 mb-30">
                <ul class="image-gallery">
                    @foreach($collection_img as $img)
                        <li>
                            <a class="btn btn-danger absolute top-5 text-center" href=""><i class="fa-solid fa-xmark"></i></a>
                            <img src="{{ asset($img->img_path) }}" alt=""/>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--Order Details List End-->

        </div>



@endsection

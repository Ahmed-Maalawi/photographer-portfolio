@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Gallery  <span>/ Add Collection </span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <div class="col-12 col-md-8 mb-30">
            <div class="box-body">

                <table class="table footable footable-1 footable-filtering footable-filtering-right footable-paging footable-paging-center breakpoint-xl" data-paging="true" data-filtering="true" data-sorting="true" data-breakpoints="{ &quot;xs&quot;: 480, &quot;sm&quot;: 768, &quot;md&quot;: 992, &quot;lg&quot;: 1200, &quot;xl&quot;: 1400 }" style="">
                    <thead>
                    <tr class="footable-header text-center">
                        <th data-name="Name" class="footable-sortable footable-first-visible" style="display: table-cell;">Collection Image <span class="fooicon fooicon-sort"></span></th>
                        <th data-name="Position" class="footable-sortable" style="display: table-cell;">Name <span class="fooicon fooicon-sort"></span></th>
                        <th data-breakpoints="xs" data-name="Office" class="footable-sortable" style="display: table-cell;">Added At <span class="fooicon fooicon-sort"></span></th>
                        <th data-breakpoints="xs" data-name="Age" class="footable-sortable text-center" style="display: table-cell;">Options <span class="fooicon fooicon-sort"></span></th>
                        {{--                        <th data-breakpoints="xs sm" data-name="Start" class="footable-sortable" style="display: table-cell;">Start date <span class="fooicon fooicon-sort"></span></th>--}}
                        {{--                        <th data-breakpoints="xs sm md" data-name="Salary" class="footable-sortable footable-last-visible" style="display: table-cell;">Salary <span class="fooicon fooicon-sort"></span></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allCollections as $collection)
                        <tr class="">

                            <td style="display: table-cell;" class="footable-first-visible">
                                <img src="{{ asset($collection->img_path) }}" alt="{{ $collection->name }}" width="100" height="100 ">
                            </td>
                            <td style="display: table-cell;" class="align-items-baseline">{{ $collection->name }}</td>
                            <td style="display: table-cell;" class="align-items-baseline">
                                @if($collection->created_at)
                                    <p>{{ $collection->created_at->diffForHumans() }}</p>
                                @else
                                    <p>{{ 'un Known' }}</p>
                                @endif
                            </td>
                            <td style="display: table-cell;" class="text-center text-white">
                                <a class="button button-info" href="{{ route('edit.collection', $collection->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="button button-info" href="{{ route('addPhotos', $collection->id) }}"><i class="fa-solid fa-plus"></i></a>
                                <a class="button button-danger" href="{{ route('delete.collection', $collection->id) }}" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                                @if($collection->status)
                                    <a class="button button-dark" href="{{ route('disActive.collection', $collection->id) }}" title="Dis-Active"><i class="fa-solid fa-arrow-down"></i></a>
                                @else
                                    <a class="button button-secondary" href="{{ route('active.collection', $collection->id) }}" title="Active"><i class="fa-solid fa-arrow-up"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

{{--                    <tfoot>--}}
{{--                    <tr class="footable-paging">--}}
{{--                        <td colspan="6">--}}
{{--                            <div class="footable-pagination-wrapper">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="footable-page-nav disabled" data-page="first"><a class="footable-page-link" href="#">«</a></li>--}}
{{--                                    <li class="footable-page-nav disabled" data-page="prev"><a class="footable-page-link" href="#">‹</a></li>--}}
{{--                                    <li class="footable-page visible active" data-page="1"><a class="footable-page-link" href="#">1</a></li>--}}
{{--                                    <li class="footable-page visible" data-page="2"><a class="footable-page-link" href="#">2</a></li>--}}
{{--                                    <li class="footable-page visible" data-page="3"><a class="footable-page-link" href="#">3</a></li>--}}
{{--                                    <li class="footable-page-nav" data-page="next"><a class="footable-page-link" href="#">›</a></li>--}}
{{--                                    <li class="footable-page-nav" data-page="last"><a class="footable-page-link" href="#">»</a></li>--}}
{{--                                </ul>--}}
{{--                                <div class="divider"></div>--}}
{{--                                <span class="label label-default">1 of 3</span>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
                </table>
            </div>
        </div>
        <!--Form controls Start-->
        <div class="col-12 col-md-4 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Add Collection </h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('store.collection') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12 mb-15">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Collection Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-15">
                            <input id="Collection_img" name="Collection_img" type="file" class="form-control" placeholder="Collection Img">
                            @error('Collection_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-15">
                            <textarea id="description" name="description" class="form-control" placeholder="Collection Description"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-15">
                            <input  type="submit" class="button button-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
            <!--Form controls End-->

        </div>
@endsection

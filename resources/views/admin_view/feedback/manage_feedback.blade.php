@extends('admin_view.admin_master')
@section('admin')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Feedback  <span>/ Manage Feedback </span></h3>
            </div>

        </div><!-- Page Heading End -->
        <a class="btn btn-dark float-right" href="{{ route('add.feedback') }}">Add Feedback</a>
    </div><!-- Page Headings End -->

    <div class="row">

        <div class="col-12 mb-30">
            <div class="box-body">

                <table class="table footable footable-1 footable-filtering footable-filtering-right footable-paging footable-paging-center breakpoint-xl" data-paging="true" data-filtering="true" data-sorting="true" data-breakpoints="{ &quot;xs&quot;: 480, &quot;sm&quot;: 768, &quot;md&quot;: 992, &quot;lg&quot;: 1200, &quot;xl&quot;: 1400 }" style="">
                    <thead>
                    <tr class="footable-header text-center">
                        <th data-name="Name" class="footable-sortable footable-first-visible" style="display: table-cell;">Client Image <span class="fooicon fooicon-sort"></span></th>
                        <th data-name="Position" class="footable-sortable" style="display: table-cell;">Client Name <span class="fooicon fooicon-sort"></span></th>
                        <th data-name="Position" class="footable-sortable" style="display: table-cell;">Client Name <span class="fooicon fooicon-sort"></span></th>
                        <th data-breakpoints="xs" data-name="Office" class="footable-sortable" style="display: table-cell;">Client job <span class="fooicon fooicon-sort"></span></th>
                        <th data-breakpoints="xs" data-name="Office" class="footable-sortable" style="display: table-cell;">Status <span class="fooicon fooicon-sort"></span></th>
                        <th data-breakpoints="xs" data-name="Age" class="footable-sortable text-center" style="display: table-cell;">Options <span class="fooicon fooicon-sort"></span></th>
                        {{--                        <th data-breakpoints="xs sm" data-name="Start" class="footable-sortable" style="display: table-cell;">Start date <span class="fooicon fooicon-sort"></span></th>--}}
                        {{--                        <th data-breakpoints="xs sm md" data-name="Salary" class="footable-sortable footable-last-visible" style="display: table-cell;">Salary <span class="fooicon fooicon-sort"></span></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feedbacks as $feedback)
                        <tr class="">

                            <td style="display: table-cell;" class="footable-first-visible">
                                <img src="{{ asset($feedback->profile_img) }}" alt="{{ $feedback->name }}" width="100" height="100 ">
                            </td>
                            <td style="display: table-cell;" class="align-items-baseline">{{ $feedback->name }}</td>
                            <td style="display: table-cell;" class="align-items-baseline">{{ $feedback->job }}</td>
                            <td style="display: table-cell;" class="align-items-baseline">{{ $feedback->feedback }}</td>
                            <td style="display: table-cell;" class="align-items-baseline">
                                @if($feedback->status == true)
                                    <span class="badge badge-primary">Active </span>
                                @else
                                    <span class="badge badge-danger">Dis-Active </span>
                                @endif
                            </td>
                            <td style="display: table-cell;" class="text-center text-white">
                                <a class="button button-info" href="{{ route('edit.feedback', $feedback->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="button button-danger" href="{{ route('delete.feedback', $feedback->id) }}" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                                @if($feedback->status == true)
                                    <a class="button button-dark" href="{{ route('disActive.feedback', $feedback->id) }}" title="Dis-Active"><i class="fa-solid fa-arrow-down"></i></a>
                                @else
                                    <a class="button button-secondary" href="{{ route('Activate.feedback', $feedback->id) }}" title="Active"><i class="fa-solid fa-arrow-up"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    <tfoot>
                    <tr class="footable-paging">
                        <td colspan="6">
                            <div class="footable-pagination-wrapper">
                                <ul class="pagination">
                                    <li class="footable-page-nav disabled" data-page="first"><a class="footable-page-link" href="#">«</a></li>
                                    <li class="footable-page-nav disabled" data-page="prev"><a class="footable-page-link" href="#">‹</a></li>
                                    <li class="footable-page visible active" data-page="1"><a class="footable-page-link" href="#">1</a></li>
                                    <li class="footable-page visible" data-page="2"><a class="footable-page-link" href="#">2</a></li>
                                    <li class="footable-page visible" data-page="3"><a class="footable-page-link" href="#">3</a></li>
                                    <li class="footable-page-nav" data-page="next"><a class="footable-page-link" href="#">›</a></li>
                                    <li class="footable-page-nav" data-page="last"><a class="footable-page-link" href="#">»</a></li>
                                </ul>
                                <div class="divider"></div>
                                <span class="label label-default">1 of 3</span>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>

@endsection

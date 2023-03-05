@extends('admin_view.admin_master')
@section('admin')

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>News  <span>/ Manage Posts </span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Order List Start-->
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-vertical-middle">
                        <thead>
                        <tr>
                            <th>Photo </th>
                            <th>Post Title </th>
                            <th>Post Tag </th>
                            <th>Published at </th>
                            <th>Status </th>
                            <th>Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( isset($posts) )
                            @foreach($posts as $post)
                                <tr>
                                    <td><img width="100" height="100" src="{{ asset($post['post_img']) }}" alt="" class="product-image"></td>
                                    <td><a href="#">{{ $post['title'] }} </a></td>
                                    <td>{{ $post['tag'] }} </td>
                                    <td>{{ $post['created_at'] }}</td>
                                    <td>
                                        @if($post['status'])
                                            <span class="badge badge-primary">Active </span>
                                        @else
                                            <span class="badge badge-danger">Dis-Active </span>
                                        @endif
                                    </td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
{{--                                            <a class="view button button-box button-xs button-primary" href="order-details.html"><i class="zmdi zmdi-more"></i></a>--}}
                                            <a class="edit button button-box button-xs button-info" href="{{ route('news.edit', $post['id']) }}"><i class="zmdi zmdi-edit"></i></a>
                                            @if($post['status'])
                                                <a class="delete button button-box button-xs button-dark" href="{{ route('news.dis-active', $post['id']) }}"><i class="fa-solid fa-arrow-down"></i></a>
                                            @else
                                                <a class="button button-box button-xs button-primary" href="{{ route('news.activated', $post['id']) }}"><i class="fa-solid fa-arrow-up"></i></a>
                                            @endif
                                            <a class="delete button button-box button-xs button-danger" href="{{ route('news.destroy', $post['id']) }}"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>not posts found</p>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Order List End-->
        </div>
@endsection

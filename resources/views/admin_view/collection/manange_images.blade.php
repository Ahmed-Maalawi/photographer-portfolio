@extends('admin_view.admin_master')
@section('admin')
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Manage Images </h4>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th># </th>
                        <th>Img </th>
                        <th>Collection </th>
                        <th>Added At </th>
                        <th>Status </th>
                        <th>Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $key => $img)
                        <tr class="text-center">
                            <th>
                                {{ $key + 1 }}
                            </th>
                            <td>
                                <img src="{{ asset($img->img_path) }}" alt="" width="100" height="100">
                            </td>
                            <td>
                                <p>{{ $img['collection']['name'] }}</p>
                            </td>
                            <td>{{ $img->created_at->format('m/d/Y') }}</td>
                            <td>
                                @if($img->status)
                                <span class="badge badge-primary">Active </span>
                                @else
                                <span class="badge badge-danger">Dis-Active </span>
                                @endif
                            </td>
                            <td>
{{--                                <a class="btn btn-primary" href=""><i class="fa-solid fa-pen-to-square"></i></a>--}}
                                <a class="btn btn-danger" href="{{ route('delete.image', $img->id) }}"><i class="fa-solid fa-trash-can"></i></a>
                                @if($img->status)
                                    <a class="btn btn-dark" href="{{ route('image.disActivate', $img->id) }}" title="Dis-Active"><i class="fa-solid fa-circle-down"></i></a>
                                @else
                                    <a class="btn btn-outline-dark" href="{{ route('image.Activate', $img->id) }}" title="Active"><i class="fa-solid fa-circle-up"></i></a>
                                @endif
                            <td/>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

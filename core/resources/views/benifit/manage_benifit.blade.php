@extends('admin.dashboard1')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
{{--                        <h3><a href="{{route('addBlog')}}" class="btn btn-info" role="button">Add Blog</a></h3>--}}

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Agenda List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($benifit  as $key => $row)
                                        <tr>
{{--                                            <td>{{ $benifit->firstItem() + $key}}</td>--}}

                                            <td><i class="{{ $row->img }}"></i></td>
                                            <td>{{ $row->title}}</td>
                                            <td>{{ Str::words($row->description, 15)}}</td>



                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">

                                                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#benifitModal-{{$row->id}}" >
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


                                                    <a href="{{route('inactiveBlog',$row->id)}}" class="btn btn-danger btn-sm">

                                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('benifit.edit_benifit')
                                    @endforeach
                                </table>

                            </div>



                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection
@push('img')
    <style>
        img {

            height:150px;
            width: 155px;
        }
    </style>

@endpush

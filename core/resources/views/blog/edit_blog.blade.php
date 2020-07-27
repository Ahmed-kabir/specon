@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="{{route('addSpeaker')}}" class="btn btn-info" role="button">Add Speaker</a></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Speaker Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!-- <div class="card card-success"> -->
                    {{--              <div class="card-header text-center">--}}
                    {{--                <h3>Speaker</h3>--}}
                    {{--              </div>--}}
                    <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('updateBlog',$editBlogById->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Blog Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           value="{{$editBlogById->title}}">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Short Desc</label>
                                    <textarea class="form-control" rows="3" name="short_desc"
                                              id="short_desc">{{$editBlogById->short_desc}}</textarea>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5" name="long_desc"
                                              id="long_desc">{{$editBlogById->long_desc}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <img class="img-fluid img-thumbnail ml-3 rounded" src="{{asset('assets/blogImage/'.$editBlogById->img)}}"
                                         alt="{{asset('assets/blogImage/'.$editBlogById->img)}}">
                                    <input type="file" class="form-control" id="img" name="img">
                                    <small class="help-block form-text">Please Select 350*310 Image</small>
                                </div>
                            </div>


                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>

                            </div>
                        </form>


                    </div>


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('img')
    <style>
        img {

            height:50px;
            width: 80px;
        }
    </style>

@endpush

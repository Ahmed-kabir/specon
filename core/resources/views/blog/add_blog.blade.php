@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="{{route('manageBlog')}}" class="btn btn-info" role="button">Manage Blog</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Add Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!-- <div class="card card-success"> -->
                        <!-- <div class="card-header text-center">
                          <h3>Speaker</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('saveBlog')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Blog Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Title.." required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Date</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                           placeholder="Date" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Short Description</label>
                                    <textarea class="form-control" rows="2" name="short_desc" id="short_desc"
                                              placeholder="Description ..."></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Long Description</label>
                                    <textarea class="form-control" rows="3" name="long_desc" id="long_desc"
                                              placeholder="Description ..."></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" id="img" name="img">
                                <small class="help-block form-text">Please Select 350*310 Image</small>
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

@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--                        <h1><a href="{{route('manageSpeaker')}}" class="btn btn-info" role="button">Manage Speaker</a>--}}
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">About Form</li>
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
                        <form action="{{route('updateAbout',$about->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label>About Title</label>
                                <input type="text" class="form-control" id="title" value="{{$about['title']}}" name="title"
                                       placeholder="Name" required>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control nicEdit" rows="10" name="description"
                                              id="long_desc">{{$about->description}}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="pl-5"><label class="align-top">Image</label></div>

                                    <img class="img-fluid img-thumbnail ml-3" src="{{asset('assets/sectionImage/'.$about->img)}}"
                                         alt="{{asset('assets/sectionImage/'.$about->img)}}">
                                    <div class="col-sm-3"><input type="file" class="form-control" id="img" name="img"></div>

                                    <small class="help-block form-text">Please Select 350*310 Image</small>
                                </div>



                            </div>

                            <div class=" text-center">
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

            height:150px;
            width: 280px;
        }
    </style>

@endpush

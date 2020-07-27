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
                            <li class="breadcrumb-item active">Banner Form</li>
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
                        <form action="{{route('updateBanner',$about->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label>Banner Title</label>
                                <input type="text" class="form-control" id="title" value="{{$about['title']}}" name="title"
                                       placeholder="Name" required>
                            </div>



                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"  id="description"
                                          placeholder="Description ...">{{$about['description']}}</textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Image</label>
                                <img class="img-fluid img-thumbnail ml-3 rounded" src="{{asset('assets/speakerImage/'.$about->img)}}"
                                     alt="{{asset('assets/speakerImage/'.$about->img)}}">
                                <input type="file" class="form-control" id="speaker_img" name="speaker_img">
                                <small class="help-block form-text">Please Select 460*530 Image</small>
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

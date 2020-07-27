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
                        <form action="{{route('updateSpeaker',$speaker->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Speaker Name</label>
                                    <input type="text" class="form-control" id="speaker_name" name="speaker_name"
                                           value="{{$speaker->speaker_name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Experties</label>
                                    <input type="text" class="form-control" id="experties" name="experties"
                                           value="{{$speaker->experties}}">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5" name="description"
                                              id="description">{{$speaker->description}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <img class="img-fluid img-thumbnail ml-3 rounded" src="{{asset('assets/speakerImage/'.$speaker->speaker_img)}}"
                                         alt="{{asset('assets/speakerImage/'.$speaker->speaker_img)}}">
                                    <input type="file" class="form-control" id="speaker_img" name="speaker_img">
                                    <small class="help-block form-text">Please Select 460*530 Image</small>
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

            height:150px;
            width: 155px;
        }
    </style>

@endpush

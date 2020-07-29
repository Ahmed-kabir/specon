@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
{{--                        <h1><a href="{{route('addSpeaker')}}" class="btn btn-info" role="button">Add Speaker</a></h1>--}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Settings Form</li>
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
                        <form action="{{route('updateSettings',$settings->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           value="{{$settings->title}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                           value="{{$settings->location}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date"
                                           value="{{$settings->start_date}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Place</label>
                                    <input type="text" class="form-control" id="place" name="place"
                                           value="{{$settings->place}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Max tkt qty</label>
                                    <input type="text" class="form-control" id="max_tkt_qty" name="max_tkt_qty"
                                           value="{{$settings->max_tkt_qty}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                           value="{{$settings->email}}">
                                </div>
                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <div class="pl-5"><label class="align-top">Image</label></div>

                                    <img class="img-fluid img-thumbnail ml-3" src="{{asset('assets/siteImage/'.$settings->img)}}"
                                         alt="{{asset('assets/siteImage/'.$settings->img)}}">

                                    <div class="col-sm-5"><input type="file" class="form-control" id="img" name="img"></div>
                                    <small class="help-block form-text">Please Select 806*710 Image</small>
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

            height:160px;
            width: 160px;
        }
    </style>

@endpush

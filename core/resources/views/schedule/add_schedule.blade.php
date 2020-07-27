@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="{{route('manageSchedule')}}" class="btn btn-info" role="button">Manage Schedule</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Schedule Add Form</li>
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
                        <form action="{{route('saveSchedule')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Speaker Name</label>
                                    <select name="speaker_id" id="" class="form-control-sm form-control">
                                        @foreach($speakers as $row)
                                            <option value="{{ $row->id}}">{{ $row->speaker_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Experties</label>
                                    <select name="topic" id="" class="form-control-sm form-control">
                                        @foreach($topics as $row)
                                            <option value="{{$row->id}}">{{ $row->topic_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Schedule Date</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                           placeholder="Date" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time"
                                           placeholder="Experties" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>End Time</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time"
                                           placeholder="Experties" required>
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

@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Schedule Add Form</strong>
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body card-block">
                    <form action="{{route('saveSchedule')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Speaker Name</label></div>
                            <div class="col-12 col-md-9">
                                <select name="speaker_name" id="" class="form-control-sm form-control">
                                    @foreach($speakers as $row)
                                    <option value="{{ $row->id}}">{{ $row->speaker_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Topic</label></div>
                            <div class="col-12 col-md-9">
                                <select name="topic" id="" class="form-control-sm form-control">
                                    @foreach($topics as $row)
                                    <option value="{{$row->id}}">{{ $row->topic_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Select Date</label></div>
                            <div class="col-12 col-md-9"><input type="date" name="date" name="text-input" placeholder="Select Date" class="form-control"></div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Select Start Time</label></div>
                            <div class="col-12 col-md-9"><input type="time" name="start_time" name="text-input"  class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Select End Time</label></div>
                            <div class="col-12 col-md-9"><input type="time" name="end_time" name="text-input"  class="form-control"></div>
                        </div>


                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

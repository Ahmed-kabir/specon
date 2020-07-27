@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Edit Schedule</strong>
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                    <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
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
                    <form action="{{route('updateSchedule',$scheduleEditByid->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

{{--                        <div class="row form-group">--}}
{{--                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Speaker Name</label></div>--}}
{{--                            <div class="col-12 col-md-9"><input type="text" name="speaker_name" name="text-input" placeholder="Speaker Name" value="{{$scheduleEditByid->speakers->speaker_name}}" class="form-control"></div>--}}
{{--                        </div>--}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Speaker Name</label></div>
                            <div class="col-12 col-md-9">
                                <select name="speaker_name" id="speaker_name" class="form-control">
                                    @foreach($speakerName as $name)
                                    <option value="{{$name->id}}">{{ $name->speaker_name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Topic Name</label></div>
                            <div class="col-12 col-md-9">
                                <select name="topic" id="topic" class="form-control">
                                    @foreach($topicName as $name)
                                        <option value="{{$name->id}}">{{ $name->topic_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label"> Date</label></div>
                            <div class="col-12 col-md-9"><input type="date" name="date" name="text-input" placeholder="Speaker Name" value="{{$scheduleEditByid->date}}" class="form-control" readonly></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label"> Start Time</label></div>
                            <div class="col-12 col-md-9"><input type="time" name="start_time" name="text-input" placeholder="Speaker Name" value="{{$scheduleEditByid->start_time}}" class="form-control" readonly></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label"> End Time</label></div>
                            <div class="col-12 col-md-9"><input type="time" name="end_time" name="text-input" placeholder="Speaker Name" value="{{$scheduleEditByid->end_time}}" class="form-control" readonly></div>
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

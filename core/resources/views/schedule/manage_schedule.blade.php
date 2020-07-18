@extends('admin.dashboard')
@section('main')
</br>
</br>
<div class="row justify-content-center" >
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Speaker List</strong>
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Speaker Name</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedule  as $key => $row)
                        <tr>
                            <td>{{ $schedule->firstItem() + $key}}</td>
                            <td>{{ $row->speakers->speaker_name}}</td>
                            <td>{{ $row->topicName->topic_name}}</td>
                            <td>{{ $row->date}}</td>
                            <td>{{ $row->start_time}}</td>
                            <td>{{ $row->end_time}}</td>
                            <td> <img src="{{asset($row->speakers->speaker_img)}}" width="150" height="150" /></td>
                            <td><a href="{{route('editSchedule',$row->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit">Edit</span></a>
                                <a href="{{route('deleteSchedule',$row->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure to Inactive this');">

                                    <span class="glyphicon glyphicon-trash">Delete</span></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $schedule->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

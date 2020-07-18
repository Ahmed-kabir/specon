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
                    <th scope="col">Name</th>
                    <th scope="col">Experties</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($speaker  as $key => $row)
                <tr>
{{--                    <th scope="row">1</th>--}}
                    <td>{{ $speaker->firstItem() + $key}}</td>
                    <td>{{ $row->speaker_name}}</td>
                    <td>{{ $row->experties}}</td>
                    <td>{{ $row->description}}</td>
                    <td> <img src="{{asset($row->speaker_img)}}" /></td>
                    <td><a href="{{route('editSpeaker',$row->id)}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit">Edit</span></a>
                        <a href="{{route('inactiveSpeaker',$row->id)}}" class="btn btn-secondary" onclick="return confirm('Are You sure to Inactive this');">

                            <span class="glyphicon glyphicon-trash">Inactive</span></a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $speaker->links() }}
            </div>
        </div>
    </div>
</div>
    </div>
@endsection

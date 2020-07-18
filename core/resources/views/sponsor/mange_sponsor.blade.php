@extends('admin.dashboard')
@section('main')
</br>
</br>
<div class="row justify-content-center" >
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Tickat List</strong>
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sponsor Type</th>
                        <th scope="col">Sponsor Title</th>
                        <th scope="col">Sponsor Img</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sponsors  as $key => $row)
                        <tr>
                            {{--                    <th scope="row">1</th>--}}

                            <td>{{ $row->sponsor_type}}</td>
                            <td>{{ $row->sponsor_title}}</td>
                            <td> <img src="{{asset($row->sponsor_img)}}" /></td>
                            <td><a href="{{route('editTicket',$row->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit">Edit</span></a>
                                <a href="{{route('inactiveTicket',$row->id)}}" class="btn btn-secondary" onclick="return confirm('Are You sure to Inactive this');">

                                    <span class="glyphicon glyphicon-trash">Inactive</span></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

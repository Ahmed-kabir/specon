@extends('admin.dashboard')
@section('main')
</br>
</br>
<div class="row justify-content-center" >
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Manage Sponsor</strong>
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
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
                        <th scope="col">Sponsor Type</th>
                        <th scope="col">Img</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sponsors  as $key => $row)
                        <tr>
                            {{--                    <th scope="row">1</th>--}}

                            <td>{{ $row->name}}</td>
                            <td>{{ $row->company_name}}</td>
                            <td>{{ $row->email}}</td>
                            <td>{{ $row->website}}</td>
                            <td>{{ $row->sponsor_type}}</td>
                            <td> <img src="{{asset($row->img)}}" /></td>
                            <td>
{{--                                <a href="{{route('editSponsor',$row->id)}}" class="btn btn-success">--}}
{{--                                    <span class="glyphicon glyphicon-edit">Edit</span></a>--}}

{{--                                @if($row->status ==0)--}}
                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#modalLoginForm-{{$row->id}}" >
                                    <span class="glyphicon glyphicon-edit">Edit</span>
                                </a>
{{--                                @endif--}}

                                <a href="{{route('inactiveSponsor',$row->id)}}" class="btn btn-secondary" onclick="return confirm('Are You sure to Inactive this');">

                                    <span class="glyphicon glyphicon-trash">Inactive</span></a>

                            </td>
                        </tr>
                        @include('sponsor.edit_modal')
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

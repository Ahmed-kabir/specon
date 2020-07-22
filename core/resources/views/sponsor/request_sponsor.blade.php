@extends('admin.dashboard')
@section('main')
</br>
</br>
<div class="row justify-content-center" >








    <div class="col-lg-10">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Sponsor Request</strong>
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
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
{{--                            <td> <img src="{{asset($row->sponsor_img)}}" /></td>--}}
                            <td>


                                <a href="{{route('activatedSponsor',$row->id)}}" class="btn btn-primary" onclick="return confirm('Are You sure to Active this');">

                                    <span class="glyphicon glyphicon-trash">Active</span></a>

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

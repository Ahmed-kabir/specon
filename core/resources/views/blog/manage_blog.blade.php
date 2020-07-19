@extends('admin.dashboard')
@section('main')
</br>
</br>
<div class="row justify-content-center" >
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Blog List</strong>
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
{{--                        <th scope="col">SL</th>--}}
                        <th scope="col">Title</th>
                        <th scope="col">Short Desc</th>
                        <th scope="col">Long Desc</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blog  as $key => $row)
                        <tr>
                            {{--                    <th scope="row">1</th>--}}
{{--                            <td>{{ $blog->firstItem() + $key}}</td>--}}
                            <td>{{ $row->title}}</td>
                            <td>{{ $row->short_desc}}</td>
                            <td>{{ $row->long_desc}}</td>
                            <td> <img src="{{asset($row->img)}}" /></td>
                            <td><a href="{{route('editBlog',$row->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit">Edit</span></a>
                                <a href="{{route('inactiveBlog',$row->id)}}" class="btn btn-secondary" onclick="return confirm('Are You sure to Inactive this');">

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

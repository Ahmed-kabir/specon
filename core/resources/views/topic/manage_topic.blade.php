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
                        <th scope="col">Topic Name</th>

                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($topics  as $key => $row)
                        <tr>
                            {{--                    <th scope="row">1</th>--}}
                            <td>{{ $topics->firstItem() + $key}}</td>
                            <td>{{ $row->topic_name}}</td>

                            <td><a href="{{route('editTopic',$row->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit">Edit</span></a>
                                <a href="{{route('deleteTopic',$row->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure to Delete this');">

                                    <span class="glyphicon glyphicon-trash">Delete</span></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $topics->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

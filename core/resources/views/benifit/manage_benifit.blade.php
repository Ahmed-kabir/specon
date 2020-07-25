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
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($benifit  as $key => $row)
                        <tr>
                            {{--                    <th scope="row">1</th>--}}
                            {{--                            <td>{{ $blog->firstItem() + $key}}</td>--}}
                            <td>{{ $row->title}}</td>
                            <td>{{ $row->description}}</td>
                            <td><i class="{{ $row->img }}"></i></td>
                            <td>
                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#benifitModal-{{$row->id}}" >
                                    <span class="glyphicon glyphicon-edit">Edit</span>
                                </a>
                                <a href="{{route('deleteBenifit',$row->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure to Inactive this');">

                                    <span class="glyphicon glyphicon-trash">Delete</span></a>

                            </td>
                        </tr>
                        @include('benifit.edit_benifit')
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('#icon').iconpicker();
    </script>
@endpush

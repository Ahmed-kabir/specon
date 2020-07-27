@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3> <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#topicForm">Add Topic</a></h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Topic List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Topic name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($topics  as $key => $row)
                                        <tr>
                                            <td>{{ $topics->firstItem() + $key}}</td>

                                            <td>{{ $row->topic_name}}</td>


                                            <td>


                                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#modalLoginForm1-{{$row->id}}" >
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{route('deleteTopic',$row->id)}}" class="btn btn-danger">

                                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                            </td>
                                        </tr>
                                        @include('topic.edit_topic_modal')
                                    @endforeach
                                </table>

                            </div>
                            <div class="pagination">
                                {{ $topics->links() }}
                            </div>


                            <div class="modal fade" id="topicForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{route('saveTopic')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Add Topic</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Topic Name</label>
                                                <input type="text" id="topic_name-email" class="form-control validate" name="topic_name" required>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn btn-primary">save</button>
                                                </div>
                                            </div>


                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection

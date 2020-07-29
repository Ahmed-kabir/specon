@extends('admin.dashboard1')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3><a href="{{route('addSpeaker')}}" class="btn btn-info" role="button">Add Speaker</a></h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Speaker List</li>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Experties</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($speaker  as $key => $row)
                                        <tr>
                                            <td>{{ $speaker->firstItem() + $key}}</td>
                                            <td><img src="{{asset('assets/speakerImage/'.$row->speaker_img)}}"
                                                     class="img-thumbnail" alt="User Image"></td>
                                            <td>{{ $row->speaker_name}}</td>
                                            <td>{{ $row->experties}}</td>
                                            <td>{{ $row->description}}</td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{route('editSpeaker',$row->id)}}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                <a href="{{route('inactiveSpeaker',$row->id)}}" class="btn btn-danger btn-sm">

                                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <div class="pagination">
                                {{ $speaker->links() }}
                            </div>


                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection

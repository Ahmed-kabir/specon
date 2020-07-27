@extends('admin.dashboard1')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3><a href="{{route('sponsorRequest')}}" class="btn btn-info" role="button">Sponsor Request</a></h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Ticket List</li>
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
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Sponsor Type</th>
                                        <th>Sponsor Img</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($sponsors  as $key => $row)
                                        <tr>
                                            <td>{{ $sponsors->firstItem() + $key}}</td>
                                            <td>{{ $row->name}}</td>
                                            <td>{{ $row->company_name}}</td>
                                            <td>{{ $row->email}}</td>
                                            <td>{{ $row->website}}</td>
                                            <td>{{ $row->sponsorType->sponsor_name}}</td>
                                            <td> <img src="{{asset($row->img)}}" /></td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{route('editSponsor',$row->id)}}" class="btn btn-success btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                    <a href="{{route('inactiveSponsor',$row->id)}}" class="btn btn-danger btn-sm">

                                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="pagination">
                                    {{ $sponsors->links() }}
                                </div>
                            </div>



                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection
@push('img')
    <style>
        img {

            height:130px;
            width: 125px;
        }
    </style>

@endpush

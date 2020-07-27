@extends('admin.dashboard1')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3><a href="{{route('addTicket')}}" class="btn btn-info" role="button">Add Ticket</a></h3>

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
                                        <th>Tickt Img</th>
                                        <th>Ticket Type</th>
                                        <th>Ticket Price</th>
                                        <th>Description</th>
                                        <th>Ticket Qty</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($ticket  as $key => $row)
                                        <tr>
                                            <td>{{ $ticket->firstItem() + $key}}</td>
                                            <td><img src="{{asset('assets/ticketImage/'.$row->tkt_img)}}"
                                                     class="img-thumbnail" alt="User Image"></td>
                                            <td>{{ $row->tkt_typ}}</td>
                                            <td>${{ $row->tkt_price}}</td>
                                            <td>{{ $row->tkt_desc}}</td>
                                            <td>{{ $row->tkt_qty}}</td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{route('editTicket',$row->id)}}" class="btn btn-success btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                    <a href="{{route('inactiveTicket',$row->id)}}" class="btn btn-danger btn-sm">

                                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <div class="pagination">
                                {{ $ticket->links() }}
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

            height:150px;
            width: 155px;
        }
    </style>

@endpush

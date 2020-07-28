@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="{{route('addSpeaker')}}" class="btn btn-info" role="button">Add Speaker</a></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Speaker Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!-- <div class="card card-success"> -->
                    {{--              <div class="card-header text-center">--}}
                    {{--                <h3>Speaker</h3>--}}
                    {{--              </div>--}}
                    <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('updateTicket',$editTicketById->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Ticket Category</label>
                                    <input type="text" class="form-control" id="tkt_typ" name="tkt_typ"
                                           value="{{$editTicketById->tkt_typ}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Ticket Price</label>
                                    <input type="text" class="form-control" id="tkt_price" name="tkt_price"
                                           value="{{$editTicketById->tkt_price}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Ticket Qty</label>
                                    <input type="text" class="form-control" id="tkt_qty" name="tkt_qty"
                                           value="{{$editTicketById->tkt_qty}}">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="6" name="tkt_desc"
                                              id="tkt_desc">{{$editTicketById->tkt_desc}}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="pl-5"><label class="align-top">Image</label></div>

                                    <img class="img-fluid img-thumbnail ml-3" src="{{asset('assets/ticketImage/'.$editTicketById->tkt_img)}}"
                                         alt="{{asset('assets/ticketImage/'.$editTicketById->tkt_img)}}">
                                    <div class="col-sm-3"><input type="file" class="form-control" id="img" name="img"></div>

                                    <small class="help-block form-text">Please Select 806*710 Image</small>
                                </div>



{{--                                <div class="form-group col-md-6">--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="col">--}}
{{--                                            <label for="">Image: </label>--}}
{{--                                            <input type="file" name="tkt_img" class="form-control d-block align-bottom" >--}}
{{--                                            <small class="help-block form-text">Please Select 193*175 Image</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="col py-3">--}}
{{--                                            <div class="pl-5">--}}
{{--                                                <label for="" class="align-top">Current Image : </label>--}}
{{--                                                <img src="{{asset('assets/ticketImage/'.$editTicketById->tkt_img)}}"--}}
{{--                                                     alt="buyticket" class="img-fluid w-75 img-thumbnail ">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>


                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>

                            </div>
                        </form>


                    </div>


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('img')
    <style>
        img {

            height:160px;
            width: 160px;
        }
    </style>

@endpush

@extends('admin.dashboard1')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><a href="{{route('manageTicket')}}" class="btn btn-info" role="button">Manage Ticket</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Home</a></li>
                            <li class="breadcrumb-item active">Ticket Add Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!-- <div class="card card-success"> -->
                        <!-- <div class="card-header text-center">
                          <h3>Speaker</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('saveTicket')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Ticket Category</label>
                                    <input type="text" class="form-control" id="tkt_typ" name="tkt_typ"
                                           placeholder="Ticket Category" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ticket Price</label>
                                    <input type="text" class="form-control" id="tkt_price" name="tkt_price"
                                           placeholder="Ticket Price" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" name="tkt_desc"
                                                id="tkt_desc"></textarea>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Ticket Qty</label>
                                    <input type="text" class="form-control" id="tkt_qty" name="tkt_qty"
                                           placeholder="Ticket Qty" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ticket Img</label>
                                    <input type="file" class="form-control" id="tkt_img" name="tkt_img">
                                    <small class="help-block form-text">Please Select 193*175 Image</small>
                                </div>
                            </div>

                            <div class=" text-center">
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

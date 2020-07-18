@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Speaker Add Form</strong>
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body card-block">
                    <form action="{{route('updateTicket',$editTicketById->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ticket Type</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="tkt_typ" name="text-input" placeholder="Speaker Name" value="{{$editTicketById->tkt_typ}}" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label"> Ticket Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="tkt_price" name="text-input" placeholder="Speaker Name" value="{{$editTicketById->tkt_price}}" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="tkt_desc" id="textarea-input" rows="9"  class="form-control">{{$editTicketById->tkt_desc}}</textarea></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label"> Ticket Qty</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="tkt_qty" name="text-input" placeholder="Speaker Name" value="{{$editTicketById->tkt_qty}}" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <th> <img src="{{asset($editTicketById->tkt_img)}}"alt="{{$editTicketById->tkt_img}}"width="200" height="200"> </th>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="tkt_img" class="form-control-file"><small class="form-text text-muted">Max 1MB</small></div>

                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Schedule Add Form</strong>
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                    <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
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
                    <form action="{{route('saveTicket')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Ticket Type</label></div>
                            <div class="col-12 col-md-9">
                                <select name="tkt_typ" id="" class="form-control-sm form-control">
                                    <option value="Personal">Personal</option>
                                    <option value="Business">Business</option>
                                    <option value="Golden Pack">Golden Pack</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ticket Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="tkt_price" name="text-input" placeholder="Ticket Price" class="form-control"></div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="tkt_desc" id="textarea-input" rows="9" placeholder="About Ticket..." class="form-control"></textarea></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ticket Qty</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="tkt_qty" name="text-input"  class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ticket Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="tkt_img" class="form-control-file"><small class="form-text text-muted">Max 1MB</small></div>

                        </div>


                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block">Save Info</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

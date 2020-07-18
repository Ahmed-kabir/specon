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
                    <form action="{{route('saveSponsor')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Type</label></div>
                            <div class="col-12 col-md-9">
                                <select name="sponsor_type" id="SelectLm" class="form-control-sm form-control">
                                    <option value="Diamond Sponsors">Diamond Sponsors</option>
                                    <option value="Platinum Sponsors">Platinum Sponsors</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sponsor Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="sponsor_title" name="text-input" placeholder="Sponsor Title" class="form-control"></div>
                        </div>




                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Sponsor Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="sponsor_img" class="form-control-file"><small class="form-text text-muted">Max 1MB</small></div>

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

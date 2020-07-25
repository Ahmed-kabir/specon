@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Manage Banner</strong>
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
                    <form action="{{route('updateOverviewImg',$overviewImg->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf




                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Overview Image</label></div>
                            <th> <img src="{{asset($overviewImg->img)}}"alt="{{$overviewImg->img}}"width="200" height="200"> </th>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="img" class="form-control-file"><small class="form-text text-muted">Max 1MB</small></div>

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

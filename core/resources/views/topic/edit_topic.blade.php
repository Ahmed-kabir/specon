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
                    <form action="{{route('updateTopic',$topic->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Speaker Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="topic_name" name="text-input" placeholder="Speaker Name" value="{{$topic->topic_name}}" class="form-control"></div>
                        </div>


                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

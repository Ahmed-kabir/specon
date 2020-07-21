@extends('admin.dashboard')
@section('main')
    <div class="row justify-content-center" >
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Topic Add Form</strong>
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
                    <form action="{{route('saveTopic')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Topic Name</label></div>
                            <div class="col-12 col-md-9">
                                <div class="col-12 col-md-9"><input type="text" name="topic_name" name="text-input"  class="form-control"></div>
                            </div>
                        </div>



                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-large">Save Topic</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

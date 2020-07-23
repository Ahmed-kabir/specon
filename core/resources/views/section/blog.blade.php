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
                    <form action="{{route('updateBlogTitle1',$blog1->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9">

                                <input type="text" class="form-control" name="title" value="{{$blog1['title']}}">

                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="5" class="form-control">{{$blog1['description']}}</textarea></div>
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

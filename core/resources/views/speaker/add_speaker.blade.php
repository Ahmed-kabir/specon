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
            <form action="{{route('saveSpeaker')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Speaker Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" name="speaker_name" name="text-input" placeholder="Speaker Name" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Expertise</label></div>
                    <div class="col-12 col-md-9">
                        <select name="experties" id="SelectLm" class="form-control-sm form-control">

                            <option value="Wordpress Development">Wordpress Development</option>
                            <option value="FrontEnd Development">FrontEnd Development</option>
                            <option value="Java Development">Java Development</option>
                            <option value="Android Development">Android Development</option>
                            <option value="Laravel Development">Laravel Development</option>
                            <option value="Ios Development">Ios Development</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="About Speaker..." class="form-control"></textarea></div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="speaker_img" class="form-control-file"><small class="form-text text-muted">Max 1MB</small></div>

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

<div class="modal fade" id="modalLoginForm1-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('updateSponsorCategory',$row->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sponsor Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Sponsor Name</label>
                        <input type="text" id="sponsor_name" name="sponsor_name" class="form-control validate" value="{{$row->sponsor_name}}" required>

                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>



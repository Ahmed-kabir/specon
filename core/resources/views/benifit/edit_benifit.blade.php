<div class="modal fade" id="benifitModal-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Active Sponsor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('updateBenifit',$row->id)}}" method="POST"
                  class="form-horizontal">
                @csrf
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class=" prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Title</label>
                        <input type="text" id="title" name="title" class="form-control validate" value="{{$row->title}}">

                        <i class=" prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Description</label>
                        <input type="text" id="description" name="description" class="form-control validate"
                               value="{{$row->description}}">


                        <div role="iconpicker" data-iconset="fontawesome4" data-iconset-version="4.7.0"
                             data-arrow-prev-icon-class="fa fa-angle-left"
                             data-arrow-next-icon-class="fa fa-angle-right"></div>

                        <label data-error="wrong" data-success="right" for="defaultForm-email">Icon Name</label>
                            <div class="form-control text-center">
                                <input type="text" name="img">
                            </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


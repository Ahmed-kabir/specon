

<div class="modal fade" id="modalLoginForm-{{$row->id}}"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Active Sponsor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('updateSponsor',$row->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                    <input type="text" id="name" name="name" class="form-control validate" value="{{$row->name}}">

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Company Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control validate" value="{{$row->company_name}}">

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                    <input type="text" id="email" name="email" class="form-control validate" value="{{$row->email}}">

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Website</label>
                    <input type="text" id="website" name="website" class="form-control validate" value="{{$row->website}}">

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Sponsor Type</label>
                    <select name="sponsor_id" id="sponsor_id" class="form-control">
                    <option value="1">Silver</option>
                    <option value="2">golden</option>
                    <option value="3">platinum</option>
                    <option value="4">media</option>
                    <option value="5">diamond</option>
                    </select>

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Select Status</label>
                    <select name="status" id="select" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>

                    </select>

                    <i class=" prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Upload Image</label>
                    <input type="file" id="img" name="img" class="form-control validate" >

                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-success" type="submit" >Update</button>
                    </div>

                </div>

            </div>

            </form>
        </div>
    </div>
</div>


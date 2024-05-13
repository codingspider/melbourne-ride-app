<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Course </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('update.course',['id'=>$course->id])}}" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 mb-3">
                        <label for="inputNanme4" class="form-label">Course Name <span class="text-danger">*</span></label>
                        <input type="text" name="crs_name" class="form-control" id="inputNanme4" placeholder="Course Name" value="{{$course->crs_name}}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputEmail4" class="form-label">Course Code <span class="text-danger">*</span></label>
                        <input type="text" name="crs_code" class="form-control" id="inputEmail4" placeholder="Course Code" value="{{$course->crs_code}}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputPassword4" class="form-label">Course Fee <span class="text-danger">*</span></label>
                        <input type="number" name="crs_fee" class="form-control" id="inputPassword4" placeholder="Course Fee" value="{{$course->crs_fee}}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Image <smal class="text-primary text-sm">(Optional)</smal></label>
                        <input type="file" name="crs_image" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Existing Image </label>
                        <br>
                        <img src="{{asset($course->crs_image)}}" alt="" class="img-fluid w-50">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="" class="form-select">
                            <option value="">Select</option>
                            <option value="1" @if($course->status == 1) selected @endif>Active</option>
                            <option value="0" @if($course->status == 0) selected @endif>Inactive</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Description <small class="text-primary">(optional)</small></label>
                        <textarea name="crs_description" id="" class="form-control"  cols="5" rows="2">{{$course->crs_description}}</textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>

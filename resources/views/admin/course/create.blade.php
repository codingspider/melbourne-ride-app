<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Course </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="row g-3" method="post" action="{{route('course.save')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="inputNanme4" class="form-label">Course Name <span class="text-danger">*</span></label>
                        <input type="text" name="crs_name" class="form-control" id="inputNanme4" placeholder="Course Name">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputEmail4" class="form-label">Course Code <span class="text-danger">*</span></label>
                        <input type="text" name="crs_code" class="form-control" id="inputEmail4" placeholder="Course Code">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputPassword4" class="form-label">Course Fee <span class="text-danger">*</span></label>
                        <input type="number" name="crs_fee" class="form-control" id="inputPassword4" placeholder="Course Fee">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Image <span class="text-primary">(Optional)</span></label>
                        <input type="file" name="crs_image" class="form-control" id="inputAddress" >
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="" class="form-select">
                            <option value="">Select</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Description <small class="text-primary">(optional)</small></label>
                        <textarea name="crs_description" id="" class="form-control"  cols="5" rows="2"></textarea>
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

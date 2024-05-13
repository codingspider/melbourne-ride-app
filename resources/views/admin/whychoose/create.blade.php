<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Vehicle </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('whychoose.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="modal-body">


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Title <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="title" value="" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Description <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Photos </label>
                    <div class="col-sm-12">
                        <input type="file" name="photos" class="form-control" multiple id="">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Status <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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
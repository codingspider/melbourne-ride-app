<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Amenitie Update </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('amenitie-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Cost <span class="text-danger">*</span></label>
                        <input type="number" min="0" name="cost" value="{{ $item->cost }}" class="form-control">
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Photo <span class="text-danger">*</span></label>
                        <input type="file" name="photo" class="form-control" required>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="validationCustom04" class="form-control" required>
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
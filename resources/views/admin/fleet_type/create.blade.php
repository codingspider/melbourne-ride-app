<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Transport Type </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('transport-type-store') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="name" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Description </label>
                    <div class="col-sm-12">
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
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
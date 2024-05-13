<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('sliders.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Title <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="title" value="{{ $item->title }}" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Description </label>
                    <div class="col-sm-12">
                        <textarea name="short_description" id="description" cols="30" rows="5"
                            class="form-control">{{ $item->short_description }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Status <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-12">
                        <select name="status" id="status" class="form-control">
                            <option {{ $item->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $item->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="file" name="image" id="" class="form-control">
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
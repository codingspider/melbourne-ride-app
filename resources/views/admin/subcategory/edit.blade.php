<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Tag </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('subcategory-update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span> </label>
                    <div class="col-sm-12">
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Category<span class="text-danger">*</span> </label>
                    <div class="col-sm-12">
                        <select name="category_id" id="" class="form-control">
                            @foreach($categories as $category)
                            <option {{ $category->id == $item->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Status <span class="text-danger">*</span> </label>
                    <div class="col-sm-12">
                        <select name="status" id="" class="form-control">
                            <option value="0">Publish</option>
                            <option value="1">Draft</option>
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
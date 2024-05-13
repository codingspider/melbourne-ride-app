<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('service-update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Name <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
                    </div>
                </div>
                @if($item->id == 1 || $item->id == 2)
                
                @endif
                
                @if($item->id == 4)
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Hour Rate</label>
                    <div class="col-sm-12">
                        <input type="text" name="base_fare" value="{{ $item->base_fare}}" class="form-control">
                    </div>
                </div>
                @endif

                @if($item->id == 3)
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">1-10 (KM) </label>
                    <div class="col-sm-12">
                        <input type="text" name="fare_1" value="{{ $item->fare_1 }}" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">11-20 (KM) </label>
                    <div class="col-sm-12">
                        <input type="text" name="fare_2" value="{{ $item->fare_2 }}" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">21-30 (KM) </label>
                    <div class="col-sm-12">
                        <input type="text" name="fare_3" value="{{ $item->fare_3 }}" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">31 - 500 (KM) </label>
                    <div class="col-sm-12">
                        <input type="text" name="fare_4" value="{{ $item->fare_4 }}" class="form-control">
                    </div>
                </div>
                @endif 

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Description </label>
                    <div class="col-sm-12">
                        <textarea name="description" id="description" cols="30" rows="5"
                            class="form-control">{{ $item->description }}</textarea>
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>
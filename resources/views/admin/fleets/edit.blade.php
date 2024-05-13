<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Fleet </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('fleets.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Service <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="service_id" id="service_id" class="form-control">
                        @foreach($services as $service)
                        <option {{ $item->service_id == $service->id ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3" style="display:none" id="tour">
                    <label for="inputText" class="col-sm-6 col-form-label">Tour <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="tour_id" id="tour_id" class="form-control">
                        @foreach(allPrivateTours() as $key => $type)
                        <option {{ $key == $item->tour_id ? "selected" : "" }} value="{{ $key }}">{{ $type }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Price <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="price" value="{{ $item->price }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Persons <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" name="passanger" class="form-control" required value="{{ $item->passanger }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Luggage <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" name="luggage" class="form-control" required value="{{ $item->luggage}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Hand Bags </label>
                    <div class="col-sm-12">
                        <input type="number" name="hand_bag" class="form-control" value="{{ $item->hand_bag}}">
                    </div>
                </div>
        
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Photos </label>
                    <div class="col-sm-12">
                        <input type="file" name="photos[]" class="form-control" multiple id="">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Status <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="status" id="status" class="form-control">
                            <option {{ $item->status == 1 ? "selected" : '' }} value="1">Active</option>
                            <option {{ $item->status == 0 ? "selected" : '' }} value="0">Inactive</option>
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
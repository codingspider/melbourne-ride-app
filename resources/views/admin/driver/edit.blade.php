<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Driver </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('driver-update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->user->id }}">
            <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label  class="form-label">Driver License Number </label>
                        <input type="text" name="license_number" value="{{ $item->license_number }}" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control">
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" value="{{ $item->user->username }}" class="form-control">
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" name="email" value="{{ $item->user->email }}" class="form-control">
                    </div>
                    

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="number" name="phone" value="{{ $item->phone}}" min="0" class="form-control" id="validationCustom01"
                            value="" required="">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Address </label>
                        <input type="text" name="address" value="{{ $item->address }}" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="type" class="form-label">Service<span class="text-danger">*</span></label>
                        <select name="service_id" id='validationCustom04' class="form-control" required>
                            <option value>Select Service </option>
                            @foreach($services as $service)
                            <option {{ $item->service_id == $service->id ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" id="validationCustom04" class="form-control" required>
                            <option {{ $item->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                            <option {{ $item->status == 1 ? 'selected' : '' }} value="1">Active</option>
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
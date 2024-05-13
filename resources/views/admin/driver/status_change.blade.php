<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Driver Action </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form class="row g-3" novalidate="" action="{{ route('driver-status-store') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label  class="form-label">Driver License Number </label>
                        <input type="text" name="license_number" value="{{ $driver->license_number}}" readonly class="form-control">
                        <input type="hidden" name="id" value="{{ $driver->id }}">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">First Name </label>
                        <input type="text" name="name" class="form-control" value="{{ $driver->name}}" readonly>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Phone Number </label>
                        <input type="number" name="phone" min="0" readonly class="form-control" value="{{ $driver->phone_number}}" id="validationCustom01"
                            value="" required="">
                    </div>
               
                    <div class="col-sm-6 mb-3">
                        <label for="status" class="form-label">Status <span>*</span></label>
                        <select name="status" id="validationCustom04" class="form-control" required>
                            <option {{ $driver->status == 0 ? 'selected' : '' }} value="0">Unverified</option>
                            <option {{ $driver->status == 1 ? 'selected' : '' }} value="1">Verified</option>
                            <option {{ $driver->status == 2 ? 'selected' : '' }} value="2">Ban</option>
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
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Coupon </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('coupon-update', $item->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Code <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="code" value="{{ $item->code }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Discount <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="discount" value="{{ $item->discount }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Type <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="type" id="" class="form-control">
                            <option {{ $item->type == "percentage" ? "selected" : "" }} value="percentage">Percentage</option>
                            <option {{ $item->type == "fixed" ? "selected" : "" }} value="fixed">Fixed</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Limit <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="limit" value="{{ $item->limit }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Minimum Order Amount  <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="min_amount" value="{{ $item->min_amount }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Expire At <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="date" name="expires_at" value="{{ $item->expires_at }}" class="form-control" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Coupon Active Date  <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="date" name="from_date" value="{{ $item->from_date }}" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Status <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="status" id="" class="form-control">
                            <option {{ $item->status == 1? 'selected' : ''}} value="1">Active</option>
                            <option {{ $item->status == 0? 'selected' : ''}} value="0">Inactive</option>
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
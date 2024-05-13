<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Coupon </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('coupon-store') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Code <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="code" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Discount <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="discount" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Type <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="type" id="" class="form-control">
                            <option value="percentage">Percentage</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Limit <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="limit" value="" class="form-control" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Minimum Order Amount <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="0" name="min_amount" value="" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Expire At <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="date" name="expires_at" value="" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Coupon Active Date <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="date" name="from_date" value="" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Status <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="status" id="" class="form-control">
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
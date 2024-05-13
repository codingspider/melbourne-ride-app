<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New customer </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form class="row g-3" novalidate="" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">First Name <span>*</span></label>
                        <input type="text" name="first_name" class="form-control">
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Last Name <span>*</span></label>
                        <input type="text" name="last_name" class="form-control">
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Email <span>*</span></label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Password <span>*</span></label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Confirm Password <span>*</span></label>
                        <input type="password" name="confirm-password" class="form-control">
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Profile Photo </label>
                        <input type="file" name="profile_photo" class="form-control">
                        <div class="gallery mt-2"></div>
                    </div>
                   
                    <div class="col-sm-6 mb-3">
                        <label for="status" class="form-label">Status <span>*</span></label>
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

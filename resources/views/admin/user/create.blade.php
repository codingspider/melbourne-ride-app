<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create User </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user-store') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">First Name <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="first_name" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Last Name <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="last_name" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="email" value="" class="form-control" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Phone <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="phone" value="" class="form-control" required>
                    </div>
                </div>
                

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Password <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="password" name="password" value="" class="form-control" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="password" name="confirm-password" value="" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-6 col-form-label">Role <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                    <select class="form-select" name="roles[]" multiple aria-label="multiple select example">
                        
                        @foreach($roles as $role)
                            @unless ( (in_array('Admin', [$role->name, strtolower($role->name)]) || in_array('Super Admin', [$role->name, strtolower($role->name)]) || in_array('Super admin', [$role->name, strtolower($role->name)]) || in_array('super admin', [$role->name, strtolower($role->name)]) || in_array('admin', [$role->name, strtolower($role->name)])))
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endunless
                        @endforeach
                    </select>

                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">User Type <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="user_type" class="form-control" id="" required>
                            <option value="">Select User Type </option>
                            <option value="0">Admin</option>
                            <option value="2">Customer</option>
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
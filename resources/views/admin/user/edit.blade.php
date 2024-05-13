<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user-update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">First Name </label>
                    <div class="col-sm-12">
                        <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Last Name </label>
                    <div class="col-sm-12">
                        <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-12">
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Phone </label>
                    <div class="col-sm-12">
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                    </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Role </label>
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
                            <option {{ $user->user_type == 0 ? 'selected' : '' }} value="0">Admin</option>
                            <option {{ $user->user_type == 2 ? 'selected' : '' }} value="2">Customer</option>
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
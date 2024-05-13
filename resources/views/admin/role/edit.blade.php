<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Role </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('role-update') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name </label>
                  <div class="col-sm-12">
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                    <input type="hidden" name="role_id" value="{{ $role->id }}">
                  </div>
                </div>

                <div class="row mb-3">
                  
                  <div class="col-sm-12">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>View </th>
                            <th>Create</th>
                            <th>Edit </th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><input type="checkbox" name="permissions[]" value="role-list" class="form-check-input" @if(in_array('role-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="role-create" class="form-check-input" @if(in_array('role-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="role-edit" class="form-check-input" @if(in_array('role-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="role-delete" class="form-check-input" @if(in_array('role-delete', $role_permissions)) checked @endif></td>
                        </tr>
                       
                        <tr>
                            <td>User</td>
                            <td><input type="checkbox" name="permissions[]" value="user-list" class="form-check-input" @if(in_array('user-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="user-create" class="form-check-input" @if(in_array('user-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="user-edit" class="form-check-input" @if(in_array('user-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="user-delete" class="form-check-input" @if(in_array('user-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Service</td>
                            <td><input type="checkbox" name="permissions[]" value="service-list" class="form-check-input" @if(in_array('service-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="service-create" class="form-check-input" @if(in_array('service-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="service-edit" class="form-check-input" @if(in_array('service-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="service-delete" class="form-check-input" @if(in_array('service-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Transport</td>
                            <td><input type="checkbox" name="permissions[]" value="transport-list" class="form-check-input" @if(in_array('transport-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="transport-create" class="form-check-input" @if(in_array('transport-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="transport-edit" class="form-check-input" @if(in_array('transport-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="transport-delete" class="form-check-input" @if(in_array('transport-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Driver</td>
                            <td><input type="checkbox" name="permissions[]" value="driver-list" class="form-check-input" @if(in_array('driver-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="driver-create" class="form-check-input" @if(in_array('driver-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="driver-edit" class="form-check-input" @if(in_array('driver-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="driver-delete" class="form-check-input" @if(in_array('driver-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Aminitie</td>
                            <td><input type="checkbox" name="permissions[]" value="amenitie-list" class="form-check-input" @if(in_array('amenitie-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="amenitie-create" class="form-check-input" @if(in_array('amenitie-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="amenitie-edit" class="form-check-input" @if(in_array('amenitie-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="amenitie-delete" class="form-check-input" @if(in_array('amenitie-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Category</td>
                            <td><input type="checkbox" name="permissions[]" value="category-list" class="form-check-input" @if(in_array('category-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="category-create" class="form-check-input" @if(in_array('category-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="category-edit" class="form-check-input" @if(in_array('category-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="category-delete" class="form-check-input" @if(in_array('category-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Cubcategory</td>
                            <td><input type="checkbox" name="permissions[]" value="subcategory-list" class="form-check-input" @if(in_array('subcategory-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="subcategory-create" class="form-check-input" @if(in_array('subcategory-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="subcategory-edit" class="form-check-input" @if(in_array('subcategory-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="subcategory-delete" class="form-check-input" @if(in_array('subcategory-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Tag</td>
                            <td><input type="checkbox" name="permissions[]" value="tag-list" class="form-check-input" @if(in_array('tag-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="tag-create" class="form-check-input" @if(in_array('tag-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="tag-edit" class="form-check-input" @if(in_array('tag-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="tag-delete" class="form-check-input" @if(in_array('tag-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        <tr>
                            <td>Post</td>
                            <td><input type="checkbox" name="permissions[]" value="post-list" class="form-check-input" @if(in_array('post-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="post-create" class="form-check-input" @if(in_array('post-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="post-edit" class="form-check-input" @if(in_array('post-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="post-delete" class="form-check-input" @if(in_array('post-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        <tr>
                            <td>Setting</td>
                            <td><input type="checkbox" name="permissions[]" value="setting-list" class="form-check-input" @if(in_array('setting-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="setting-create" class="form-check-input" @if(in_array('setting-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="setting-edit" class="form-check-input" @if(in_array('setting-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="setting-delete" class="form-check-input" @if(in_array('setting-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Customer</td>
                            <td><input type="checkbox" name="permissions[]" value="customer-list" class="form-check-input" @if(in_array('customer-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="customer-create" class="form-check-input" @if(in_array('customer-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="customer-edit" class="form-check-input" @if(in_array('customer-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="customer-delete" class="form-check-input" @if(in_array('customer-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td>Taxi Booking </td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-list" class="form-check-input" @if(in_array('taxi-booking-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-create" class="form-check-input" @if(in_array('taxi-booking-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-edit" class="form-check-input" @if(in_array('taxi-booking-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-delete" class="form-check-input" @if(in_array('taxi-booking-delete', $role_permissions)) checked @endif></td>
                        </tr>
                       
                        <tr>
                            <td> Coupon </td>
                            <td><input type="checkbox" name="permissions[]" value="coupon-list" class="form-check-input" @if(in_array('coupon-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="coupon-create" class="form-check-input" @if(in_array('coupon-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="coupon-edit" class="form-check-input" @if(in_array('coupon-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="coupon-delete" class="form-check-input" @if(in_array('coupon-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td> Fare </td>
                            <td><input type="checkbox" name="permissions[]" value="fare-list" class="form-check-input" @if(in_array('fare-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="fare-create" class="form-check-input" @if(in_array('fare-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="fare-edit" class="form-check-input" @if(in_array('fare-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="fare-delete" class="form-check-input" @if(in_array('fare-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td> Booking Approve </td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-approve-list" class="form-check-input" @if(in_array('taxi-booking-approve-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-approve-create" class="form-check-input" @if(in_array('taxi-booking-approve-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-approve-edit" class="form-check-input" @if(in_array('taxi-booking-approve-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="taxi-booking-approve-delete" class="form-check-input" @if(in_array('taxi-booking-approve-delete', $role_permissions)) checked @endif></td>
                        </tr>
                        
                        <tr>
                            <td> Review </td>
                            <td><input type="checkbox" name="permissions[]" value="review-list" class="form-check-input" @if(in_array('review-list', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="review-create" class="form-check-input" @if(in_array('review-create', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="review-edit" class="form-check-input" @if(in_array('review-edit', $role_permissions)) checked @endif></td>
                            <td><input type="checkbox" name="permissions[]" value="review-delete" class="form-check-input" @if(in_array('review-delete', $role_permissions)) checked @endif></td>
                        </tr>

                    </table>
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
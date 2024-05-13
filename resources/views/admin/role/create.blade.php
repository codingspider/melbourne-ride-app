<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Role </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('role-store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Name <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control">
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
                                <td><input type="checkbox" name="permission[]" value="role-list"></td>
                                <td><input type="checkbox" name="permission[]" value="role-create"></td>
                                <td><input type="checkbox" name="permission[]" value="role-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="role-delete"></td>
                            </tr>

                            <tr>
                                <td>User</td>
                                <td><input type="checkbox" name="permission[]" value="user-list"></td>
                                <td><input type="checkbox" name="permission[]" value="user-create"></td>
                                <td><input type="checkbox" name="permission[]" value="user-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="user-delete"></td>
                            </tr>
                            <tr>
                                <td>Service</td>
                                <td><input type="checkbox" name="permission[]" value="service-list"></td>
                                <td><input type="checkbox" name="permission[]" value="service-create"></td>
                                <td><input type="checkbox" name="permission[]" value="service-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="service-delete"></td>
                            </tr>
                            <tr>
                                <td>Transport</td>
                                <td><input type="checkbox" name="permission[]" value="transport-list"></td>
                                <td><input type="checkbox" name="permission[]" value="transport-create"></td>
                                <td><input type="checkbox" name="permission[]" value="transport-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="transport-delete"></td>
                            </tr>

                            <tr>
                                <td>Driver</td>
                                <td><input type="checkbox" name="permission[]" value="driver-list"></td>
                                <td><input type="checkbox" name="permission[]" value="driver-create"></td>
                                <td><input type="checkbox" name="permission[]" value="driver-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="driver-delete"></td>
                            </tr>

                            <tr>
                                <td>Aminitie</td>
                                <td><input type="checkbox" name="permission[]" value="amenitie-list"></td>
                                <td><input type="checkbox" name="permission[]" value="amenitie-create"></td>
                                <td><input type="checkbox" name="permission[]" value="amenitie-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="amenitie-delete"></td>
                            </tr>

                            <tr>
                                <td>Category</td>
                                <td><input type="checkbox" name="permission[]" value="category-list"></td>
                                <td><input type="checkbox" name="permission[]" value="category-create"></td>
                                <td><input type="checkbox" name="permission[]" value="category-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="category-delete"></td>
                            </tr>

                            <tr>
                                <td>SubCategory</td>
                                <td><input type="checkbox" name="permission[]" value="subcategory-list"></td>
                                <td><input type="checkbox" name="permission[]" value="subcategory-create"></td>
                                <td><input type="checkbox" name="permission[]" value="subcategory-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="subcategory-delete"></td>
                            </tr>

                            <tr>
                                <td>Tag</td>
                                <td><input type="checkbox" name="permission[]" value="tag-list"></td>
                                <td><input type="checkbox" name="permission[]" value="tag-create"></td>
                                <td><input type="checkbox" name="permission[]" value="tag-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="tag-delete"></td>
                            </tr>

                            <tr>
                                <td>Post</td>
                                <td><input type="checkbox" name="permission[]" value="post-list"></td>
                                <td><input type="checkbox" name="permission[]" value="post-create"></td>
                                <td><input type="checkbox" name="permission[]" value="post-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="post-delete"></td>
                            </tr>
                            <tr>
                                <td>Setting</td>
                                <td><input type="checkbox" name="permission[]" value="setting-list"></td>
                                <td><input type="checkbox" name="permission[]" value="setting-create"></td>
                                <td><input type="checkbox" name="permission[]" value="setting-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="setting-delete"></td>
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td><input type="checkbox" name="permission[]" value="customer-list"></td>
                                <td><input type="checkbox" name="permission[]" value="customer-create"></td>
                                <td><input type="checkbox" name="permission[]" value="customer-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="customer-delete"></td>
                            </tr>

                            <tr>
                                <td>Taxi Booking </td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-list"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-create"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-delete"></td>
                            </tr>
                            <tr>
                                <td> Fare </td>
                                <td><input type="checkbox" name="permission[]" value="fare-list"></td>
                                <td><input type="checkbox" name="permission[]" value="fare-create"></td>
                                <td><input type="checkbox" name="permission[]" value="fare-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="fare-delete"></td>
                            </tr>
                            <tr>
                                <td> Booking Approve  </td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-approve-list"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-approve-create"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-approve-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="taxi-booking-approve-delete"></td>
                            </tr>
                            
                            <tr>
                                <td> Review  </td>
                                <td><input type="checkbox" name="permission[]" value="review-list"></td>
                                <td><input type="checkbox" name="permission[]" value="review-create"></td>
                                <td><input type="checkbox" name="permission[]" value="review-edit"></td>
                                <td><input type="checkbox" name="permission[]" value="review-delete"></td>
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
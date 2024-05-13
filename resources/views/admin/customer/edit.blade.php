<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Customer </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">First Name <span>*</span></label>
                        <input type="text" name="first_name" class="form-control" value="{{$customer->first_name}}">
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Last Name<span>*</span></label>
                        <input type="text" name="last_name" class="form-control" id="validationCustom01"  value="{{$customer->last_name}}" required>
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Email <span>*</span></label>
                        <input type="text" name="email" class="form-control" value="{{$customer->email}}">
                    </div>
                    

                    <div class="col-sm-6 mb-3">
                        <label  class="form-label">Profile Photo </label>
                        <input type="file" name="profile_photo" class="form-control">
                        <div class="gallery mt-2">
                            <?php $image = $customer->profile_photo; ?>
                            @if (isset($image))
                                <img src='{{asset("/uploads") ."/". $image }}' alt="image" style="height: 60px; width: 60px; margin-bottom: 5px;">
                            @endif
                        </div>
                    </div>
                   
                    <div class="col-sm-6 mb-3">
                        <label for="status" class="form-label">Status <span>*</span></label>
                        <select name="status" id="validationCustom04" class="form-control" required>
                            <option value="1" {{ ($customer->status == 1) ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ ($customer->status == 0) ? 'selected' : '' }}>Inactive</option>
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
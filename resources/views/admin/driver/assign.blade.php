@extends('admin.layouts.app')
@section('title', 'Transport Assign')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transport Assign to Driver </h5>

                    <!-- General Form Elements -->
                    <form class="row g-3" action="{{ route('assign-transport-to-driver') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Transport Type <span class="text-danger">*</span> </label>
                                    <select name="transport_type_id" id="transport_type_id" class="form-control">
                                    <option value="">Select Transport Type </option>
                                    @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Driver <span class="text-danger">*</span></label>
                                    <select name="driver_id" id="driver_id" class="form-control">
                                    <option value="">Select Driver </option>
                                    @foreach($drivers as $driver)
                                    <option value="{{ $driver->id }}">{{ $driver->name }} </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label"> Vehicle Name <span class="text-danger">*</span> </label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label"> Registration Number <span class="text-danger">*</span> </label>
                                    <input type="text" name="register_no" class="form-control">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Engine Number <span class="text-danger">*</span></label>
                                    <input type="text" name="engine_no" class="form-control">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Chasis Number <span class="text-danger">*</span> </label>
                                    <input type="text" name="chasis_no" class="form-control">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Model Number <span class="text-danger">*</span> </label>
                                    <input type="text" name="model_no" class="form-control">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Seat Capacity <span class="text-danger">*</span> </label>
                                    <input type="number" name="seat_capacity" class="form-control">
                                </div>


                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Car Planumber <span class="text-danger">*</span></label>
                                    <input type="number" name="car_planumber" class="form-control"
                                        id="validationCustom01" value="">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Operation License </label>
                                    <input type="text" name="operating_license" class="form-control">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="status" class="form-label">Car Photos </label><br>
                                    <input type="file" name="car_photos[]" multiple class="form-control" id="">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="status" class="form-label">Driver Preferred Area</label>
                                    <textarea name="preferred_areas" id="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>



@endsection

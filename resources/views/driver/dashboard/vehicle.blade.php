@extends('admin.layouts.app')
@section('title', 'Post List')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Post Create </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <form action="{{ route('save-driver-vehicle-information') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="driver_id" value="{{ $user->id }}">
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Transport Type  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select name="transport_type_id" id="" class="form-control">
                                    <option value="">Select Transport Type </option>
                                    @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Vehicle Name  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                            <input type="text" name="name" value="{{ isset($vehicle) ? $vehicle->name : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Register Number  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="register_no" value="{{ isset($vehicle) ? $vehicle->register_no : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Engine Number  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="engine_no" value="{{ isset($vehicle) ? $vehicle->engine_no : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Chasis Number  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="chasis_no" value="{{ isset($vehicle) ? $vehicle->chasis_no : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Model Number  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="model_no" value="{{ isset($vehicle) ? $vehicle->model_no : '' }}" class="form-control">
                            </div>
                        </div>

                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Seat Capacity  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="seat_capacity" value="{{ isset($vehicle) ? $vehicle->seat_capacity : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Operating License  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="operating_license" value="{{ isset($vehicle) ? $vehicle->operating_license : '' }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-2 col-form-label"> Car Luggage  <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="car_luggage" value="{{ isset($vehicle) ? $vehicle->car_luggage : '' }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Car Images  </label>
                            <div class="col-sm-10">
                                <input type="file" name="car_photos[]" multiple class="form-control">
                            </div>
                        </div>
                     
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <a class="btn btn-danger" style="margin-right: 10px" href="{{ route('driver-dashboard') }}">Cancel </a>
                                <button class="btn btn-info" type="submit">Save  </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </form>
</section>

@endsection

@push('custom-script')

@endpush
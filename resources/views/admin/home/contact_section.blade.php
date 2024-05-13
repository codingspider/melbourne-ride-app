@extends('admin.layouts.app')
@section('title', 'Contact Page Data')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Contact Page Data</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-5 mt-5">
                                <form action="{{ route('save-contact-data') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Mobile Number One</label>
                                        <input type="text" class="form-control" name="mobile_1"
                                            value="{{ $data->mobile_1 ?? '' }}">
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Mobile Number Two</label>
                                        <input type="text" class="form-control" name="mobile_2"
                                            value="{{ $data->mobile_2 ?? '' }}">
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Mobile Number Three</label>
                                        <input type="text" class="form-control" name="mobile_3"
                                            value="{{ $data->mobile_3 ?? '' }}">
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $data->email ?? '' }}">
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $data->address ?? '' }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Other Info</label>
                                        <input type="text" class="form-control" name="other"
                                            value="{{ $data->other ?? '' }}">
                                    </div>

                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-info">Save </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div>
        </div>
    </section>
@endsection

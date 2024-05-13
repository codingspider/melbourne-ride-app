@extends('admin.layouts.app')
@section('title', 'Feature')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">
                    Feature </li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Update Feature</h5>

                                <form class="row g-3" method="post" action="{{ route('features.update', $feature->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="inputNanme4" class="form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" id="inputNanme4"
                                                value="{{ $feature->title }}" placeholder="Feature Title" required>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="inputAddress" class="form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" id="" class="form-select" required>
                                                <option value="">Select</option>
                                                <option {{ $feature->status == 1 ? 'selected' : '' }} value="1">Active
                                                </option>
                                                <option {{ $feature->status == 0 ? 'selected' : '' }} value="0">
                                                    Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-info" type="submit">Submit</button>
                                        <a href="{{ route('features.index') }}">
                                            <button class="btn btn-danger" type="button">Back</button>
                                        </a>
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

@push('custom-script')
    <script></script>
@endpush

@extends('admin.layouts.app')
@section('title', 'Package')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">
                    Package </li>
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
                                <h5 class="card-title">Package List </h5>

                                <form class="row g-3" method="post" action="{{ route('packages.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputAddress" class="form-label">Feature Title <span
                                                    class="text-danger">*</span></label>

                                            <select class="form-control" name="page_id" required>
                                                @foreach ($pages as $page)
                                                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="inputNanme4" class="form-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control form-control-sm"
                                                id="inputNanme4" placeholder="package Title" required>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="inputNanme4" class="form-label">Price <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="price" class="form-control form-control-sm"
                                                id="inputNanme4" placeholder="package Price" required>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="inputNanme4" class="form-label">Header Bg Color <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="bg_color" class="form-control form-control-sm"
                                                placeholder="Background Color" required>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Text Color </label>
                                            <input type="text" name="text_color" class="form-control form-control-sm"
                                                placeholder="Text Color" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="inputAddress" class="form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" id="" class="form-select" required>
                                                <option value="">Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="inputAddress" class="form-label">Feature Title <span
                                                    class="text-danger">*</span></label>

                                            <select class="form-control" name="features_id[]" multiple="multiple" required>
                                                @foreach ($feature as $model)
                                                    <option value="{{ $model->id }}">{{ $model->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-info" type="submit">Submit</button>
                                        <a href="{{ route('packages.index') }}">
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('select').select2({
            insertTag: function(data, tag) {
                // Insert the tag at the end of the results
                data.push(tag);
            }
        });
    </script>
@endpush

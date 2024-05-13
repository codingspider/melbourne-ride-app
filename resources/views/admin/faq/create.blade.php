@extends('admin.layouts.app')
@section('title', 'Faq')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">
                    Faq </li>
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
                                <h5 class="card-title">Faq </h5>

                                <form class="row g-3" method="post" action="{{ route('faq.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Select Menu
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="menu_id" id="" class="form-select" required>
                                                <option value="">Select Menu</option>
                                                @foreach ($menus as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu?->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <label for="" class="form-label">Title
                                                <span class="text-danger">*</span>
                                            </label>

                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter title" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="inputAddress" class="form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" id="" class="form-select" required>
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="inputNanme4" class="form-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="10">
                                            {{ old('description') }}
                                           </textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-info" type="submit">Submit</button>
                                        <a href="{{ route('faq.index') }}">
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

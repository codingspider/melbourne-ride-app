@extends('admin.layouts.app')
@section('title', 'Faqs Details')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"> Faqs Details</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter" style="padding-right: 25px;">
                                {{-- @can('category-create') --}}
                                <a href="{{ route('faq.create') }}" class="btn-sm btn btn-info "><i
                                        class="bi bi-file-plus-fill"></i> Add Faq</a>
                                {{-- @endcan --}}
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">
                                    Faq Details </h5>

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td> {{ $faq->id }}</th>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td> {{ $faq->title }}</th>
                                        </tr>
                                        <tr>
                                            <th>Page Name</th>
                                            <td> {{ $faq?->page?->title }}</th>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td> {{ $faq?->status == 1 ? 'Active' : 'Inactive' }}</th>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td> {!! $faq?->description !!}</th>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td> {!! Carbon\Carbon::parse($faq?->created_at)->format('d M Y h:i A') !!}</th>
                                        </tr>
                                        <tr>
                                            <th>Updated At</th>
                                            <td> {!! $faq?->created_at == $faq?->updated_at
                                                ? 'Not updated yet'
                                                : Carbon\Carbon::parse($faq?->updated_at)->format('d M Y h:i A') !!}</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('faq.index') }}">
                                    <button class="btn btn-primary">Back</button>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div>
        </div>
    </section>
@endsection

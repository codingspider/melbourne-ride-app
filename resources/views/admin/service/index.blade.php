@extends('admin.layouts.app')
@section('title', 'Service List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Service List </li>
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
                            <!-- @can('service-create')
                            <a href="{{ route('service-create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Service </a>
                            @endcan  -->
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Service List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Base Fare</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->base_fare }}</td>
                                        <td>
                                           {!! $item->statusBadgeData() !!}
                                        </td>
                                        <td>{{ $item->description }}</td>
                                       
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                         <div class="d-flex">
                                            @can('service-edit')
                                            <a href="{{ route('service-edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </div>
</section>
@endsection

@push('custom-script')
<script>
    @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
</script>
@endpush
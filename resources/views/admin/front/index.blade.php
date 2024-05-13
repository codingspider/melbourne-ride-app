@extends('admin.layouts.app')
@section('title', 'Fare List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Fare List </li>
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
                            @can('fare-create')
                            <a href="{{ route('fare-create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Fare </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Fare List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Base Fare </th>
                                        <th>Per KM Rate </th>
                                        <th>Per Minutes Rate </th>
                                        <th>Extra Charge </th>
                                        <th>Vat (%)</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->service->name  }}</td>
                                        <td>{{ $item->base_fare }}</td>
                                        <td>{{ $item->per_km_rate }}</td>
                                        <td>{{ $item->per_minute_rate }}</td>
                                        <td>{{ $item->extra_charge }}</td>
                                        <td>{{ $item->vat }}</td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                        <div class="d-flex">
                                            @can('fare-edit')
                                            <a href="{{ route('fare-edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('fare-delete')
                                            <form action="{{ route('fare-delete', $item->id) }}" method="post" class="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
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
@extends('admin.layouts.app')
@section('title', 'Vehicle List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Vehicle List </li>
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
                            @can('transport-create')
                            <a href="{{ route('vehicles.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Vehicle </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Vehicle List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Persons</th>
                                        <th>Luggage</th>
                                        <th>Hand Bag </th>
                                        <th>Wifi</th>
                                        <th>Movie</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->passanger }}</td>
                                        <td>{{ $item->luggage }}</td>
                                        <td>{{ $item->hand_bag }}</td>
                                        <td>{{ $item->wifi }}</td>
                                        <td>{{ $item->movie }}</td>
                                        <td> {!! $item->badgeData() !!} </td>
                                        <td>
                                            <div class="d-flex">
                                            @can('transport-edit')
                                            <a href="{{ route('vehicles.edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('transport-delete')
                                            <form action="{{ route('vehicles.destroy', $item->id) }}" method="post" class="delete-form">
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
$(document).on('change', '#service_id', function() {
    var selectedServiceId = $(this).val();

    if (selectedServiceId === '6') {
        $('#tour').show();
    }else {
        $('#tour').hide();
    }
});
</script>
@endpush
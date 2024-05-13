@extends('admin.layouts.app')
@section('title', 'Why Choose US')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Why Choose US </li>
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
                            <a href="{{ route('whychoose.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Vehicle </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Why Choose US </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ \Str::limit($item->description, 20, '...') }}</td>
                                        <td> {!! $item->badgeData() !!} </td>
                                        <td>
                                            <div class="d-flex">
                                            @can('transport-edit')
                                            <a href="{{ route('whychoose.edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('transport-delete')
                                            <form action="{{ route('whychoose.destroy', $item->id) }}" method="post" class="delete-form">
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
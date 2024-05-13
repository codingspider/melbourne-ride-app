@extends('admin.layouts.app')
@section('title', 'Coupon List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Coupon List </li>
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
                            @can('coupon-create')
                            <a href="{{ route('coupon-create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Coupon </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Coupon List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Discount</th>
                                        <th>Type</th>
                                        <th>Limit</th>
                                        <th>Min. Amount</th>
                                        <th>Expire Date </th>
                                        <th>Active Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->discount }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->limit }}</td>
                                        <td>{{ $item->min_amount }}</td>
                                        <td>{{ $item->expires_at }}</td>
                                        <td>{{ dateFormat($item->from_date) }}</td>
                                        <td>{!! $item->badgeData() !!}</td>
                                        <td>
                                        <div class="d-flex">
                                            @can('coupon-edit')
                                            <a href="{{ route('coupon-edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('coupon-delete')
                                            <form action="{{ route('coupon-delete', $item->id) }}" method="post" class="delete-form">
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
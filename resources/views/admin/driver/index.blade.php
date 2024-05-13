@extends('admin.layouts.app')
@section('title', 'Driver List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Driver List </li>
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
                            @can('driver-create')
                            <a href="{{ route('driver-create') }}" class="btn-sm btn btn-info btn_modal"><i
                                    class="bi bi-file-plus-fill"></i> Add Driver </a>
                            @endcan
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Driver List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Service</th>
                                        <th>Phone Number</th>
                                        <th>License Number</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->username }}</td>
                                        <td>{{ $item->service->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->license_number }}</td>
                                        <td>
                                            {!! $item->badgeData() !!}
                                        </td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('driver-edit')
                                                <a href="{{ route('driver-edit', $item->id) }}"
                                                    class="btn-sm btn btn-secondary btn_modal me-2"><i
                                                        class="bi bi-pencil"></i></a>
                                                @endcan

                                                @can('driver-create')

                                                @if($item->status == 0)
                                                <a href="{{ route('driver-approve', $item->id) }}"
                                                    class="btn-sm btn btn-success btn_modal me-2"><i
                                                        class="bi bi-check"></i></a>
                                                @elseif($item->status == 1)
                                                <a href="{{ route('driver-approve', $item->id) }}"
                                                    class="btn-sm btn btn-primary btn_modal me-2"><i
                                                        class="bi bi-check"></i></a>
                                                @else
                                                <a href="{{ route('driver-approve', $item->id) }}"
                                                    class="btn-sm btn btn-danger btn_modal me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 8a6.973 6.973 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
                                                    </svg>
                                                </a>
                                                @endif

                                                @endcan

                                                @can('driver-delete')
                                                <form action="{{ route('driver-delete', $item->id) }}" method="post"
                                                    class="delete-form">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="show_confirm btn-sm btn btn-danger me-2"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                                @endcan

                                                @can('driver-list')
                                                <a href="{{ route('driver-details', $item->id) }}"
                                                    class="btn-sm btn btn-secondary btn_modal me-2"><i
                                                        class="bi bi-eye"></i></a>
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
@foreach($errors -> all() as $error)
toastr.error("{{ $error }}");
@endforeach
</script>
@endpush
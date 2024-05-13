@extends('admin.layouts.app')
@section('title', 'Customer List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Customer List </li>
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
                            @can('customer-create')
                            <a href="{{ route('customer.create') }}" class="btn-sm btn btn-info btn_modal"><i
                                    class="bi bi-file-plus-fill"></i> Add Customer </a>
                            @endcan
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Customer List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customers as $item)
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>
                                            @if(isset($item->user->photo))
                                                <img src="{{ asset('assets/images/userphoto/'.$item->user->photo) }}"
                                                    alt="{{ $item->name }} Photo"
                                                    id="{{ 'user_' . $item->id }}">
                                            @else
                                                <img src="{{ URL::asset('assets/images/placeholder/male.png') }}"
                                                    alt="Placeholder Photo"
                                                    id="{{ 'user_' . $item->id }}">
                                            @endif
                                        </td>
                                        

                                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('customer-edit')
                                                <a href="{{ route('customer.edit', $item->id) }}"
                                                    class="btn-sm btn btn-secondary btn_modal me-2"><i
                                                        class="bi bi-pencil"></i></a>
                                                @endcan

                                                @can('customer-delete')
                                                <a href="#" onClick="deleteItem({{ $item->id}})"
                                                    class="btn-sm btn btn-danger"><i class="bi bi-trash"></i></a>
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
function deleteItem(itemId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to recover this data!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to the delete route
            window.location = '/customer-delete/' + itemId;
        }
    });
}
</script>
<script>
@foreach($errors->all() as $error)
toastr.error("{{ $error }}");
@endforeach
</script>

@endpush
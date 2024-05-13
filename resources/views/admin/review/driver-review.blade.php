@extends('admin.layouts.app')
@section('title', 'Driver Review To Customer')
@section('content')
<style>
    .hgt{
      display: flex;
      justify-content: space-between;
    }
    .input{
      display: flex;
      justify-content: space-between;
    }
    .filter-item {
        margin-left: 10px;
    }
</style>
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Driver Review List </li>
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
                           
                        </div>
                        <div class="col-10 row filter-item">
                            <form class="input" id="search-form" action="" method="GET">
                              <div class="col-2">
                                <label class="mb-0 opacity-50">Driver</label>
                                <select class="form-control form-control-sm" data-live-search="true" name="driver_id" onchange="filter()">
                                    <option value="">Select Driver</option>
                                    @foreach($drivers as $driver)
                                        <option value="{{ $driver->id }}" {{ ($driver_id == $driver->id) ? 'selected' : null }}>{{ $driver->name }} | {{ $driver->phone_number }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-2">
                                <label class="mb-0 opacity-50">Service</label>
                                <select class="form-control form-control-sm" data-live-search="true" name="service_id" onchange="filter()">
                                    <option value="">Select Service</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ ($service_id == $service->id) ? 'selected' : null }}>{{ $service->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="col-2">
                                
                              </div>
                              <div class="col-2">
                                
                              </div>
                              <div class="col-2">
                                
                              </div>
                            </form>
                        </div>

                        <hr>

                        <div class="card-body pb-0">
                            {{-- <h5 class="card-title">Driver Review List </h5> --}}

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Driver</th>
                                        <th>Service</th>
                                        <th>Pickup Point</th>
                                        <th>Drop Point</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $item)
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{ $item->customer?->name }} </td>
                                        <td>{{ $item->driver?->name }} </td>
                                        <td>{{ $item->service?->name }}</td>
                                        <td>{{ $item->booking?->start_location }}</td>
                                        <td>{{ $item->booking?->end_location }}</td>
                                        <td>{{ $item->rating }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <td>
                                            @can('review-list')
                                                <a href="#" onClick="deleteItem({{ $item->id}})" class="btn-sm btn btn-danger"><i class="bi bi-trash"></i></a>
                                            @endcan
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
                window.location = '/customer-review-delete/' + itemId;
            }
        });
    }

    function filter(){
        setTimeout(function() {
            $('#search-form').submit();
        }, 100);

    }
</script>
<script>
    @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
</script>

@endpush
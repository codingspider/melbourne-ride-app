@extends('admin.layouts.app')
@section('title', 'Taxi Booking List')
@section('content')
    <style>
        .hgt {
            display: flex;
            justify-content: space-between;
        }

        .input {
            display: flex;
            justify-content: space-between;
        }

        .filter-item {
            margin-left: 10px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    @include('modal.common')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Taxi Booking List </li>
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
                                <form class="input" id="search-form" action=""
                                    method="GET">
                                    <div class="col-2">
                                        <label class="mb-0 opacity-50">Customer</label>
                                        <select class="form-control form-control-sm" data-live-search="true"
                                            name="customer_id" onchange="filter()">
                                            <option value="">Select Customer</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}"
                                                    {{ $customer_id == $customer->id ? 'selected' : null }}>
                                                    {{ $customer->first_name }} | {{ $customer->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label class="mb-0 opacity-50">Service</label>
                                        <select class="form-control form-control-sm" data-live-search="true"
                                            name="service_id" onchange="filter()">
                                            <option value="">Select Service</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}"
                                                    {{ $service_id == $service->id ? 'selected' : null }}>
                                                    {{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label class="mb-0 opacity-50">Status</label>
                                        <select class="form-control form-control-sm" data-live-search="true" name="status"
                                            onchange="filter()">
                                            <option value="">Select Status</option>
                                            <option value="0" {{ $status == 0 ? 'selected' : null }}>Pending</option>
                                            <option value="1" {{ $status == 1 ? 'selected' : null }}>Accepted
                                            </option>
                                            <option value="2" {{ $status == 2 ? 'selected' : null }}>Completed
                                            </option>
                                            <option value="3" {{ $status == 3 ? 'selected' : null }}>Cancelled
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-4 mt-3">
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                name="datefilter" aria-describedby="inputGroup-sizing-default">

                                            <button class="btn btn-success" type="submit">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="card-body pb-0">
                                <h5 class="card-title">Taxi Booking List </h5>

                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name </th>
                                            <th>Service</th>
                                            <th>Pickup Point</th>
                                            <th>Drop Point</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Discount</th>
                                            <th>Fare</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $item)
                                            <tr>
                                                <th>{{ $loop->index + 1 }}</th>
                                                <td>{{ $item->user?->first_name }} {{ $item->user->last_name }} </td>
                                                <td>{{ $item->service?->name }}</td>
                                                <td>{{ $item->pick_up_location }}</td>
                                                <td>{{ $item->drop_off_location }}</td>
                                                <td>{{ $item->pick_up_date }}</td>
                                                <td>{{ $item->pick_up_time }}</td>
                                                <td>{{ $item->discount }}</td>
                                                <td>{{ $item->subtotal }}</td>
                                                <td>{!! $item->badgeData() !!}</td>
                                                <td>

                                                    @can('taxi-booking-delete')
                                                        <a href="#" onClick="deleteItem({{ $item->id }})"
                                                            title="Delete item" class="btn-sm btn btn-danger"><i
                                                                class="bi bi-trash"></i></a>
                                                    @endcan

                                                    @can('taxi-booking-create')
                                                        <a href="{{ route('view-booking-details', $item->id) }}"
                                                            class="btn btn-sm btn-info btn_modal"><i class="bi bi-eye"></i></a>
                                                        @if ($item->status == 0)
                                                            <a href="#" onClick="confirmBooking({{ $item->id }})"
                                                                title="Booking Accept" class="btn-sm btn btn-primary"><i
                                                                    class="bi bi-patch-check"></i></a>
                                                        @elseif($item->status == 1)
                                                            <a href="#" onClick="cancellBooking({{ $item->id }})"
                                                                title="Booking Cancell" class="btn-sm btn btn-warning"><i
                                                                    class="bi bi-x-circle"></i></a>
                                                        @else
                                                        @endif
                                                    @endcan

                                                    <a href="{{ route('print-invoice', $item->id) }}" target="_blank" class="btn-sm btn btn-warning"><i class="bi bi-printer"></i></a>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
                    window.location = '/taxi-booking-delete/' + itemId;
                }
            });
        }

        function confirmBooking(itemId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to accept the booking !',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, confirm it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete route
                    window.location = '/taxi-booking-confirm/' + itemId;
                }
            });
        }

        function cancellBooking(itemId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to cancell the booking !',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, cancell it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete route
                    window.location = '/taxi-booking-cancell/' + itemId;
                }
            });
        }

        function filter() {
            setTimeout(function() {
                $('#search-form').submit();
            }, 100);
        }
    </script>
    <script>
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    </script>

    <script type="text/javascript">
        $(function() {
            $('input[name="datefilter"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                    'MM/DD/YYYY'));
            });

            $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>
@endpush

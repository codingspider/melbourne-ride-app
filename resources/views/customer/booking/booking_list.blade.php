@extends('admin.layouts.app')
@section('title', 'Booking History')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Booking History </li>
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
                        @if(auth()->user()->user_type == 2)
                            <a href="{{ route('customer-booking-create') }}" class="btn-sm btn btn-info"><i class="bi bi-file-plus-fill"></i> Add Booking </a>
                        @endif
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Booking History </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Service </th>
                                        <th scope="col">Pick Up Time </th>
                                        <th scope="col">Pick Up Date </th>
                                        <th scope="col">Pick Up Location </th>
                                        <th scope="col">Drop Off Location </th>
                                        <th scope="col">Booking Status</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($bookings as  $booking)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $booking->service->name }}</td>
                                    <td>{{ $booking->pickup_time}}</td>
                                    <td>{{ $booking->from_date }}</td>
                                    <td>{{ $booking->start_location }}</td>
                                    <td>{{ $booking->end_location }}</td>
                                    
                                    <td>{!! $booking->badgeData() !!}</td>
                                    <td>
                                        @foreach($booking->payment as $payment)
                                        {!! $payment->badgePaymentData() !!}
                                        @endforeach
                                    </td>
                                    <td>{{ dateFormat($booking->created_at) }}</td>   

                                    @if(auth()->user()->is_admin == 2)
                                        <td>
                                        <a href="{{ route('view-booking-details', $booking->id) }}" class="btn btn-sm btn-info btn_modal"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('make-booking-payment', $booking->id) }}" class="btn btn-sm btn-warning btn_modal"><i class="bi bi-cash"></i></a>

                                        <a href="{{ route('generate-pdf', $booking->id) }}"  class="btn btn-sm btn-primary"><i class="bi bi-printer"></i></a>
                                        @if($booking->pickup_date !=  date('Y-m-d'))
                                        <a href="#" onClick="cancellBooking({{ $booking->id}})" title="Booking Cancell" class="btn-sm btn btn-warning"><i class="bi bi-x-circle"></i></a>
                                        @endif
                                    @endif
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
    $(document).ready(function() {
        $(document).on("submit", "#coupon_form", function(e) {
            e.preventDefault();
            
            var form = $(this);
            var actionUrl = form.attr('action');
            
            $.ajax({
                url: actionUrl,
                type: "POST",
                data: form.serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);

                    var amount = data.amount;
                    var discount = data.discount;

                    var total = parseInt(amount) - parseInt(discount)

                    $('#discount').text(discount);
                    $('#grand_total').text(total);
                    $('#payment_amount').val(total);
                    $('#discount_amount').val(discount);

                    toastr.success('Discount amount ' +data.amount+ ' has been applied');
                },
                error: function(jqXhr) {
                    if (jqXhr.status === 422) {  // Laravel validation failed
                        var jsonErrors = jqXhr.responseJSON;
                        var errors = '';

                        $.each(jsonErrors, function(key, value) {
                            errors += '<li>' + value[0] + '</li>';
                        });

                        toastr.error(errors, "Error " + jqXhr.status + ': ' + jqXhr.statusText);
                    } else {
                        toastr.error("An unexpected error occurred.", "Error " + jqXhr.status + ': ' + jqXhr.statusText);
                    }
                }
            });
        });

        $(document).on("click", "#pay_now", function(e) {
            $("#payment_form").submit();
        });

        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
    });

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
                window.location = '/customer/customer-booking-cancell/' + itemId;
            }
        });
    }
</script>

@endpush
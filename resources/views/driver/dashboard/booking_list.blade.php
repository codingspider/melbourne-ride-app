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

                        <div class="card-body pb-0">
                            <h5 class="card-title">Booking History </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Pick Up Time </th>
                                        <th scope="col">Pick Up Date </th>
                                        <th scope="col">Pick Up Address </th>
                                        <th scope="col">Drop Up Address </th>
                                        <th scope="col">Booking Status</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Driver Review </th>
                                        <th scope="col">Customer Review </th>
                                        <th scope="col">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($bookings as  $booking)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $booking->customer->name }}</td>
                                    <td>{{ $booking->pickup_time}}</td>
                                    <td>{{ $booking->pickup_date }}</td>
                                    <td>{{ $booking->start_location }}</td>
                                    <td>{{ $booking->end_location }}</td>
                                    <td>{!! $booking->badgeData() !!}</td>
                                    <td>{{ dateFormat($booking->created_at) }}</td>   
                                    <td>
                                        @php
                                        $maxRating = 5;
                                        @endphp
                                        @forelse ($booking->driver_review as $review)
                                        @for ($i = 1; $i <= $maxRating; $i++)
                                            @if ($i <= $review->rating)
                                                <i class="bi bi-star-fill"></i>
                                            @else
                                                <i class="bi bi-star"></i>
                                            @endif
                                        @endfor
                                        @empty
                                        @if($booking->status == 2)
                                        <a href="{{ route('give-customer-review', $booking->id) }}" class="btn btn-sm btn-info btn_modal">Review</a>
                                        @endif
                                        @endforelse
                                    </td>
                                    
                                    <td>
                                        @forelse ($booking->customer_review as $review)
                                        @for ($i = 1; $i <= $maxRating; $i++)
                                            @if ($i <= $review->rating)
                                                <i class="bi bi-star-fill"></i>
                                            @else
                                                <i class="bi bi-star"></i>
                                            @endif
                                        @endfor
                                        @empty
                                        @endforelse

                                    </td>

                                    <td>
                                    <a href="{{ route('view-booking-details', $booking->id) }}" class="btn btn-sm btn-info btn_modal"><i class="bi bi-eye"></i></a>
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
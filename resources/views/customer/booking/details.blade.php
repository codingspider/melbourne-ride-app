<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                <h5 class="modal-title" id="exampleModalLabel">Booking Details for {{ $booking->service->name }} </h5>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Pick Up Time </th>
                                    <th scope="col">Pick Up Date </th>
                                    <th scope="col">Pick Up Address </th>
                                    <th scope="col">Drop Up Address </th>
                                    <th scope="col">Created Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>{{ $booking->pick_up_time}}</td>
                                    <td>{{ $booking->pick_up_date }}</td>
                                    <td>{{ $booking->pick_up_location }}</td>
                                    <td>{{ $booking->drop_off_location }}</td>
                                    <td>{{ dateFormat($booking->created_at) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="5">{{ $booking->special_note ?? "There is no special request" }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @if(count($booking->payment) > 0)
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Payment Details </h5>
                        <table class="table table-bordered">
                            <tr>
                                <th>Sl.NO </th>
                                <th>Paid Amount (with gst)</th>
                                <th>Discount </th>
                                <th>GST</th>
                                <th>Payment Method </th>
                                <th>Payment Date </th>
                                <th>Payment Status </th>
                            </tr>
                            @foreach ($booking->payment as $payment)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $payment->total_amount}}</td>
                                <td>{{ $payment->discount_amount }}</td>
                                <td>{{ $payment->gst }}</td>
                                <td>{{ $payment->payment_method }}</td>
                                <td>{{ dateFormat($payment->created_at) }}</td>
                                <td>{!! $payment->badgePaymentData() !!}</td>
                            </tr>
                            @endforeach

                        </table>

                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
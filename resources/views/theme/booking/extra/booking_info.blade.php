<div class="col-md-12">
    <div id="booking-info">
        <h4>Booking Information</h4>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Service Type</td>
                    <td><b>{{ $service->name }}</b></td>
                </tr>
                <tr>
                    <td>Pick-Up Date/Time</td>
                    <td><b id="pickup-date-text">{{ $bookingData['pick_up_date'] }}
                            {{ $bookingData['pick_up_time'] }}</b></td>
                </tr>


                @if($service->id == 1)
                <tr>
                    <td>Pickup Location</td>
                    <td>{{ $bookingData['pick_up_location'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Drop off Location </td>
                    <td>{{ $bookingData['point_b'] ?? null  }}</td>
                </tr>

                @elseif($service->id == 2)
                <tr>
                    <td>Pickup Location </td>
                    <td>{{ $bookingData['point_a'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Drop off Location </td>
                    <td>{{ $bookingData['airport'] ?? null  }}</td>
                </tr>

                @elseif($service->id == 3)
                <tr>
                    <td>Pickup Location </td>
                    <td>{{ $bookingData['pick_up_location'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Drop off Location </td>
                    <td>{{ $bookingData['drop_off_address'] ?? null  }}</td>
                </tr>

                @elseif($service->id == 4)
                <tr>
                    <td>Pickup Location</td>
                    <td>{{ $bookingData['pick_up_location'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Drop off Location</td>
                    <td>{{ $bookingData['drop_off_address'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Hours </td>
                    <td>{{ $requestData['hours'] ?? null  }}</td>
                </tr>

                @elseif($service->id == 5)
                <tr>
                    <td>Pickup Location</td>
                    <td>{{ $bookingData['pick_up_location'] ?? null  }}</td>
                </tr>

                <tr>
                    <td>Drop off Location </td>
                    <td>{{ $bookingData['ceremony_location'] ?? null  }}</td>
                </tr>


                <tr>
                    <td>Hours </td>
                    <td>{{ $bookingData['hours'] ?? null  }}</td>
                </tr>

                @elseif($service->id == 6)

                <tr>
                    <td>Pickup Location </td>
                    <td>{{ $bookingData['pick_up_location'] ?? null  }}</td>
                </tr>

                @endif


                <tr>
                    <td>Estimated Distance</td>
                    <td><b>{{ $bookingData['total_distance'] }} km</b></td>
                </tr>
                <tr>
                    <td>Estimated Time</td>
                    <td><b>{{ $bookingData['total_duration']}}</b></td>
                </tr>
                <tr>
                    <td>Vehicle Name</td>
                    <td><b>{{ $fleet->name }}</b></td>
                </tr>

                <tr>
                    <td>Luggage</td>
                    <td><b>{{ $fleet->luggage }}</b></td>
                </tr>
                <tr>
                    <td>Estimated Fare</td>
                    <td><b>$<span id="estimated-fare-text">{{ $total_without_seat }}</span></b></td>
                </tr>
                <tr>
                    <td>Baby Seats </td>
                    <td><b>${{ $baby_seat_cost }} </b></td>
                </tr>
                
                <tr>
                    <td>Stop Over Charge</td>
                    <td><b>${{ $stop_over_charge }} </b></td>
                </tr>
                
                <tr>
                    <td>Night/Early Morning</td>
                    <td><b>${{ $late_night }} </b></td>
                </tr>

                <tr>
                    <td><b>Total</b></td>
                    <td><b>${{ $total_fare }}</b></td>
                </tr>
                @php
                $total = $total_fare;
                $vat = gs()->gst ?? 0;
                $tax = calculateTax($total, $vat);
                $subtotal = $total + $tax;
                @endphp
                <tr>
                    <td><b>Total (with GST)</b></td>
                    <td><b>$<span id="total-with-gst-text">{{ $tax + $total }}</span></b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-theme pull-left" type="button" id="previous">Previous </button>

                        <a class="btn btn-theme pull-right" type="button"
                            href="{{ route('payment-page') }}">Next </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
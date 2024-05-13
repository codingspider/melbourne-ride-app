@extends('admin.layouts.app')
@section('title', 'New Booking')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Create New Booking </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Booking Form</h5>

                    <!-- No Labels Form -->
                    <form class="row g-3" id="myForm" action="{{ route('taxi-booking.update', $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table" style="border-bottom: #fff;">
                            <tbody>
                                <tr>
                                    <td width="33.33%">
                                        <label for="service" class="form-label">Select Service <span>*</span></label>
                                        <select name="service_id" id="service_id" class="form-control">
                                            <option value="">Select Service </option>
                                            @foreach($services as $service)
                                            <option  {{ ($service->id == $booking->service_id) ? 'selected' : null }} data-fare="{{ $service->fare->base_fare ?? 0 }}"
                                                value="{{ $service->id }}">
                                                {{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td width="33.33%">
                                    <label for="customer_id" class="form-label">Select Customer <span>*</span></label>
                                    <select name="customer_id" id="customer_id" class="form-control customer_input">
                                        <option value="">Select Customer </option>
                                        @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" {{ ($customer->id == $booking->customer_id) ? 'selected' : null }}>{{ $customer->name }} | {{ $customer->phone }}</option>
                                        @endforeach
                                    </select>
                                    </td>
                                    <td width="33.33%">
                                        <label for="base_fare" class="form-label">Base Fare (Per KM) </label>
                                        <input type="text" class="form-control" name="base_fare" id="main_fare" value="{{ $booking->base_fare }}"
                                            readonly>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table" style="border-bottom: #fff;">
                            <tbody id="main-div">
                            </tbody>
                        </table>


                        <input type="hidden" name="total_km" id="total_km" value="{{ $booking->total_km ?? 0 }}">
                        <input type="hidden" name="final_total" id="final_total" value="{{ $booking->final_total ?? 0}}">

                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Pick Up Location </th>
                                        <th>Drop off Location </th>
                                        <th>Distance </th>
                                        <th>Duration</th>
                                        <th>Total Fare </th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pick_up">Pick Up Location </td>
                                        <td class="drop_off">Drop off Location </td>
                                        <td class="distance">Distance </td>
                                        <td class="duration">Duration</td>
                                        <td class="fare">Total Fare </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" onclick="resetForm()" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End No Labels Form -->
                    <div id="result-container"></div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@push('custom-script')
<script>
$(function() {

    $(document).on('blur', '#start_location, #end_location', function() {
        var pick = $('#start_location').val();
        var drop = $('#end_location').val();
        var search_data = pick + ',' + drop;
        if (pick && drop) {
            $.ajax({
                url: 'https://api.distancematrix.ai/maps/api/distancematrix/json?origins=' +
                    pick + '&destinations=' + drop +
                    '&key=vgRlIsJe7AFZFmn2THBmEWGE3dEixQrbLqgExD5RLm1KdmoDJVInNXkA5jKU5mkj', // Replace with your actual endpoint
                method: 'POST',
                data: {
                    start_location: pick,
                    end_location: drop
                },
                success: function(response) {
                    displayJsonData(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }
    });

    function displayJsonData(jsonData) {
        if (jsonData.origin_addresses && jsonData.origin_addresses.length > 0) {
            $('.pick_up').text(jsonData.origin_addresses[0]);
        }

        if (jsonData.destination_addresses && jsonData.destination_addresses.length > 0) {
            $('.drop_off').text(jsonData.destination_addresses[0]);
        }
        if (jsonData.rows && jsonData.rows.length > 0 && jsonData.rows[0].elements && jsonData.rows[0].elements
            .length > 0) {
            var elements = jsonData.rows[0].elements[0];

            if (elements.distance && elements.distance.text) {
                $('.distance').text(elements.distance.text);
            }

            if (elements.duration && elements.duration.text) {
                $('.duration').text(elements.duration.text);
            }
        }

        var distance = elements.distance.value / 1000;
        var fare = $('#service_id option:selected').data('fare');

        var total_fare = parseInt(distance) * parseInt(fare);
        $('#total_km').val(distance);
        $('#final_total').val(total_fare);

        $('.fare').text(total_fare);
    }

    function resetForm() {
        var form = document.getElementById('myForm');
        form.reset();
    }

    $('#service_id').on('change', function() {
        var service_id = $(this).val();
        $.ajax({
            type: 'GET', // Use GET instead of POST
            url: '/customer/get-fare-by-service/' + service_id,
            success: function(json) {
                $('#main_fare').val(json.data);
                getForm(service_id);
            }
        });
    });

    function getForm(service_id) {
        $.ajax({
            type: 'GET',
            url: '/customer/get-booking-form/' + service_id,
            dataType: 'html',
            success: function(data) {
                $('#main-div').html(data);
            }
        });
    }

    $(document).ready(function() {

        $.ajax({
            url: '/customer/get-booking-edit-data/{{$booking->id}}/{{$booking->service_id}}',
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                // Handle the successful response here
                $('#main-div').html(data);
            },
            error: function(error) {
                // Handle errors here
                console.error('Error:', error);
            }
        });
    });

});
</script>

@endpush
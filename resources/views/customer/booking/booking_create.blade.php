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
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Booking Form</h5>

                    <!-- No Labels Form -->
                    <form action="{{ route('booking-store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table" style="border-bottom: #fff;">
                                    <tbody>
                                        <tr>
                                            <td width="50%">
                                                <label for="service" class="form-label">Select Service
                                                    <span>*</span></label>
                                                <select name="service_id" id="service_id" class="form-control">
                                                    <option value="">Select Service </option>
                                                    @foreach($services as $service)
                                                    <option data-fare="{{ $service->fare->base_fare ?? 0 }}"
                                                        value="{{ $service->id }}">
                                                        {{ $service->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td width="50%">
                                                <label for="main_fare" class="form-label">Base Fare (Per KM) </label>
                                                <input type="text" class="form-control" name="base_fare" id="main_fare"
                                                    readonly>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12">
                                <table class="table" style="border-bottom: #fff;">
                                    <tbody id="main-div">

                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12">
                                <table class="table table-bordered" style="padding: .5rem .5rem;">
                                    <thead>
                                        <tr>
                                            <th width="20%">Pick Up Location </th>
                                            <th width="20%">Drop off Location </th>
                                            <th width="20%">Distance </th>
                                            <th width="20%">Duration</th>
                                            <th width="20%">Total Fare </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="20%" class="pick_up">Pick Up Location </td>
                                            <td width="20%" class="drop_off">Drop off Location </td>
                                            <td width="20%" class="distance">Distance </td>
                                            <td width="20%" class="duration">Duration</td>
                                            <td width="20%" class="fare">Total Fare </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <input type="hidden" name="total_km" id="total_km">
                            <input type="hidden" name="final_total" id="final_total">
                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" onclick="resetForm()" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>

                    </form><!-- End No Labels Form -->
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


});
</script>

@endpush
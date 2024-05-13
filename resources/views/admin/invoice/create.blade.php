@extends('admin.layouts.app')
@section('title', 'Invoice Create')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Invoice Create </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <form action="{{ route('store-manual-imvoice') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-12">
            <div class="card">
                <form>
                    <div class="card-body">
                        <div>
                            <table class="table" id="dynamic_field">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][traveler_name]" placeholder="Traveler Name">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][pickup_location]"
                                                        placeholder="Pickup Location">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][drop_off_location]"
                                                        placeholder="Drop off Location">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][pickup_date_time]"
                                                        placeholder="Pickup Date & Time">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <select id="service_id" name="traveler[0][service_id]"
                                                        class="form-control">
                                                        <option value="">Choose Service </option>
                                                        @foreach ($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-2" id="vehicles">
                                                    <input type="text" class="form-control" name="traveler[0][fleet_id]"
                                                        placeholder="Vehicle">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][number_of_passanger]"
                                                        placeholder="Number of passanger">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][baby_seat_cost]" placeholder="Baby seat cost">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][stop_fare]" placeholder="Stop over cost">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][parking_fare]" placeholder="Parking Fare">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][waiting_time_fare]"
                                                        placeholder="Waiting Time Fare">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][late_night_fee]"
                                                        placeholder="Late Night/Early Morning Fare">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][other_charge]" placeholder="Other Charge">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][total_travel_fare]"
                                                        placeholder="Total Travel Fare">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][return_pickup]" placeholder="Return Pickup">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][return_dropoff]"
                                                        placeholder="Return Drop Off">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control"
                                                        name="traveler[0][return_date_time]"
                                                        placeholder="Return Date Time">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-header">
                                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-3 col-form-label">Trip Date <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"
                                        name="trip_date" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Fare with GST: <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control"
                                        name="fare_with_gst" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Payment Method : <span class="text-danger">*</span> </label>
                                <div class="col-sm-6">
                                    <select name="payment_method" class="form-control">
                                        <option value="card">Crdit Card </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Payment Status : <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                <select name="payment_status" class="form-control">
                                        <option value="due">Due</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</section>

@endsection

@push('custom-script')
<script>
$(document).ready(function() {
    $('#service_id').on('input', function() {
        var inputValue = $(this).val();
        $.ajax({
            url: '/get-vehicles',
            type: 'GET',
            data: {
                inputValue: inputValue
            },
            dataType: 'html',
            success: function(response) {
                $('#vehicles').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    var i = 1;

    $('#add').click(function(){  
        i++;  
        var newRow = `
            <tr id="row${i}" class="dynamic-added">
                <td>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][traveler_name]" placeholder="Traveler Name">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][pickup_location]"
                                placeholder="Pickup Location">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][drop_off_location]"
                                placeholder="Drop off Location">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][pickup_date_time]"
                                placeholder="Pickup Date & Time">
                        </div>
                        <div class="col-md-6 mb-2">
                            <select id="service_id" name="traveler[${i}][service_id]"
                                class="form-control">
                                <option value="">Choose Service </option>
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-2" id="vehicles">
                            <input type="text" class="form-control" name="traveler[${i}][fleet_id]"
                                placeholder="Vehicle">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][number_of_passanger]"
                                placeholder="Number of passanger">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][baby_seat_cost]" placeholder="Baby seat cost">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][stop_fare]" placeholder="Stop over cost">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][parking_fare]" placeholder="Parking Fare">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][waiting_time_fare]"
                                placeholder="Waiting Time Fare">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][late_night_fee]"
                                placeholder="Late Night/Early Morning Fare">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][other_charge]" placeholder="Other Charge">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][total_travel_fare]"
                                placeholder="Total Travel Fare">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][return_pickup]" placeholder="Return Pickup">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][return_dropoff]"
                                placeholder="Return Drop Off">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control"
                                name="traveler[${i}][return_date_time]"
                                placeholder="Return Date Time">
                        </div>
                    </div>
                </td>
                <td>
                    <button type="button" name="remove" id="btn_remove${i}" class="btn btn-danger btn_remove">X</button>
                </td>
            </tr>`;
        $('#dynamic_field').append(newRow);  
    });  

    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id").replace('btn_remove', '');   
        $('#row'+button_id).remove();  
    });  

});
</script>
@endpush
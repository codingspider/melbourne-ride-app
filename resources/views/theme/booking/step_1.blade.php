@extends('theme.layouts.app')
@section('title', 'Booking Form')
@section('content')
@include('modal.return')
<style>
.map-content-placeholder {
    position: relative;
    height: 100%;
    width: 100%;
    background: center no-repeat #c3ddfe url("{{ asset('assets/images/placeholder/staticImage.png') }}")
}
.number-input .input-group-btn {
    width: auto;
    white-space: nowrap;
  }

  .number-input .btn {
    display: inline-block;
  }

  .number-input input {
    width: 70px; /* Adjust the width as needed */
  }

  .select2-selection__rendered {
    line-height: 31px !important;
}
.select2-container .select2-selection--single {
    height: 50px !important;
    border: 1px solid black;
    border-radius: 0px;
}
.select2-selection__arrow {
    height: 50px !important;
}

</style>
<section class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="row" id="step_1_form">
            <div class="col-md-6">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Fare Estimate</h4>
                    <div class="widget-content">

                        <form action="{{ route('store-ride-info') }}" method="POST" id="ride_form">
                            @csrf
                            <input type="hidden" name="invoice_id" value="{{ $bookingId }}">
                            <input type="hidden" name="total_distance" id="total_distance">
                            <input type="hidden" name="total_duration" id="total_duration">

                            <div class="row">
                                <div class="col-md-12" id="first_step_hide">
                                    <div class="left">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="service type">Service Type</label>
                                                    <select name="service_id" id="service_id" class="form-control alt"
                                                        data-toggle="tooltip" data-original-title="Name is required"
                                                        required>
                                                        <option value="">Select Service Type</option>
                                                        @foreach($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="main-div"> </div>
                                        </div>
                                    </div>
                                </div>
                                            
                                <div class="col-md-12" id="first_step_data_show"> </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-12">
                                    <div class="left">
                                        <div class="overflowed">
                                            <button class="btn btn-theme pull-right" type="submit">Next </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('theme.partials.map')
        </div>
        <div class="row" id="step_1_form_data" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title d-flex justify-content-between align-items-center">
                        Booking Info
                        <a href="#" class="ml-auto btn step_one_edit"><i class="fa fa-pencil"></i></a>
                    </h4>
                    <div class="widget-content table-responsive" id="first_step_data_table"> </div>
                </div>
            </div>
        </div>

        <div class="row" id="step_2_fleet_data" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Selected Vehicle
                        <a href="#" class="ml-auto btn step_two_edit"><i class="fa fa-pencil"></i></a>
                    </h4>
                    <div class="table-responsive" id="flight_info_data_table"> </div>
                </div>
            </div>
        </div>

        <div class="row" id="return_fleet_info" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Return Service </h4>
                    <div class="widget-content table-responsive" id="return_table_data"></div>
                </div>
            </div>
        </div>

        <div class="row" id="step_2_form_data" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Select vehicle </h4>
                    <div class="widget-content table-responsive" id="fleets-table"></div>
                </div>
            </div>
        </div>

        <div class="row" id="booking_information_details" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Fare Estimator</h4>
                    <div class="widget-content table-responsive" id="estimatorData">
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="final_step" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <div class="widget-content table-responsive" id="paymentData">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')

<script src="{{ asset('assets/js/booking_store.js') }}"></script>
<script src="{{ asset('assets/js/booking.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDai8HsIbrVH_ndV2kOQTfqebphSjtZm0A&libraries=places&callback=initMap"
    async defer></script>
<script src="{{ asset('assets/js/map.js') }}"></script>

<script>
$(document).ready(function() {

    $(document).on('change', '#service_id', function() {
        var selectedService = $(this).val();
        var html = '';
        $.ajax({
            type: 'GET',
            url: '/get-booking-form/' + selectedService,
            dataType: 'html',
            success: function(data) {
                $('#main-div').html(data);
                initSelect2();
                initMap();
                $('#pick_up_time').datetimepicker({
                    format: 'LT'
                });

                $('#pick_up_date').datetimepicker({
                    format: 'DD-MM-YYYY'
                });
            }
        });
        
    });
    
    $(document).on('click', '.fa-pencil', function() {
        $('#step_3_form_data').hide();
    });
    
    $(document).on('click', '#previous', function() {
        $('#step_1_form_data').show();
        $('#step_2_fleet_data').show();
        $('#booking_information_details').hide();
    });
    
    $(document).on('click', '#next_payment_page', function(event) {
        event.preventDefault(); // Prevent the default behavior of the link

            // Make AJAX request
            $.ajax({
                url: $(this).attr('href'),
                type: 'GET', 
                dataType: 'html',
                success: function(data) {
                    $('#booking_information_details').hide();
                    $('#final_step').show();
                    $('#paymentData').html(data);
                },
                error: function(error) {
                    
                }
            });
    });
    
    $(document).on('submit', '#fareEstimate', function(e) {
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            url: actionUrl,
            type: "POST",
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'html',
            success: function(response) {
                $('#step_1_form_data').hide();
                $('#step_2_fleet_data').hide();
                $('#booking_information_details').show();
                $('#estimatorData').html(response);
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Something went wrong', { closeButton: true, timeOut: 5000 });
                    });
                }
            }
        });
    });

    function initSelect2(){
        $('.select2').select2();
    }

    $(document).on('change', '#origin', function(){
        var origin = $(this).val();
        $('#pick_up_location').val(origin);
        $('#pick_up_location').trigger('input');
        calculateAndDisplayRoute();
    });

    $(document).on('change', '#destination', function(){
        var destination = $(this).val();
        $('#drop_off_location').val(destination);
        $('#drop_off_location').trigger('input');
        calculateAndDisplayRoute();
    });

    $(document).on('click', '.increment', function(event) {
        var value = parseInt($(this).closest('.number-input').find('.quantity').val(), 10);
        $(this).closest('.number-input').find('.quantity').val(value + 1);
    });

    $(document).on('click', '.decrement', function(event) {
        var value = parseInt($(this).closest('.number-input').find('.quantity').val(), 10);
        if (value > 0) {
            $(this).closest('.number-input').find('.quantity').val(value - 1);
        }
    });
    
    var i=1;  
    $(document).on('click', '#add', function(){  
        console.log('ok button clicked'); 
        $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td width="50%"><input type="text" name="stops[]" id="stops_'+i+'" placeholder="Enter your stop" class="form-control alt  stops" /></td><td width="50%" class="text-center"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove bt-sm">X</button></td></tr>');  
        i++;  
    });  

    $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
    });  


    $(document).on('input', '#stops_1, #stops_2, #stops_3, #stops_4, #stops_5, #stops_6, #stops_7, #stops_8, #stops_9', function() {
        var id = $(this).attr('id');
        pointStopsAutocomplete(id);
    });

    function pointStopsAutocomplete(id) {
        var stops = document.getElementById(id);
        if (stops) {
            var options = {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'AU'
                }
            };
            // Check if autocomplete is already initialized for this input field
            if (!stops.hasAttribute('data-autocomplete-initialized')) {
                var autocomplete = new google.maps.places.Autocomplete(stops, options);
                stops.setAttribute('data-autocomplete-initialized', 'true');
                console.log(autocomplete);
            }
        }
    }

});
</script>

@endpush
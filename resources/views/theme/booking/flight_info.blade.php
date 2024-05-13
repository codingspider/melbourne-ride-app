@extends('theme.layouts.app')
@section('title', 'Booking Form')
@section('content')
<section class="page-section with-sidebar sub-page">
    <div class="container">

    <style>
.form-inline {
    display: flex;
    margin-right: 10px;
}

.payment-option {
    margin-right: 50px; /* Adjust the margin as needed for spacing */
}
</style>
<aside class="col-md-12 sidebar mt-5" id="flight_info">
    <!-- widget helping center -->
    <div class="widget shadow widget-helping-center">
        <div class="widget-content">
            <div class="row">

            @if($service_id != 4 && $service_id != 5 && $service_id != 6)
                <div class="col-md-12">
                    <h5 class="title">Would you like to book return service?</h5>
                    <div class="row">
                        <div class="col-xs-6">
                            <a type="button" href="{{ route('add-return-trip') }}"
                                class="btn btn-primary" id="is_return">Yes</a>

                            <a type="button" href="#"
                                class="btn btn-warning remove_return">No</a>
                        </div>
                    </div>
                </div>
            @endif
            <!-- booking form  -->
            <form action="{{ route('final-step-store-booking') }}">
                @csrf
                <div class="col-md-12" style="display:none" id="returnForm">
                    <div class="left">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Pick-Up Date">Pick-Up Date</label>
                                    <input name="return[pick_up_date]" class="form-control alt datepick" id="return_pick_up_date" type="text" placeholder="Pick up date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Pick-Up Time">Pick-Up Time</label>
                                    <input name="return[pick_up_time]" class="form-control alt timepick" id="retun_pick_up_time" type="text" placeholder="Pick up time">
                                </div>
                            </div>

                            @if($service_id == 2)
                            <div class="col-md-12">
                                <div class="form-group"><label for="Pick-Up Date">Flight Number </label><input name="return[flight_number]"
                                        class="form-control alt" id="flight_number" type="text" required></div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <hr style="border-top: solid 1px #e9e9e9;">

                <div class="col-md-6">
                    <div class="form-group">
                        <input name="promo_code" id="promo_code" class="form-control alt" type="text" placeholder="Promo Code">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a href="#" class="btn btn-theme pull-right" id="reedem">Apply</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Special Request (Optional)</label>
                        <textarea style="border: 1px solid black" name="special_note" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <h3>Payment Information</h3>
                </div>

                
                    <div id="payment_data_info"></div>
                    <div class="col-md-12">
                        @if(Auth::check())
                        <button class="btn btn-block btn-danger" style="background-color: #e60000" type="submit" id="bookBtn">BOOK
                            NOW</button>
                        <input type="hidden" name="book_as" value="auth_user">
                        @else
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-block btn-danger" style="background-color: #e60000" type="submit" id="bookBtn">Continue as
                                            guest</button>
                                            <input type="hidden" name="book_as" value="guest_user">
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ route('user-login') }}" class="btn_modal btn btn-block btn-info">Login </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </form>
                <!-- booking form  -->

            </div>
        </div>
    </div>
    <!-- /widget helping center -->
</aside>
    </div>
</section>
@endsection

@push('script')

<script src="{{ asset('assets/js/booking_store.js') }}"></script>
<script src="{{ asset('assets/js/booking.js') }}"></script>


<script>
$(document).ready(function() {

    getPaymentPage();

    $('.datepick').datetimepicker({
        format: 'DD-MM-YYYY'
    });
    
    $('.timepick').datetimepicker({
        format: 'LT'
    });

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

    function getPaymentPage(){
        $.ajax({
            type: 'GET',
            url: '/get-payment-page',
            dataType: 'html',
            success: function(data) {
                $('#payment_data_info').html(data);
            }
        });
    }

    $(document).on("click", "#is_return", function(e){
        e.preventDefault();
        $('#returnForm').show();
        $('#is_return').hide();

    });
    
    $(document).on("blur", "#retun_pick_up_time", function(e){
        e.preventDefault();
        var return_time = $(this).val();
        var actionUrl = "{{ route('store-return-ride-info') }}";
        $.ajax({
            url: actionUrl,
            type: "GET",
            data: {return_time:return_time},
            dataType: 'json',
            success: function(response) {
                getPaymentPage();
            }
        });

    });

    $(document).on('click', '.remove_return', function(e) {
        e.preventDefault();
        var actionUrl = "{{ route('remove-return-ride-info') }}";
        $.ajax({
            url: actionUrl,
            type: "GET",
            data: {is_return:true},
            dataType: 'json',
            success: function(response) {
                $('#returnForm').hide();
                $('#is_return').show();
                getPaymentPage();
            }
        });
    });

    $(document).on('click', '#reedem', function(e) {
        e.preventDefault();
        var code = $("#promo_code").val();
        var actionUrl = "/find-coupon-code";
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: {code: code},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(response) {
                getPaymentPage();
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error', { closeButton: true, timeOut: 5000 });
                    });
                } else if (response.status === 401) {
                    toastr.error('Unauthorized access', 'Error', { closeButton: true, timeOut: 5000 });
                } else if (response.status === 500) {
                    toastr.error('Internal Server Error', 'Error', { closeButton: true, timeOut: 5000 });
                }
            }
            
        });
    });
    

});
</script>

@endpush
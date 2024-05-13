<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ $general->business_name ?? 'Website title' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontEnd/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/setting/' . ($general->favicon ?? '')) }}">


    <!-- CSS Global -->
    <link href="{{ asset('frontEnd/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/owl-carousel2/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('frontEnd/assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/css/theme-red-1.css') }}" rel="stylesheet" id="theme-config-link">
    <!-- Head Libs -->
    <script src="{{ asset('frontEnd/assets/plugins/modernizr.custom.js') }}"></script>
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
    <style>
        #map {
            height: 300px;
        }

        .location-input {
            width: 300px;
            margin: 10px;
        }
        
    </style>

</head>
<body id="home" class="wide">


<section class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="row" id="step_1_form">
            <div class="col-md-6">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Booking Form</h4>
                    <div class="widget-content">
                        <h3 class="block-title alt mt-2"><i class="fa fa-angle-down"></i>Ride Info
                        </h3>
                        <form action="{{ route('store-ride-info') }}" method="POST" id="ride_form">
                            @csrf
                            <input type="hidden" name="invoice_id" value="{{ $bookingId }}">
                            <div class="row">
                                <div class="col-md-12" id="first_step_hide">
                                    <div class="left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="service type">Service Type</label>
                                                    <select name="service_id" id="service_id" class="form-control alt"
                                                        data-toggle="tooltip" data-original-title="Name is required" required>
                                                        <option value="">Select Service Type</option>
                                                        @foreach($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Pick-Up Date">Pick-Up Date</label>
                                                    <input name="pick_up_date" id="pick_up_date" data-toggle="tooltip"
                                                        class="form-control alt" type="date"
                                                        data-original-title="Pick-Up Date is required" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Pick-Up Time">Pick-Up Time</label>
                                                    <input name="pick_up_time" id="pick_up_time" data-toggle="tooltip"
                                                        class="form-control alt" type="time" placeholder="Pick-Up Time"
                                                        data-original-title="Email is required" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Pick-Up Location">Pick-Up Location</label>
                                                    <input class="form-control alt" type="text"
                                                        placeholder="Pick-Up Location" name="pick_up_location"
                                                        id="pick_up_location" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Drop-Off Location">Drop-Off Location</label>
                                                    <input class="form-control alt" type="text" name="drop_off_location"
                                                        placeholder="Drop-Off Location" id="drop_off_location" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <table class="table table-bordered" id="dynamic_field">
                                                        <tr>
                                                            <td colspan="2"><button type="button" name="add" id="add"
                                                                    class="btn btn-success btn-sm">Add Stops </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Luggage Counts">Luggage Count</label>
                                                    <input class="form-control alt" type="number"
                                                        name="number_of_luggage" placeholder="Luggage Count">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="Special Requests">Special Requests (Optional)</label>
                                                    <input class="form-control alt" type="text" name="extra_requirement"
                                                        placeholder="Special Requests">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="first_step_data_show">
                                </div>
                            </div>

                            <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Extras
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="left">
                                    @foreach($amenities as $amenitie)
                                        <div class="checkbox-danger" style="display: inline-block; margin-right: 15px;">
                                            <label>
                                                <input type="checkbox" name="amenitie[]" value="{{ $amenitie->id }}">
                                                {{ $amenitie->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-12">
                                    <div class="left">
                                        <div class="overflowed">
                                            <button class="btn btn-theme pull-right" type="submit">Find Vehicle
                                            </button>
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
                        Booking Data
                        <a href="#" class="ml-auto btn step_one_edit"><i class="fa fa-pencil"></i></a>
                    </h4>
                    <div class="widget-content table-responsive" id="first_step_data_table"> </div>
                </div>
            </div>
        </div>

        <div class="row" id="step_2_fleet_data" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Selected Fleet <a href="#" class="ml-auto btn step_two_edit"><i class="fa fa-pencil"></i></a></h4>
                    <div class="widget-content table-responsive" id="flight_info_data_table">
                    </div>
                </div>
            </div>

        </div>
       
        <div class="row" id="return_fleet_info" style="display:none">
            <div class="col-md-12">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Return Fleet</h4>
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

        <div class="row" id="step_3_form_data" style="display:none">
        <form action="{{ route('final-step-store-booking') }}" method="POST" id="final_form">
        @csrf
            <div class="col-md-6">
                <div class="widget shadow widget-details-reservation">
                    <h4 class="widget-title">Passanger Form</h4>
                    <div class="widget-content">
                        <input type="hidden" name="invoice_id" value="{{ $bookingId }}">
                        @include('theme.booking.step_3')
                    </div>
                </div>
            </div>
            <input type="hidden" id="subtotal" name="subtotal">
            <input type="hidden" id="selected_fleet_id" name="selected_fleet_id">
            <input type="hidden" id="discount" name="discount">
            @include('theme.booking.flight_info')
        </form>
        </div>

        
    </div>
</section>

<script src="{{ asset('frontEnd/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/superfish/js/superfish.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/owl-carousel2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.easing.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.smoothscroll.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/swiper/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/datetimepicker/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('frontEnd/assets/js/theme-ajax-mail.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/booking_store.js') }}"></script>
<script src="{{ asset('assets/js/booking.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDai8HsIbrVH_ndV2kOQTfqebphSjtZm0A&libraries=places&callback=initMap"
    async defer></script>
<script src="{{ asset('assets/js/map.js') }}"></script>
<script>
$(document).on("click", ".btn_modal", function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    $.ajax({
        type: "GET",
        url: url,
        data: {},
        success: function (res) {
            $("div#common_modal").html(res).modal("show");
        },
    });
});
</script>
<script>
    // success message popup notification
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif

    // info message popup notification
    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif

    // warning message popup notification
    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @endif

    // error message popup notification
    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>

<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
<script>
    var Swipes = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
</body>
</html>
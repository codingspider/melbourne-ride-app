@extends('theme.layouts.app')
@section('title', 'Get A Qoute')
@push('style')
    <style>
        .get-qoute-title {
            color: rgb(235, 184, 55) !important;
            text-align: center !important;
        }

        .form-search .form-title:after {
            content: none;
            display: block;
            position: absolute;
            left: 40px;
            bottom: -8px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #14181c;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="div-table">
            <div class="div-cell">
                <div class="caption-content">
                    <!-- Search form -->
                    <div class="form-search light">
                        <form action="{{ route('get-qoute.store') }}" method="post">
                            @csrf
                            <div class="form-title ">
                                <h5 class="get-qoute-title">Don't Keep watting</h5>
                                <h3 class="get-qoute-title">Get A Qoute Now</h3>
                            </div>

                            <div class="row row-inputs">
                                <div class="container-fluid">
                                    <div class="col-md-6">
                                        <div class="form-group has-label">
                                            <input type="text" name="name" class="form-control"
                                                id="formSearchUpLocation2" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <input type="text" name="phone" class="form-control"
                                                id="formSearchOffLocation2" placeholder="phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-inputs">
                                <div class="container-fluid">
                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <input type="text" class="form-control datepicker" id="formSearchUpDate2"
                                                placeholder="email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <input type="text" name="pickaupa_location" class="form-control"
                                                id="formSearchUpHour2"
                                                placeholder="pickup location(Street No, Street Name, Subburd)">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <input type="date" name="pick_a_date" class="form-control"
                                                id="formSearchUpHour2" placeholder="pick a date">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <select name="pick_time" id="" class="form-control">
                                                <option value="">pick a time</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <select name="am_pm" id="" class="form-control">
                                                <option value="">AM/PM</option>
                                                <option value="am">AM</option>
                                                <option value="pm">PM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <select name="service" id="" class="form-control">
                                                <option value="">Travel Type</option>
                                                @foreach (allServices() as $service)
                                                    <option value="{{ $service }}">{{ $service }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <input type="number" name="pessengerNo" class="form-control"
                                                id="formSearchUpHour2" placeholder="Number of passenger">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-icon has-label">
                                            <select name="vehicle" id="" class="form-control">
                                                <option value="">select vehicle</option>
                                                <option value="Any Luxury Vihicle">any Luxury Vihicle</option>
                                                <option value="Executive Cars(E class, BMW 5, Audi A6)">Executive
                                                    Cars(E class, BMW 5, Audi A6)</option>
                                                <option value="European Cars(S class, BMW 7, Audi A8)">European
                                                    Cars(S class, BMW 7, Audi A8)</option>
                                                <option value="Mercedes S Class">Mercedes S Class</option>
                                                <option value="Rolls Royce">Rolls Royce</option>
                                                <option value="7 Seat Mercedes Van">7 Seat Mercedes Van</option>
                                                <option value="7 Seat MPV(People Mover)">7 Seat MPV(People Mover)
                                                </option>
                                                <option value="14 Seat Luxury Van">14 Seat Luxury Van</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea name="description" id="" class="form-control" cols="30" rows="50"></textarea>
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 5px">
                                        <button class="btn btn-info">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function initMap() {
            var geocoder = new google.maps.Geocoder();

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: {
                    lat: -34.397,
                    lng: 150.644
                } // Default center, you will replace this
            });

            var address = "Bogura, Bangladesh"; // Replace with the dynamic address

            geocoder.geocode({
                'address': address
            }, function(results, status) {
                console.log('Geocoding results:', results);
                console.log('Geocoding status:', status);

                if (status === 'OK') {
                    // Your existing code...
                } else {
                    console.error('Geocode was not successful for the following reason: ' + status);
                }
            });

        }

        $("#contact-form #submit_btn").click(function() {
            // validate and process form
            // first hide any error messages
            $('#contact-form .error').hide();

            var name = $("#contact-form input#name").val();
            if (name == "" || name == "Name..." || name == "Name" || name == "Name *" || name ==
                "Type Your Name...") {
                $("#contact-form input#name").tooltip({
                    placement: 'bottom',
                    trigger: 'manual'
                }).tooltip('show');
                $("#contact-form input#name").focus();
                return false;
            }
            var email = $("#contact-form input#email").val();
            var filter =
                /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
            //console.log(filter.test(email));
            if (!filter.test(email)) {
                $("#contact-form input#email").tooltip({
                    placement: 'bottom',
                    trigger: 'manual'
                }).tooltip('show');
                $("#contact-form input#email").focus();
                return false;
            }
            var subject = $("#contact-form input#subject").val();
            if (subject == "" || subject == "Subject") {
                $("#contact-form input#subject").tooltip({
                    placement: 'bottom',
                    trigger: 'manual'
                }).tooltip('show');
                $("#contact-form input#subject").focus();
                return false;
            }
            var message = $("#contact-form #input-message").val();
            if (message == "" || message == "Message..." || message == "Message" || message == "Message *" ||
                message == "Type Your Message...") {
                $("#contact-form #input-message").tooltip({
                    placement: 'bottom',
                    trigger: 'manual'
                }).tooltip('show');
                $("#contact-form #input-message").focus();
                return false;
            }

            var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
            //alert (dataString);return false;

            $.ajax({
                type: "POST",
                url: "{{ route('save-contact') }}",
                data: dataString,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function() {
                    $('#contact-form').append(
                        "<div class=\"alert alert-success fade in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button><strong>Contact Form Submitted!</strong> We will be in touch soon.</div>"
                    );
                    $('#contact-form')[0].reset();
                }
            });
            return false;
        });
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDai8HsIbrVH_ndV2kOQTfqebphSjtZm0A&libraries=places&callback=initMap">
    </script>
@endpush

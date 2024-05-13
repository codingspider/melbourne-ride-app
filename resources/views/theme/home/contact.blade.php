@extends('theme.layouts.app')
@section('title', 'Contact page')
@section('content')
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1 style="font-size: 20px">Contact Us</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-warning" style="padding: 50px; padding-right: 20px; background-color: #FBBD4B; height: 250px">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>
                            <a href="tel:{{ $data->mobile_1 }}">
                                <i class="fas fa-phone-square-alt"></i> {{ $data->mobile_1 }} (toll free)
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ $data->mobile_2 }}">
                                <i class="fas fa-phone-square-alt"></i> {{ $data->mobile_2 }} (Outside AUS)
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ $data->mobile_3 }}">
                                <i class="fas fa-phone-square-alt"></i> {{ $data->mobile_3 }} (Mob)
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $data->email }}">
                                <i class="fas fa-envelope"></i> {{ $data->email }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-warning" style="padding: 50px; padding-left: 20px; background-color: #FBBD4B; height: 250px">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://g.page/MelbourneLimolink?share" target="_blank">
                                <i class="fas fa-map-marked-alt"></i> Our Address:
                            </a>
                        </li>
                        <li>
                            <a href="https://g.page/MelbourneLimolink?share" target="_blank">
                            {{ $data->address }}
                            </a>
                        </li>
                        <li>
                            <a href="https://g.page/r/CWRpzc0gP-D4EBE/review" target="_blank">
                                <i class="fas fa-star"></i> {{ $data->other }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">
                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                    data-toggle="tooltip" title="" class="form-control placeholder"
                                    data-original-title="Name is required">
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                    data-toggle="tooltip" title="" class="form-control placeholder"
                                    data-original-title="Email is required">
                            </div>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <label class="sr-only" for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
                                    data-toggle="tooltip" title="" class="form-control placeholder"
                                    data-original-title="Subject is required">
                            </div>
                        </div>

                        <div class="form-group af-inner">
                            <label class="sr-only" for="input-message">Message</label>
                            <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                data-toggle="tooltip" title="" class="form-control placeholder"
                                data-original-title="Message is required"></textarea>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit"
                                    class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn"
                                    value="Send message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12" style="margin-bottom: 20px;">
            <div id="map"> </div>
        </div>
    </div>
</div>

    

    <!-- /PAGE -->
</div>


@endsection
@push('script')
<script>
    function initMap() {
        var geocoder = new google.maps.Geocoder();
        
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: {lat: -37.8136, lng: 144.9631} // Default center, you will replace this
        });

        var address = "Melbourne, Australia"; // Replace with the dynamic address

        geocoder.geocode({'address': address}, function(results, status) {
            console.log('Geocoding results:', results);
            console.log('Geocoding status:', status);
            
            if (status === 'OK') {
                // Your existing code...
            } else {
                console.error('Geocode was not successful for the following reason: ' + status);
            }
        });

    }

    $("#contact-form #submit_btn").click(function () {
        // validate and process form
        // first hide any error messages
        $('#contact-form .error').hide();

        var name = $("#contact-form input#name").val();
        if (name == "" || name == "Name..." || name == "Name" || name == "Name *" || name == "Type Your Name...") {
            $("#contact-form input#name").tooltip({placement: 'bottom', trigger: 'manual'}).tooltip('show');
            $("#contact-form input#name").focus();
            return false;
        }
        var email = $("#contact-form input#email").val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //console.log(filter.test(email));
        if (!filter.test(email)) {
            $("#contact-form input#email").tooltip({placement: 'bottom', trigger: 'manual'}).tooltip('show');
            $("#contact-form input#email").focus();
            return false;
        }
        var subject = $("#contact-form input#subject").val();
        if (subject == "" || subject == "Subject") {
            $("#contact-form input#subject").tooltip({placement: 'bottom', trigger: 'manual'}).tooltip('show');
            $("#contact-form input#subject").focus();
            return false;
        }
        var message = $("#contact-form #input-message").val();
        if (message == "" || message == "Message..." || message == "Message" || message == "Message *" || message == "Type Your Message...") {
            $("#contact-form #input-message").tooltip({placement: 'bottom', trigger: 'manual'}).tooltip('show');
            $("#contact-form #input-message").focus();
            return false;
        }

        var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
        //alert (dataString);return false;

        $.ajax({
            type:"POST",
            url:"{{ route('save-contact') }}",
            data:dataString,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function () {
                $('#contact-form').append("<div class=\"alert alert-success fade in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button><strong>Contact Form Submitted!</strong> We will be in touch soon.</div>");
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
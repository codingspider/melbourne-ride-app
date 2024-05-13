<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ $general->business_name ?? 'Website title' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('frontEnd/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/setting/' . ($general->favicon ?? '')) }}">
        @meta
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- CSS Global -->
    <link href="{{ asset('frontEnd/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/owl-carousel2/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('frontEnd/assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/css/theme-red-1.css') }}" rel="stylesheet" id="theme-config-link">
    <!-- Head Libs -->
    <script src="{{ asset('frontEnd/assets/plugins/modernizr.custom.js') }}"></script>
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        #map {
            height: 300px;
        }

        .location-input {
            width: 300px;
            margin: 10px;
        }

        .icone {
            background: #f0c540;
            height: 45px;
            width: 45px;
            line-height: 45px;
            text-align: center;
            color: #fff;
            border-radius: 100%;
            font-size: 23px;
        }
        .float{
        	position:fixed;
        	width:40px;
        	height:40px;
        	bottom:20px;
        	left:20px;
        	background-color:#0C9;
        	color:#FFF;
        	border-radius:50px;
        	text-align:center;
        	box-shadow: 2px 2px 3px #999;
        }
        
        .my-float{
        	margin-top:8px;
        	font-size:25px;
        }
    </style>

    @stack('style')
</head>

<body id="home" class="wide">


    <!-- WRAPPER -->
    <div class="wrapper">
        @include('modal.common')
        <!-- HEADER -->
        @include('theme.partials.header')
        <!-- /HEADER -->

        <!-- CONTENT AREA -->
        <div class="content-area">

            @yield('content')

        </div>
        <!-- /CONTENT AREA -->

        <!-- FOOTER -->
        @include('theme.partials.footer')
        <!-- /FOOTER -->

        <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
        <a href="https://wa.me/+61433185032" target="_blank" class="float">
            <i class="fab fa-whatsapp my-float"></i>
        </a>

    </div>
    <!-- /WRAPPER -->

    <script src="{{ asset('frontEnd/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDai8HsIbrVH_ndV2kOQTfqebphSjtZm0A&libraries=places&callback=initMap"></script>
    <script>
        $(document).on("click", ".btn_modal", function(e) {
            e.preventDefault();
            var url = $(this).attr("href");
            $.ajax({
                type: "GET",
                url: url,
                data: {},
                success: function(res) {
                    $("div#common_modal").html(res).modal("show");

                },
            });
        });

        $('#newsletterForm').submit(function(e) {
            e.preventDefault();
            var formData = {
                email: $('#email').val(),
            };

            // Make an AJAX request to the Laravel backend
            $.ajax({
                type: 'POST',
                url: '/newsletter', // Update the URL to your Laravel route
                data: formData,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    alert('Newsletter subscription successful');
                },
                error: function(error) {
                    alert('Newsletter subscription failed. Please try again.');
                }
            });
        });

        $(document).ready(function() {
            $('.select2').select2();

            $(document).on('input', '#point_a', function() {
                pointPickupAutocomplete();
            });

            $(document).on('input', '#point_b', function() {
                pointDropAutocomplete();
            });

            function pointPickupAutocomplete() {
                var point_a = document.getElementById('point_a');
                var option_a = {
                    types: ['geocode'], // Restrict results to addresses
                    componentRestrictions: {
                        country: 'AU'
                    } // Restrict results to Australia
                };
                var autocomplete = new google.maps.places.Autocomplete(point_a, option_a);
                // console.log(autocomplete);
            }

            function pointDropAutocomplete() {
                var point_b = document.getElementById('point_b');
                var option_b = {
                    types: ['geocode'], // Restrict results to addresses
                    componentRestrictions: {
                        country: 'AU'
                    } // Restrict results to Australia
                };
                var autocomplete = new google.maps.places.Autocomplete(point_b, option_b);
            }
        });
    </script>
    <script>
        // success message popup notification
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        // info message popup notification
        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        // warning message popup notification
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        // error message popup notification
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>

    <script>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
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
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Melbourne Limolink",
  "description": "Melbourne Limolink provides premium chauffeur services, tours, and transportation in Melbourne, Victoria, Australia.",
        "url": "https://www.melbournelimolink.com",
        "logo": "https://www.melbournelimolink.com/assets/images/setting/melbourne-limolink-logo.png",
        "image": "https://www.melbournelimolink.com/assets/images/setting/melbourne-limolink-chauffeur-service.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "29 Golden Ash Court, Meadow Heights",
    "addressLocality": "Melbourne",
    "postalCode": "3048",
    "addressRegion": "Victoria",
    "addressCountry": "Australia"
  },
  "telephone": "+61433185032",
  "openingHours": [
    "Saturday 08:00-18:00",
    "Sunday 08:00-18:00",
    "Monday 08:00-18:00",
    "Tuesday 08:00-18:00",
    "Wednesday 08:00-18:00",
    "Thursday 08:00-18:00",
    "Friday 08:00-18:30"
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "270"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer support",
    "telephone": "+61433185032",
    "takesBooking": "Yes"
    }
}
</script>

    @stack('script')
</body>

</html>

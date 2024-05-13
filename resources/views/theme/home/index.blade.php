@extends('theme.layouts.app')
@section('title', 'Home page')
@push('style')
<style>
.get-quote {
    text-align: center;
}

/* Optional: To center the form inputs horizontally */
.form-search.light {
    display: flex;
    justify-content: center;
}

.quote_form {
    background: #fcb900;
    padding: 10px;
}

.quote-btn {
    margin-top: 28px;
}

.carousel-caption {
    top: 30%;
    transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    text-align: center;
}

/* Responsive styles for larger screens */
@media only screen and (min-width: 601px) {
    .carousel-caption {
        top: 50%;
    }

    .sliderImg {
        max-height: 70vh;
        object-fit: cover;
        width: 100%;
    }
    
    .col-md-4 {
        width: 29.333333%;
    }
}
.bootstrap-datetimepicker-widget {
    background-color: #F0C540;
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
    
</style>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
@endpush
@section('content')
<!-- PAGE -->
<section class="page-section no-padding">
    <div class="container full-width">
        <div id="mainslider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($sliders as $index => $slider)
                <li data-target="#mainslider" data-slide-to="{{ $index }}" @if($index===0) class="active" @endif></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $index => $slider)
                <div class="item @if($index === 0) active @endif">
                    <img src="{{ asset('assets/images/slider/' . $slider->image) }}" class="sliderImg"
                        alt="{{ $slider->title }}">
                    <div class="carousel-caption">
                        <h2 class="caption-subtitle">{{ $slider->title ?? '' }}</h2>
                        <p class="caption-text" style="color: #fff">
                            {{ $slider->short_description ?? '' }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#mainslider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mainslider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row text-center" style="margin-top: -37px;">
            <div class="col-md-12">
                <div class="get-quote">
                    <div class="form-search quote_form">
                        <form action="{{ route('get-qoute-booking-form') }}" method="GET">
                            <div class="row row-inputs">
                                <div class="col-md-3">
                                    <div class="form-group has-icon has-label">
                                        <select name="service_id" id="service_id" class="form-control">
                                            <option value="">Service Type</option>
                                            @foreach (allServices() as $key => $service)
                                            @if($service != 'Weddings' && $service != 'Private Tour')
                                            <option value="{{ $service }}">{{ $service }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2" style="display:none;" id="airPort">
                                    <div class="form-group has-icon has-label">
                                        <select name="airport_id" class="form-control">
                                            <option value="">Choose Airport</option>
                                            @foreach (allAirports() as $key => $service)
                                            <option value="{{ $service }}">{{ $service }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2" style="display:show;" id="pickUp">
                                    <div class="form-group has-icon has-label">
                                        <input type="text" class="form-control" id="pick_up" name="pick_up"
                                            placeholder="Pick up Subrub">
                                    </div>
                                </div>
                                
                                <div class="col-md-2" style="display:show;" id="dropOFF">
                                    <div class="form-group has-icon has-label">
                                        <input type="text" class="form-control" id="drop_off" name="drop_off"
                                            placeholder="Drop off Subrub">
                                    </div>
                                </div>
                                
                                <div class="col-md-2" style="display:none;" id="numberOfHour">
                                    <div class="form-group has-icon has-label">
                                        <input type="text" class="form-control" id="number_of_hour" name="number_of_hour"
                                            placeholder="Number of Hour">
                                    </div>
                                </div>

                                <div class="col-md-3" style="display:show;" id="pickUpDate">
                                    <div class="form-group has-icon has-label">
                                        <input type="text" class="form-control datepicker" id="pick_up_date" name="pick_up_date"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button class="btn btn-theme" style="background-color: #54595F"> Get Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <h2 class="section-title"><span>{{ $data->section_title ?? '' }}</span></h2>
        <p>{!! $data->section_description ?? '' !!}</p>
        <hr class="page-divider small">
        <div class="row">
            @if($data->section_block_1_title && $data->section_block_1_description)
            <div class="col-md-4">
                <h2 class="block-title">{{ $data->section_block_1_title ?? '' }}</h2>
                <p>{!! $data->section_block_1_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_2_title && $data->section_block_2_description)
            <div class="col-md-4">
                <h2 class="block-title">{{ $data->section_block_2_title ?? '' }}</h2>
                <p>{!! $data->section_block_2_description ?? '' !!}</p>

            </div>
            @endif
            @if($data->section_block_3_title && $data->section_block_3_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_3_title ?? '' }}</h2>
                        <p>{!! $data->section_block_3_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_4_title && $data->section_block_4_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_4_title ?? '' }}</h2>
                        <p>{!! $data->section_block_4_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_5_title && $data->section_block_5_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_5_title ?? '' }}</h2>
                        <p>{!! $data->section_block_5_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_6_title && $data->section_block_6_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_6_title ?? '' }}</h2>
                        <p>{!! $data->section_block_6_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_7_title && $data->section_block_7_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_7_title ?? '' }}</h2>
                        <p>{!! $data->section_block_7_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_8_title && $data->section_block_8_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_8_title ?? '' }}</h2>
                        <p>{!! $data->section_block_8_description ?? '' !!}</p>
            </div>
            @endif
            @if($data->section_block_9_title && $data->section_block_9_description)
            <div class="col-md-4">
            <h2 class="block-title">{{ $data->section_block_9_title ?? '' }}</h2>
                        <p>{!! $data->section_block_9_description ?? '' !!}</p>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6">
                <p>{{ $data->stats_one_title}}</p>
            </div>
            <div class="col-md-6">
                <p>{{ $data->stats_two_title}}</p>
            </div>
        </div>
</section>
<!-- /PAGE -->

@include('theme.home.vehicles')
<section class="page-section image">
    <div class="container text-center">
        <h1 style="color: #000; font-weight:bold; font-size: 30px; margin-top: 20px; margin-bottom: 20px">Why Choose
            Melbourne Limolink Chauffeur Services</h1>
        <div class="row">
            @foreach($whychooses as $why)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="margin-bottom: 20px">
                            <img src="{{ asset('assets/images/whychoose/'.$why->photos) }}" class="img-rounded">
                        </div>
                        <h4 style="color: #000">{{ $why->title ?? '' }}</h4>
                        <p>
                            {{ $why->description }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-6">
                <p>{{ $data->stats_three_title}}</p>
            </div>
            <div class="col-md-6">
                <p>{{ $data->stats_four_title}}</p>
            </div>
        </div>
    </div>
</section>


<!-- PAGE -->
<section class="page-section no-padding no-bottom-space-off">
    <div class="container full-width">
        <div class="stm-call-to-action heading-font" style="background-color:#273F44;">
            <div class="clearfix">
                <div class="col-md-8 col-md-offset-2 mt-5 mb-5">
                    <div class="d-flex justify-content-between align-items-center"
                        style="margin-top: 20px; margin-bottom: 20px">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 style="color: #fff; font-weight: bold;">What Do You Know About Us</h2>
                                <p style="color: #fff">
                                    Melbourne LimoLink is a Melbourne-based car chauffeur business. We are available 24
                                    hours a day – 7 days a week. We are contactable by phone, SMS, email and available
                                    during all times of the day.
                                    We have Various service cars throughout Melbourne. Our professional drivers are
                                    knowledgeable about both metropolitan Melbourne.
                                </p>
                                <a href="{{ route('home.about') }}" class="btn btn-warning"> Our Company </a>
                            </div>
                            <div class="col-md-6">
                                <div id="reviews"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- call to action  -->
        <div class="stm-call-to-action heading-font" style="background-color:#f0c540;">
            <div class="clearfix">
                <div class="col-md-8 col-md-offset-2 mt-5 mb-5" style="margin-top: 50px; margin-bottom: 50px">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="row">
                            <div style="font-weight: bold; font-size: 30px" class="col-md-6">
                                HAVE A QUESTIONS? <span style="color: #fff">FEEL FREE TO ASK…</span>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('home.contact') }}" class="btn"
                                    style="color: #000;font-weight: bold; font-size: 20px">
                                    <span>{{ $general->business_number }} (24/7) </span> <span
                                        style="border: 1px solid black; padding: 10px">Contact US</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google map -->
        <div class="google-map">
            <iframe loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5216.733676774254!2d144.95934879298824!3d-37.81271813731573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2sMelbourne+VIC+3004%2C+Australia!5e0!3m2!1sen!2sbd!4v1537088852695"
                width="100%" height="450" frameborder="0" style="border: 0px; pointer-events: none;"
                allowfullscreen=""></iframe>
        </div>
        <!-- /Google map -->
    </div>
</section>
<!-- /PAGE -->
@endsection

@push('script')
<script language="javascript" src="https://momentjs.com/downloads/moment.js"></script>
<script language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDai8HsIbrVH_ndV2kOQTfqebphSjtZm0A">
</script>
<script>
$(document).ready(function() {
    getReviews();
    function initializeAutocomplete(id) {
        var element = document.getElementById(id);
        if (element) {
            const autocomplete = new google.maps.places.Autocomplete(
                element, {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'AU'
                    }
                }
            );
            autocomplete.addListener('place_changed', onPlaceChanged);
        }
    }

    function onPlaceChanged() {
        var place = this.getPlace();
    }

    google.maps.event.addDomListener(window, 'load', function() {
        initializeAutocomplete('pick_up');
        initializeAutocomplete('drop_off');
    });

    $('.datepicker').datetimepicker({
        ignoreReadonly: true
    });

    $('#service_id').on('change', function(e) {
        let serviceId = $(this).val();

        if(serviceId == 'From Airport'){
            $('#pickUp').hide();
            $('#airPort').show();
            $('#dropOFF').show();
            $('#numberOfHour').hide();
        }
        
        if(serviceId == 'To Airport'){
            $('#dropOFF').hide();
            $('#airPort').show();
            $('#pickUp').show();
            $('#numberOfHour').hide();
        }
        
        if(serviceId == 'Point-to-Point'){
            $('#pickUp').show();
            $('#dropOFF').show();
            $('#airPort').hide();
            $('#numberOfHour').hide();
        }
        
        if(serviceId == 'Hourly/As Directed'){
            $('#pickUp').show();
            $('#dropOFF').hide();
            $('#airPort').hide();
            $('#numberOfHour').show();
        }
    });
    
    
    function getReviews(){
        console.log('ok');
        $.ajax({
            url: '{{ route("google-reviews") }}',
            method: 'GET',
            'dataType' : 'html',
            success: function(response) {
                console.log(response);
                $('#reviews').html(response);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
                $('#reviews').text('Error: ' + xhr.responseText);
            }
        });
    }
});
</script>

@endpush
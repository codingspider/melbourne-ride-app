@extends('theme.layouts.app')
@section('title', $page->title)
@section('content')
    <style>
        .bgimage {
            background-image: url('{{ asset('assets/images/pagebanner/' . $page->section_1_image) }}');
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        @media screen and (min-width:300px) and (max-width:317px) {
            .vertical-center .content {
                top: 50%;
                left: 17% !important;
                transform: translateY(20%) !important;
                width: 81% !important;
            }

            .btn-theme-md {
                padding: 9px 9px;
            }
        }

        @media screen and (min-width:300px) and (max-width:500px) {
            .bgimage {
                width: 100%;
                height: 300px;
            }
        }

        .bgseven {
            background-image: url('{{ asset('assets/images/pagebanner/' . $page->section_7_image) }}');
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        .vertical-center {
            position: relative;
        }

        .vertical-center .content {
            position: absolute;
            top: 50%;
            left: 18%;
            transform: translateY(90%);
            width: 100%;
        }


        .header-color {
            color: #111;
        }


        @media screen and (min-width:300px) and (max-width:500px) {
            .bgseven {
                width: 100%;
                height: 300px;
            }

        }

        @media screen and (min-width:318px) and (max-width:500px) {
            .vertical-center .content {
                top: 50%;
                left: 16%;
                transform: translateY(16%);
                width: 75%;
            }

            .btn-theme-md {
                padding: 12px 9px;
            }
        }

        @media screen and (min-width:501px) and (max-width:720px) {
            .vertical-center .content {
                position: absolute;
                top: 50%;
                left: 16%;
                transform: translateY(55%);
                width: 60%;
            }
        }

        @media screen and (min-width:720px) and (max-width:760px) {
            .vertical-center .content {
                position: absolute;
                top: 50%;
                left: 19%;
                transform: translateY(50%);
                width: 75%;
            }
        }

        @media screen and (min-width:760px) and (max-width:900px) {
            .vertical-center .content {
                position: absolute;
                top: 50%;
                left: 19%;
                transform: translateY(50%);
                width: 100%;
            }
        }

        .header-class {
            margin-top: 0px !important;
        }

        .section_8_margin {
            margin-top: 0px !important;
        }
    </style>


    @if ($page->section_1_heading)
        <div class="container bgimage">
            <div class="row">
                <div class="col-md-6 col-sm-6 vertical-center">
                    <div class="content">
                        <h1 style="font-size: 20px; color: white">{{ $page->section_1_heading }}</h1>
                        <h2 style="font-size: 13px; color: white">{{ $page->section_1_subheading }}</h2>
                        <p class="btn-row">
                            <a href="{{ $page->section_1_book_button_url }}" class="btn btn-theme btn-theme-md">{{ $page->section_1_book_button_title ?? 'Button' }}</a>
                            <a href="{{ $page->section_1_qoute_button_url }}" class="btn btn-theme btn-theme-md">{{ $page->section_1_qoute_button_title ?? 'Button' }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($page->section_2_content)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-md-12 content" id="content">
                        <h3 class="text-center header-color">{{ $page->section_2_title }}</h3>
                        <p>
                            {!! $page->section_2_content !!}
                        </p>
                    </div>
                    <!-- /CONTENT -->
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/page/' . $page->section_3_image) }}"
                            alt="{{ $page->section_3_image_alt_tag }}" style="width: 100%">
                    </div>

                    <div class="col-md-6">
                        <h3 class="header-class">{{ $page->section_3_title }}</h3>
                        <p>{!! $page->section_3_content !!}</p>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if ($page->section_4_content)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/page/' . $page->section_4_image) }}"
                            alt="{{ $page->section_4_image_alt_tag }}" srcset="" style="width: 100%">
                    </div>

                    <div class="col-md-6">
                        <h3 class="header-class">{{ $page->section_4_title }}</h3>
                        <p>{!! $page->section_4_content !!}</p>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if ($page->section_5_content)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/page/' . $page->section_5_image) }}"
                            alt="{{ $page->section_5_image_alt_tag }}" srcset="" style="width: 100%">
                    </div>

                    <div class="col-md-6">
                        <h3 class="header-class">{{ $page->section_5_title }}</h3>
                        <p>{!! $page->section_5_content !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($page->section_6_content)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center header-color">{{ $page->section_6_title }}</h3>
                        <p>{!! $page->section_6_content !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($page->section_7_heading)
        <section class="page-section">
            <div class="container bgseven">
                <div class="col-md-6 vertical-center">
                    <div class="content">
                        <p style="font-size: 28px; color: white">{{ $page->section_7_heading }}</p>
                        <p style="font-size: 16px; color: white">{{ $page->section_7_subheading }}</p>
                        <p class="btn-row">
                            <a href="{{ $page->section_7_book_button_url }}" class="btn btn-theme btn-theme-md">{{ $page->section_7_book_button_title ?? 'Button' }}</a>
                            <a href="{{ $page->section_7_qoute_button_url }}" class="btn btn-theme btn-theme-md">{{ $page->section_7_qoute_button_title ?? 'Button' }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($page->section_8_1_heading)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="header-color">{{ $page->section_8_1_heading }}</h3>
                        <p>{!! $page->section_8_1_text !!}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="header-color">{{ $page->section_8_2_heading }}</h3>
                        <p>{!! $page->section_8_2_text !!}</p>
                    </div>
                </div>
                <div class="row section_8_margin">
                    <div class="col-md-6 section_8_margin" style="margin-top: 0px !important;">
                        <h3 class="header-color">{{ $page->section_8_3_heading }}</h3>
                        <p>{!! $page->section_8_3_text !!}</p>
                    </div>
                    <div class="col-md-6 section_8_margin" style="margin-top: 0px !important;">
                        <h3 class="header-color">{{ $page->section_8_4_heading }}</h3>
                        <p>{!! $page->section_8_4_text !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($page->section_9_text)
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="header-color">{{ $page->section_9_heading }}</h3>
                        <p>{!! $page->section_9_text !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                @if ($page->why_choose_us)
                    <div class="col-md-6" style="margin-top:10px !important">
                        <p>{!! $page->why_choose_us !!}</p>
                        <p class="btn-row">
                            <a href="{{ $page->why_choose_button_url }}" class="btn btn-theme btn-theme-md">{{ $page->why_choose_button_title ?? "Button" }}</a>
                            @if(Request::is('wedding-car-hire'))
                            <a href="{{ url('wedding-car-hire-prices-melbourne') }}" class="btn btn-theme btn-theme-md">WEDDING PACKAGES</a>
                            @elseif (Request::is('melbourne-private-tour-packages'))
                            <a href="{{ url('private-tour-package') }}" class="btn btn-theme btn-theme-md">PRIVATE TOUR PACKAGES</a>
                            @else

                            @endif
                        </p>
                    </div>
                @endif
                @forelse ($faqs as $key=>$faq)
                    <div class="col-md-6">
                        <!-- FAQ -->
                        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span class="dot"></span> {{ $faq->title }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading2">
                                    <div class="panel-body">
                                        {!! $faq?->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ -->
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>

@endsection

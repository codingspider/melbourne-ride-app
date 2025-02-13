<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $general->business_name }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontEnd/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('frontEnd/assets/ico/favicon.ico') }}">

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
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="header-wrapper">
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('frontEnd/assets/img/logo-rentit.png') }}" alt="Rent It"/></a>
                </div>
                <!-- /Logo -->

                <!-- Mobile menu toggle button -->
                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                <!-- /Mobile menu toggle button -->

                <!-- Navigation -->
                <nav class="navigation closed clearfix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- navigation menu -->
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li class="active"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="car-listing.html">Hot Deals</a></li>
                                <li><a href="car-listing.html">Vehicles</a></li>
                                <li><a href="faqs.html">FAQS</a></li>
                                <li class="megamenu sale"><a href="#">Features</a>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Paragraph</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                <p>Suspendisse molestie est nec tortor placerat, vel pellentesque metus sollicitudin. Suspendisse congue sem mauris, at ultrices felis blandit non.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Portfolio</span></h4>
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio 3 Columns</a></li>
                                                    <li><a href="portfolio-4col.html">Portfolio 4 Columns</a></li>
                                                    <li><a href="portfolio-alt.html">Portfolio Alternate</a></li>
                                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Pages</span></h4>
                                                <ul>
                                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                                    <li><a href="error-page.html">404 Page</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Pages</span></h4>
                                                <ul>
                                                    <li><a href="car-listing.html">Car Listing</a></li>
                                                    <li><a href="booking.html">Booking & Payment</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Sidebar Left </a></li>
                                        <li><a href="blog-right.html">Blog Sidebar Right</a></li>
                                        <li><a href="blog-post.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /navigation menu -->
                        </div>
                    </div>
                    <!-- Add Scroll Bar -->
                    <div class="swiper-scrollbar"></div>
                </nav>
                <!-- /Navigation -->

            </div>
        </div>

    </header>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section no-padding slider">
            <div class="container full-width">

                <div class="main-slider">
                    <div class="owl-carousel" id="main-slider">

                        <!-- Slide 2 -->
                        <div class="item slide2 ver2">
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <!-- Search form -->
                                                <div class="form-search light">
                                                    <form action="#">
                                                        <div class="form-title">
                                                            <i class="fa fa-globe"></i>
                                                            <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpLocation2">Picking Up Location</label>
                                                                        <input type="text" class="form-control" id="formSearchUpLocation2" placeholder="Airport or Anywhere">
                                                                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffLocation2">Picking Off Location</label>
                                                                        <input type="text" class="form-control" id="formSearchOffLocation2" placeholder="Airport or Anywhere">
                                                                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-7">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpDate2">Picking Up Date</label>
                                                                        <input type="text" class="form-control datepicker" id="formSearchUpDate2" placeholder="dd/mm/yyyy">
                                                                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpHour2">Picking Up Hour</label>
                                                                        <input type="text" class="form-control" id="formSearchUpHour2" placeholder="20:00 AM">
                                                                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-7">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffDate2">Picking Off Date</label>
                                                                        <input type="text" class="form-control datepicker" id="formSearchOffDate2" placeholder="dd/mm/yyyy">
                                                                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffHour2">Picking Up Hour</label>
                                                                        <input type="text" class="form-control" id="formSearchOffHour2" placeholder="20:00 AM">
                                                                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-submit">
                                                            <div class="container-fluid">
                                                                <div class="inner">
                                                                    <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a>
                                                                    <button type="submit" id="formSearchSubmit2" class="btn btn-submit btn-theme pull-right">Find Car</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /Search form -->

                                                <h2 class="caption-subtitle">Find Your Car!<br/> Rent A Car Theme</h2>
                                                <p class="caption-text">
                                                    Vivamus in est sit amet risus rutrum facilisis sed ut mauris. Aenean aliquam ex ut sem aliquet, eget vestibulum erat pharetra. Maecenas vel urna nulla. Mauris non risus pulvinar.
                                                </p>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme btn-theme-md" href="#">See All Vehicles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 2 -->

                        <!-- Slide 1 -->
                        <div class="item slide1 ver1">
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title">All Discounts Just For You</h2>
                                                <h3 class="caption-subtitle">Find Best Rental Car</h3>
                                                <!-- Search form -->
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-10 col-md-offset-1">

                                                        <div class="form-search dark">
                                                            <form action="#">
                                                                <div class="form-title">
                                                                    <i class="fa fa-globe"></i>
                                                                    <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpLocation">Picking Up Location</label>
                                                                                <input type="text" class="form-control" id="formSearchUpLocation" placeholder="Airport or Anywhere">
                                                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpDate">Picking Up Date</label>
                                                                                <input type="text" class="form-control datepicker" id="formSearchUpDate" placeholder="dd/mm/yyyy">
                                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchUpHour">Picking Up Hour</label>
                                                                                <input type="text" class="form-control" id="formSearchUpHour" placeholder="20:00 AM">
                                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-inputs">
                                                                    <div class="container-fluid">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffLocation">Dropping Off Location</label>
                                                                                <input type="text" class="form-control" id="formSearchOffLocation" placeholder="Airport or Anywhere">
                                                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffDate">Dropping Off Date</label>
                                                                                <input type="text" class="form-control datepicker" id="formSearchOffDate" placeholder="dd/mm/yyyy">
                                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group has-icon has-label">
                                                                                <label for="formSearchOffHour">Dropping Off Hour</label>
                                                                                <input type="text" class="form-control" id="formSearchOffHour" placeholder="20:00 AM">
                                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-submit">
                                                                    <div class="container-fluid">
                                                                        <div class="inner">
                                                                            <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a>
                                                                            <button type="submit" id="formSearchSubmit" class="btn btn-submit btn-theme pull-right">Find Car</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /Search form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 1 -->

                        <!-- Slide 3 -->
                        <div class="item slide3 ver3">
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <!-- Search form -->
                                                <div class="form-search light">
                                                    <form action="#">
                                                        <div class="form-title">
                                                            <i class="fa fa-globe"></i>
                                                            <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpLocation3">Picking Up Location</label>
                                                                        <input type="text" class="form-control" id="formSearchUpLocation3" placeholder="Airport or Anywhere">
                                                                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffLocation3">Picking Off Location</label>
                                                                        <input type="text" class="form-control" id="formSearchOffLocation3" placeholder="Airport or Anywhere">
                                                                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-7">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpDate3">Picking Up Date</label>
                                                                        <input type="text" class="form-control datepicker" id="formSearchUpDate3" placeholder="dd/mm/yyyy">
                                                                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpHour3">Picking Up Hour</label>
                                                                        <input type="text" class="form-control" id="formSearchUpHour3" placeholder="20:00 AM">
                                                                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-7">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffDate3">Picking Off Date</label>
                                                                        <input type="text" class="form-control datepicker" id="formSearchOffDate3" placeholder="dd/mm/yyyy">
                                                                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffHour3">Picking Up Hour</label>
                                                                        <input type="text" class="form-control" id="formSearchOffHour3" placeholder="20:00 AM">
                                                                        <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-submit">
                                                            <div class="container-fluid">
                                                                <div class="inner">
                                                                    <i class="fa fa-plus-circle"></i> <a href="#">Advanced Search</a>
                                                                    <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme pull-right">Find Car</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /Search form -->

                                                <h2 class="caption-title">For rental Cars</h2>
                                                <h3 class="caption-subtitle">Best Deals</h3>
                                                <p class="caption-text">
                                                    Sales Up  %45 Off<br/>
                                                    All Rental Cars Start from  49$
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 3 -->

                        <!-- Slide 4 -->
                        <div class="item slide4 ver4">
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title">For rental Cars</h2>
                                                <h3 class="caption-subtitle"><span>Best Deals</span></h3>
                                                <p class="caption-text">
                                                    Sales Up  %45 Off<br/>
                                                    All Rental Cars Start from  49$
                                                </p>
                                                <p class="caption-text">
                                                    <a class="btn btn-theme btn-theme-md" href="#">See All Vehicles</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Slide 4 -->

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-support"></i></div>
                                                <h4 class="caption-title">7/24 Car Support</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-support"></i></div>
                                                <h4 class="caption-title">7/24 Car Support</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                                <h4 class="caption-title">Reservation Anytime</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                                <h4 class="caption-title">Reservation Anytime</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail thumbnail-featured no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="caption">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                                <h4 class="caption-title">Lots of Locations</h4>
                                                <div class="caption-text">Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.</div>
                                                <div class="buttons">
                                                    <span class="btn btn-theme btn-theme-transparent">Read More</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption hovered">
                                        <div class="caption-wrapper div-table">
                                            <div class="caption-inner div-cell">
                                                <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                                <h4 class="caption-title">Lots of Locations</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section dark">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title text-left">
                            <small>What Do You Know About Us</small>
                            <span>Who We Are ?</span>
                        </h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
                        <ul class="list-icons">
                            <li><i class="fa fa-check-circle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-check-circle"></i>Proin tempus sapien non iaculis pretium.</li>
                        </ul>
                        <p class="btn-row">
                            <a href="#" class="btn btn-theme btn-theme-md">See All Vehicles</a>
                            <a href="#" class="btn btn-theme btn-theme-md btn-theme-transparent">Reservation Now</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="owl-carousel img-carousel">
                            <div class="item"><a href="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" alt=""/></a></div>
                            <div class="item"><a href="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" alt=""/></a></div>
                            <div class="item"><a href="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" alt=""/></a></div>
                            <div class="item"><a href="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/slider/slide-775x500x1.jpg') }}" alt=""/></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title">
                    <small>What a Kind of Car You Want</small>
                    <span>Great Rental Offers for You</span>
                </h2>

                <div class="tabs">
                    <ul id="tabs" class="nav"><!--
                        --><li class=""><a href="#tab-1" data-toggle="tab">Best Offers</a></li><!--
                        --><li class="active"><a href="#tab-2" data-toggle="tab">Popular Cars</a></li><!--
                        --><li class=""><a href="#tab-3" data-toggle="tab">Economic Cars</a></li>
                    </ul>
                </div>

                <div class="tab-content">

                    <!-- tab 1 -->
                    <div class="tab-pane fade" id="tab-1">

                        <div class="swiper swiper--offers-best">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>

                    <!-- tab 2 -->
                    <div class="tab-pane fade active in" id="tab-2">

                        <div class="swiper swiper--offers-popular">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-3">

                        <div class="swiper swiper--offers-economic">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x1.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x2.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x3.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}">
                                                    <img src="{{ asset('frontEnd/assets/img/preview/cars/car-370x220x4.jpg') }}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                                                <div class="caption-text">Start from 39$/per a day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i> 2013</td>
                                                        <td><i class="fa fa-dashboard"></i> Diesel</td>
                                                        <td><i class="fa fa-cog"></i> Auto</td>
                                                        <td><i class="fa fa-road"></i> 25000</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section testimonials">
            <div class="container">
                <div class="testimonials-carousel">
                    <div class="owl-carousel" id="testimonials">
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="{{ asset('frontEnd/assets/img/preview/avatars/testimonial-140x140x1.jpg') }}" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="{{ asset('frontEnd/assets/img/preview/avatars/testimonial-140x140x1.jpg') }}" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="{{ asset('frontEnd/assets/img/preview/avatars/testimonial-140x140x1.jpg') }}" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title">
                    <small>Select What You Want</small>
                    <span>Our awesome Rental Fleet cars</span>
                </h2>

                <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                    <ul id="tabs1" class="nav"><!--
                        --><li class=""><a href="#tab-x1" data-toggle="tab">Economic cars</a></li><!--
                        --><li class="active"><a href="#tab-x2" data-toggle="tab">Business cars</a></li><!--
                        --><li class=""><a href="#tab-x3" data-toggle="tab">Premium cars</a></li><!--
                        --><li class=""><a href="#tab-x4" data-toggle="tab">Luxury cars</a></li>
                    </ul>
                </div>

                <div class="tab-content">
                    <!-- tab 1 -->
                    <div class="tab-pane fade" id="tab-x1">
                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs4" class="nav"><!--
                                            --><li class=""><a href="#tab-x1x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x1x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x1x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x1x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x1x4" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-content">

                                            <div class="tab-pane fade" id="tab-x1x1">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x1">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>111.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active in" id="tab-x1x2">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>112.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x3">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>113.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x4">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x4">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>114.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-x1x5">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container" id="swiperSlider1x5">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                    <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="row car-thumbnails"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="car-details">
                                                            <div class="price">
                                                                <strong>115.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                            </div>
                                                            <div class="list">
                                                                <ul>
                                                                    <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                    <li>Under 25,000 Km</li>
                                                                    <li>Transmission Manual</li>
                                                                    <li>5 Year service included</li>
                                                                    <li>Manufacturing Year 2014</li>
                                                                    <li>5 Doors and Panorama View</li>
                                                                </ul>
                                                            </div>
                                                            <div class="button">
                                                                <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 2 -->
                    <div class="tab-pane fade active in" id="tab-x2">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x2" class="nav"><!--
                                            --><li class=""><a href="#tab-x2x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x2x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x2x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x2x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x2x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x2x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>121.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x2x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>122.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>123.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>124.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x2x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider2x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>125.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-x3">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x3" class="nav"><!--
                                            --><li class=""><a href="#tab-x3x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x3x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x3x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x3x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x3x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x3x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>131.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x3x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>132.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>133.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>134.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x3x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider3x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>135.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- tab 4 -->
                    <div class="tab-pane fade" id="tab-x4">

                        <div class="car-big-card">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="tabs awesome-sub">
                                        <ul id="tabs-x4" class="nav"><!--
                                            --><li class=""><a href="#tab-x4x1" data-toggle="tab">VW Passat CC 2.0 TDI</a></li><!--
                                            --><li class="active"><a href="#tab-x4x2" data-toggle="tab">VW Polo 1.6 TDI Comfortline</a></li><!--
                                            --><li class=""><a href="#tab-x4x3" data-toggle="tab">Toyota Corolla 1.6 Elegant</a></li><!--
                                            --><li class=""><a href="#tab-x4x4" data-toggle="tab">Honda Civic Elegance</a></li><!--
                                            --><li class=""><a href="#tab-x4x5" data-toggle="tab">Renoult Megane</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <!-- Sub tabs content -->
                                    <div class="tab-content">

                                        <div class="tab-pane fade" id="tab-x4x1">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x1">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>141.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="tab-x4x2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>142.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>143.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>144.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-x4x5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Swiper -->
                                                    <div class="swiper-container" id="swiperSlider4x5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x1.jpg') }}" alt=""/></a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a class="btn btn-zoom" href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                                <a href="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('frontEnd/assets/img/preview/cars/car-600x426x2.jpg') }}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="row car-thumbnails"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="car-details">
                                                        <div class="price">
                                                            <strong>145.0</strong> <span>$/per a day</span> <i class="fa fa-info-circle"></i>
                                                        </div>
                                                        <div class="list">
                                                            <ul>
                                                                <li>Fuel Diesel / 1600 cm3 Engine</li>
                                                                <li>Under 25,000 Km</li>
                                                                <li>Transmission Manual</li>
                                                                <li>5 Year service included</li>
                                                                <li>Manufacturing Year 2014</li>
                                                                <li>5 Doors and Panorama View</li>
                                                            </ul>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#" class="btn btn-theme ripple-effect btn-theme-dark btn-block">Reservation Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Sub tabs content -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section image">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-heart"></i></div>
                                <div class="caption-number">5657</div>
                                <h4 class="caption-title">Happy costumers</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-car"></i></div>
                                <div class="caption-number">657</div>
                                <h4 class="caption-title">Total car count</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-flag"></i></div>
                                <div class="caption-number">1.255.657</div>
                                <h4 class="caption-title">Total KM/MIL</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-counto no-border no-padding">
                            <div class="caption">
                                <div class="caption-icon"><i class="fa fa-comments-o"></i></div>
                                <div class="caption-number">1255</div>
                                <h4 class="caption-title">Call Center Solutions</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title">
                    <small>See What People Ask to Us</small>
                    <span>FAQS</span>
                </h2>

                <div class="row">
                    <div class="col-md-6">
                        <!-- FAQ -->
                        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- faq1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            <span class="dot"></span> How can ı dorp the rental car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span class="dot"></span> Where can I rent a car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <span class="dot"></span> If I crash a car. What happens?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                    <div class="col-md-6">
                        <!-- FAQ -->
                        <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                            <!-- faq1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading21">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            <span class="dot"></span> How can ı dorp the rental car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading22">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                            <span class="dot"></span> Where can I rent a car?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading22">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading23">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                            <span class="dot"></span> If I crash a car. What happens?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                                    <div class="panel-body">
                                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam sollicitudin aliquet.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section find-car dark">
            <div class="container">

                <form action="#" class="form-find-car">
                    <div class="row">

                        <div class="col-md-3">

                            <h2 class="section-title text-left no-margin">
                                <small>Great Rental Cars</small>
                                <span>Find your car</span>
                            </h2>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group has-icon has-label">
                                <label for="formFindCarLocation">Picking Up Location</label>
                                <input type="text" class="form-control" id="formFindCarLocation" placeholder="Airport or Anywhere">
                                <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group has-icon has-label">
                                <label for="formFindCarDate">Picking Up Date</label>
                                <input type="text" class="form-control datepicker" id="formFindCarDate" placeholder="dd/mm/yyyy">
                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group has-icon has-label">
                                <label for="formFindCarCategory">Price Category</label>
                                <input type="text" class="form-control" id="formFindCarCategory" placeholder="Select Car Group">
                                <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" id="formFindCarSubmit" class="btn btn-block btn-submit btn-theme">Find Car</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section no-padding no-bottom-space-off">
            <div class="container full-width">

                <!-- Google map -->
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- /Google map -->

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title">
                    <small>Rental Magazine Here</small>
                    <span>Recent Blog Posts</span>
                </h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="recent-post alt">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="badge type">Car Service</div>
                                    <div class="badge post"><i class="fa fa-video-camera"></i></div>
                                    <img class="media-object" src="{{ asset('frontEnd/assets/img/preview/blog/recent-post-570x270x1.jpg') }}" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-left">
                                    <div class="meta-date">
                                        <div class="day">21</div>
                                        <div class="month">Dec</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="media-meta">
                                        By isamercan
                                        <span class="divider">|</span><a href="#"><i class="fa fa-comment"></i>13</a>
                                        <span class="divider">|</span><a href="#"><i class="fa fa-heart"></i>346</a>
                                        <span class="divider">|</span><a href="#"><i class="fa fa-share-alt"></i></a>
                                    </div>
                                    <h4 class="media-heading"><a href="#">Amazing Cars here and best offer waits for you</a></h4>
                                    <div class="media-excerpt">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recent-post alt">
                            <div class="media">
                                <a class="media-link" href="#">
                                    <div class="badge type">Repair</div>
                                    <div class="badge post"><i class="fa fa-image"></i></div>
                                    <img class="media-object" src="{{ asset('frontEnd/assets/img/preview/blog/recent-post-570x270x2.jpg') }}" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-left">
                                    <div class="meta-date">
                                        <div class="day">21</div>
                                        <div class="month">Dec</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="media-meta">
                                        By isamercan
                                        <span class="divider">|</span><a href="#"><i class="fa fa-comment"></i>13</a>
                                        <span class="divider">|</span><a href="#"><i class="fa fa-heart"></i>346</a>
                                        <span class="divider">|</span><a href="#"><i class="fa fa-share-alt"></i></a>
                                    </div>
                                    <h4 class="media-heading"><a href="#">Amazing Cars here and best offer waits for you</a></h4>
                                    <div class="media-excerpt">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center margin-top">
                    <a href="#" class="btn btn-theme btn-theme-light btn-more-posts">See All Posts</a>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section image subscribe">
            <div class="container">

                <h2 class="section-title">
                    <small>You Can Follow Us By E Mail</small>
                    <span>Subscrıbe</span>
                </h2>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <p class="text-center">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                        <!-- Subscribe form -->
                        <form action="#" class="form-subscribe">
                            <div class="form-group">
                                <label for="formSubscribeEmail" class="sr-only">Enter your email here</label>
                                <input type="text" class="form-control" id="formSubscribeEmail" placeholder="Enter your email here">
                            </div>
                            <button type="submit" class="btn btn-submit btn-theme btn-theme-dark">Subscribe</button>
                        </form>
                        <!-- Subscribe form -->

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title">
                    <small>Do You Have Any Question or Anything else </small>
                    <span>Costumer service</span>
                </h2>

                <!-- Team row -->
                <div class="row">

                    <!-- Team 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img src="{{ asset('frontEnd/assets/img/preview/team/team-270x270x1.jpg') }}" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Kelly Doe Surname <small>Costumer Service</small></h4>
                                <ul class="team-details">
                                    <li>Skype: team.member</li>
                                    <li>Tel: 555 555-5555</li>
                                    <li><a href="mailto:supportname@gmail.com">supportname@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Team 1 -->

                    <!-- Team 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img src="{{ asset('frontEnd/assets/img/preview/team/team-270x270x2.jpg') }}" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Name and Surname <small>Team Title</small></h4>
                                <ul class="team-details">
                                    <li>Skype: team.member</li>
                                    <li>Tel: 555 555-5555</li>
                                    <li><a href="mailto:supportname@gmail.com">supportname@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Team 2 -->

                    <!-- Team 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img src="{{ asset('frontEnd/assets/img/preview/team/team-270x270x3.jpg') }}" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Jane Elizabeth <small>Tech-Support</small></h4>
                                <ul class="team-details">
                                    <li>Skype: team.member</li>
                                    <li>Tel: 555 555-5555</li>
                                    <li><a href="mailto:supportname@gmail.com">supportname@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Team 3 -->

                    <!-- Team 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img src="{{ asset('frontEnd/assets/img/preview/team/team-270x270x4.jpg') }}" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Anthony Hopkins <small>Costumer Service</small></h4>
                                <ul class="team-details">
                                    <li>Skype: team.member</li>
                                    <li>Tel: 555 555-5555</li>
                                    <li><a href="mailto:supportname@gmail.com">supportname@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team 4 -->

                </div>
                <!-- /Team row -->

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section contact dark">
            <div class="container">

                <!-- Get in touch -->

                <h2 class="section-title">
                    <small>Feel Free to Say Hello!</small>
                    <span>Get in Touch With Us</span>
                </h2>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Contact form -->
                        <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="name">Name</label>
                                            <input
                                                    type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                                    data-toggle="tooltip" title="Name is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="email">Email</label>
                                            <input
                                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                                    data-toggle="tooltip" title="Email is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group af-inner has-icon">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea
                                        name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                        data-toggle="tooltip" title="Message is required"
                                        class="form-control placeholder"></textarea>
                                <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme" id="submit_btn" value="Send message" />
                                </div>
                            </div>

                        </form>
                        <!-- /Contact form -->
                    </div>
                    <div class="col-md-6">

                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

                        <ul class="media-list contact-list">
                            <li class="media">
                                <div class="media-left"><i class="fa fa-home"></i></div>
                                <div class="media-body">Adress: 1600 Pennsylvania Ave NW, Washington, D.C.</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa"></i></div>
                                <div class="media-body">DC 20500, ABD</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-phone"></i></div>
                                <div class="media-body">Support Phone: 01865 339665</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-envelope"></i></div>
                                <div class="media-body">E mails: info@example.com</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-clock-o"></i></div>
                                <div class="media-body">Working Hours: 09:30-21:00 except on Sundays</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-map-marker"></i></div>
                                <div class="media-body">View on The Map</div>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- /Get in touch -->

            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <p class="btn-row text-center">
                            <a href="#" class="btn btn-theme btn-icon-left facebook"><i class="fa fa-facebook"></i>FACEBOOK</a>
                            <a href="#" class="btn btn-theme btn-icon-left twitter"><i class="fa fa-twitter"></i>TWITTER</a>
                            <a href="#" class="btn btn-theme btn-icon-left pinterest"><i class="fa fa-pinterest"></i>PINTEREST</a>
                            <a href="#" class="btn btn-theme btn-icon-left google"><i class="fa fa-google"></i>GOOGLE</a>
                        </p>
                        <div class="copyright">&copy; 2015 Rent It — An One Page Rental Car Theme made with passion by jThemes Studio</div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<!-- JS Global -->
<script src="{{ asset('frontEnd/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/superfish/js/superfish.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/owl-carousel2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.easing.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/jquery.smoothscroll.min.js') }}"></script>
<!--<script src="{{ asset('frontEnd/assets/plugins/smooth-scrollbar.min.js') }}"></script>-->
<script src="{{ asset('frontEnd/assets/plugins/swiper/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/datetimepicker/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('frontEnd/assets/js/theme-ajax-mail.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/theme.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset('frontEnd/assets/plugins/jquery.cookie.js') }}"></script>

<!--<![endif]-->

</body>
</html>
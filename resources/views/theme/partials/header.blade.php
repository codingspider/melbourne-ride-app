<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo d-flex">
                <a href="{{ url('/') }}" style="display:inline">
                    <img src="{{ asset('assets/images/setting/' . ($general->logo ?? '')) }}" style="width: 160px;" alt="{{ $general->application_name }}" />
                </a>
            </div>

            <!-- /Logo -->
            <a href="tel:{{$general->business_number}}" class="ml-3 hidden-lg hidden-md" style="padding-left: 70%;">
                <i class="fa fa-phone" style="border-radius: 50%; border: 1px solid black; padding: 10px; background-color: #F0C540"></i> 
                <span class="visible-md">{{$general->business_number}}</span>
            </a>
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
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('book-now') }}" class="custom_btn">Booking</a>
                            </li>

                            @each('submenu', $menulist, 'menu', 'empty')
                            <li class="dynamicMenu">
                                <a href="#" class="sf-with-ul">
                                    About US
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('home.contact') }}">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('privacy-policy') }}">Privacy and Policy </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('refund-policy') }}">Refund Policy </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ request()->routeIs('home.blog') ? 'active' : '' }}"><a
                                    href="{{ route('home.blog') }}"> Blog</a></li>
                            
                                    <li class="{{ request()->routeIs('home.contact') ? 'active' : '' }}"><a
                                    href="{{ route('get-qoute.create') }}"> Get A Quote</a></li>

                            @if (!Auth::check())
                                <li><a href="{{ route('user-login') }}" class="btn_modal">Login </a></li>
                            @else
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @endif
                            <li>
                                <a href="tel:{{$general->business_number}}">
                                    <i class="fa fa-phone" style="border-radius: 50%; border: 1px solid black; padding: 5px; background-color: #F0C540"></i> 
                                    {{$general->business_number}}
                                </a>
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

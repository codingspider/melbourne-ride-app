<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @if (auth()->user()->is_admin == 1)
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('user-list', 'role-list') ? '' : 'collapsed' }}"
                    data-bs-target="#user-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('user-list', 'role-list') ? 'true' : 'false' }}">
                    <i class="bi bi-people-fill"></i><span>User Management </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="user-nav"
                    class="nav-content {{ request()->routeIs('user-list', 'role-list') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">
                    @can('user-list')
                        <li>
                            <a href="{{ route('user-list') }}"
                                class="{{ request()->routeIs('user-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>User List </span>
                            </a>
                        </li>
                    @endcan
                    @can('role-list')
                        <li>
                            <a href="{{ route('role-list') }}"
                                class="{{ request()->routeIs('role-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>User Role List </span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('coupon-list', 'amenitie-list', 'transport-type-list', 'fare-list', 'service-list') ? '' : 'collapsed' }}"
                    data-bs-target="#service-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('coupon-list', 'amenitie-list', 'transport-type-list', 'fare-list', 'service-list') ? 'true' : 'false' }}">
                    <i class="bi bi-car-front"></i><span>Service Management </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="service-nav"
                    class="nav-content {{ request()->routeIs('coupon-list', 'amenitie-list', 'transport-type-list', 'fare-list', 'service-list') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">

                    @can('coupon-list')
                        <li>
                            <a href="{{ route('coupon-list') }}"
                                class="{{ request()->routeIs('coupon-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span> Coupons </span>
                            </a>
                        </li>
                    @endcan

                    @can('amenitie-list')
                        <li>
                            <a href="{{ route('amenitie-list') }}"
                                class="{{ request()->routeIs('amenitie-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Amenities </span>
                            </a>
                        </li>
                    @endcan

                    @can('transport-list')
                        <li>
                            <a href="{{ route('fleets.index') }}"
                                class="{{ request()->routeIs('fleets.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Fleets</span>
                            </a>
                        </li>
                    @endcan
                    
                    @can('transport-list')
                        <li>
                            <a href="{{ route('vehicles.index') }}"
                                class="{{ request()->routeIs('vehicles.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Vehicles</span>
                            </a>
                        </li>
                    @endcan

                    @can('service-list')
                        <li>
                            <a href="{{ route('subrubs.index') }}"
                                class="{{ request()->routeIs('subrubs.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span> Subrub </span>
                            </a>
                        </li>
                    @endcan

                    @can('service-list')
                        <li>
                            <a href="{{ route('service-list') }}"
                                class="{{ request()->routeIs('service-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Service List </span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li><!-- End Components Nav -->


            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('category-list', 'subcategory-list', 'tag-list', 'post-list') ? '' : 'collapsed' }}"
                    data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('category-list', 'subcategory-list', 'tag-list', 'post-list', 'post-create') ? 'true' : 'false' }}">
                    <i class="bi bi-layout-text-sidebar"></i><span>Blog CMS Management </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="blog-nav"
                    class="nav-content {{ request()->routeIs('category-list', 'subcategory-list', 'tag-list', 'post-list', 'post-create') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">
                    @can('category-list')
                        <li>
                            <a href="{{ route('category-list') }}"
                                class="{{ request()->routeIs('category-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Category List </span>
                            </a>
                        </li>
                    @endcan

                    @can('subcategory-list')
                        <li>
                            <a href="{{ route('subcategory-list') }}"
                                class="{{ request()->routeIs('subcategory-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Sub Category List </span>
                            </a>
                        </li>
                    @endcan

                    @can('tag-list')
                        <li>
                            <a href="{{ route('tag-list') }}"
                                class="{{ request()->routeIs('tag-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Tag List </span>
                            </a>
                        </li>
                    @endcan

                    @can('post-list')
                        <li>
                            <a href="{{ route('post-list') }}"
                                class="{{ request()->routeIs('post-list') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Post List </span>
                            </a>
                        </li>
                    @endcan

                    @can('post-create')
                        <li>
                            <a href="{{ route('post-create') }}"
                                class="{{ request()->routeIs('post-create') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Post create </span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li><!-- End Components Nav -->


            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('setting', 'email-setting', 'database-backup', 'get-log-data', 'application-cache-clear') ? '' : 'collapsed' }}"
                    data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('setting', 'email-setting', 'database-backup', 'get-log-data', 'application-cache-clear') ? 'true' : 'false' }}">
                    <i class="bi bi-gear-fill"></i><span> Application Setting </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="setting-nav"
                    class="nav-content {{ request()->routeIs('setting', 'email-setting', 'database-backup', 'get-log-data', 'application-cache-clear') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('setting') }}"
                            class="{{ request()->routeIs('setting') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>General Setting </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('email-setting') }}"
                            class="{{ request()->routeIs('email-setting') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Email Setting </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('database-backup') }}"
                            class="{{ request()->routeIs('database-backup') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Database Backup</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('get-log-data') }}"
                            class="{{ request()->routeIs('get-log-data') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Log Activity </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('application-cache-clear') }}"
                            class="{{ request()->routeIs('application-cache-clear') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Application Cache Clear </span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customer.index') ? '' : 'collapsed' }}"
                    data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('customer.index') ? 'true' : 'false' }}">
                    <i class="bi bi-person-fill-check"></i><span>Customer Management </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="customer-nav"
                    class="nav-content {{ request()->routeIs('customer.index') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">
                    @can('customer-list')
                        <li>
                            <a href="{{ route('customer.index') }}"
                                class="{{ request()->routeIs('application-cache-clear') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Customer List </span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('sliders.*') ? '' : 'collapsed' }}"
                    data-bs-target="#frontsection-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('frontend-sections.*') ? 'true' : 'false' }}">
                    <i class="bi bi-house-check-fill"></i><span>Home Page Section </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                
                <ul id="frontsection-nav"
                    class="nav-content {{ request()->routeIs('sliders.*') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">
                    @can('slider-list')
                        <li>
                            <a href="{{ route('sliders.index') }}"
                                class="{{ request()->routeIs('sliders.index') ? 'nav-link active' : 'nav-link' }}">
                                <i class="bi bi-circle"></i>
                                <span>Sliders</span>
                            </a>
                        </li>
                    @endcan

                    <li>
                        <a href="{{ route('features.index') }}"
                            class="{{ request()->routeIs('features.index') ? 'nav-link active' : 'nav-link' }}">
                            <i class="bi bi-circle"></i>
                            <span>Feature</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('whychoose.index') }}"
                            class="{{ request()->routeIs('whychoose.index') ? 'nav-link active' : 'nav-link' }}">
                            <i class="bi bi-circle"></i>
                            <span>Choose US </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('packages.index') }}"
                            class="{{ request()->routeIs('packages.index') ? 'nav-link active' : 'nav-link' }}">
                            <i class="bi bi-circle"></i>
                            <span>Packages</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('get-qoute.index') }}"
                            class="{{ request()->routeIs('get-qoute.index') ? 'nav-link active' : 'nav-link' }}">
                            <i class="bi bi-circle"></i>
                            <span>get-qoute</span>
                        </a>
                    </li>

                    @can('page-list')
                        <li>
                            <a href="{{ route('home-page-data') }}"
                                class="{{ request()->routeIs('home-page-data') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Home Page Content </span>
                            </a>
                        </li>
                    @endcan
                    
                    @can('page-list')
                        <li>
                            <a href="{{ route('contact-page-data') }}"
                                class="{{ request()->routeIs('contact-page-data') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Contact Page Content </span>
                            </a>
                        </li>
                    @endcan

                    @can('page-list')
                        <li>
                            <a href="{{ route('pages.index') }}"
                                class="{{ request()->routeIs('pages.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Page List </span>
                            </a>
                        </li>
                    @endcan
                    @can('menu-list')
                        <li>
                            <a href="{{ route('menus.index') }}"
                                class="{{ request()->routeIs('menus.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Menu List </span>
                            </a>
                        </li>
                    @endcan
                    @can('menu-list')
                        <li>
                            <a href="{{ route('faq.index') }}"
                                class="{{ request()->routeIs('faq.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>FAQ List </span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('taxi-booking.index') ? '' : 'collapsed' }}"
                    data-bs-target="#taxi-booking-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('taxi-booking.index') ? 'true' : 'false' }}">
                    <i class="bi bi-cash-stack"></i><span>Booking Management </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="taxi-booking-nav"
                    class="nav-content {{ request()->routeIs('taxi-booking.index') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">
                    @can('taxi-booking-list')
                        <li>
                            <a href="{{ route('taxi-booking.index') }}"
                                class="{{ request()->routeIs('taxi-booking.index') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Booking List </span>
                            </a>
                        </li>
                    @endcan

                    @can('taxi-booking-list')
                        <li>
                            <a href="{{ route('create-invoice') }}"
                                class="{{ request()->routeIs('create-invoice') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Create Invoice </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('manual-invoices') }}"
                                class="{{ request()->routeIs('manual-invoices') ? 'nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Manual Invoices </span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.ticket.pending', 'admin.ticket.closed', 'admin.ticket.answered', 'admin.ticket.answered') ? '' : 'collapsed' }}"
                    data-bs-target="#admin-support-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('admin.ticket.pending', 'admin.ticket.closed', 'admin.ticket.answered', 'admin.ticket.answered', 'admin.ticket.index') ? 'true' : 'false' }}">
                    <i class="bi bi-chat-square-text"></i><span>Support Ticket </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="admin-support-nav"
                    class="nav-content {{ request()->routeIs('admin.ticket.pending', 'admin.ticket.closed', 'admin.ticket.answered', 'admin.ticket.index', 'admin.ticket.answered', 'admin.ticket.index') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('admin.ticket.pending') }}"
                            class="{{ request()->routeIs('admin.ticket.pending') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Pending Ticket </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.ticket.closed') }}"
                            class="{{ request()->routeIs('admin.ticket.closed') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Closed Ticket</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.ticket.answered') }}"
                            class="{{ request()->routeIs('admin.ticket.answered') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Answered Ticket</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.ticket.index') }}"
                            class="{{ request()->routeIs('admin.ticket.index') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>All Ticket</span>
                        </a>
                    </li>

                </ul>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('book-now', 'booking-list', 'payment-list', 'customer-completed-trip', 'customer-pending-trip', 'customer-cancelled-trip') ? '' : 'collapsed' }}"
                    data-bs-target="#user-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('book-now', 'booking-list', 'payment-list', 'customer-completed-trip', 'customer-pending-trip', 'customer-cancelled-trip') ? 'true' : 'false' }}">
                    <i class="bi bi-cash-stack"></i><span>Bookings </span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="user-nav"
                    class="nav-content {{ request()->routeIs('book-now', 'booking-list', 'payment-list', 'customer-completed-trip', 'customer-pending-trip', 'customer-cancelled-trip') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('book-now') }}"
                            class="{{ request()->routeIs('book-now') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Booking Create </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('booking-list') }}"
                            class="{{ request()->routeIs('booking-list') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Booking History </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('payment-list') }}"
                            class="{{ request()->routeIs('payment-list') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Payment History </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('customer-completed-trip') }}"
                            class="{{ request()->routeIs('customer-completed-trip') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Completed Trip </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('customer-pending-trip') }}"
                            class="{{ request()->routeIs('customer-pending-trip') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Pending Trip </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('customer-cancelled-trip') }}"
                            class="{{ request()->routeIs('customer-cancelled-trip') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Cancelled Trip </span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ticket.index', 'ticket.open') ? '' : 'collapsed' }}"
                    data-bs-target="#support-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="{{ request()->routeIs('ticket.index', 'ticket.open') ? 'true' : 'false' }}">
                    <i class="bi bi-chat-left-text"></i><span>Support Center </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="support-nav"
                    class="nav-content {{ request()->routeIs('ticket.index', 'ticket.open') ? '' : 'collapse' }} "
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('ticket.index') }}"
                            class="{{ request()->routeIs('ticket.index') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Tickets </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('ticket.open') }}"
                            class="{{ request()->routeIs('ticket.open') ? 'nav-link' : '' }}">
                            <i class="bi bi-circle"></i><span>Open Ticket</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('credit-cards.index') }}">
                    <i class="bi bi-credit-card"></i>
                    <span>Saved Card </span>
                </a>
            </li><!-- End Dashboard Nav -->
        @endif
    </ul>

</aside><!-- End Sidebar-->

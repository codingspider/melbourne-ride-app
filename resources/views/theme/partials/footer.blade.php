@php 
$contact = \App\Models\ContactPage::latest()->first();
@endphp
<footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">CONTACT INFO</h4>
                            <ul>
                                <li>{{ $contact->mobile_1 }}</li>
                                <li>{{ $contact->mobile_2 }}</li>
                                <li>{{ $contact->mobile_3 }}</li>
                                <li>{{ $contact->address}}</li>
                                <li>{{ $contact->other}}</li>
                                <li>{{ $contact->email }}</li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">USEFUL LINKS</h4>
                            <ul>
                                <li><a href="{{ getStaticPageURL('terms') }}">Terms and Conditions</a></li>
                                <li><a href="{{ getStaticPageURL('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ getStaticPageURL('refund') }}">Refund Policy</a></li>
                                <li><a href="{{ route('home.blog') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">QUICK LINKS</h4>
                            <ul>
                                <li><a href="{{ url('about-us') }}">Private Tour Packages</a></li>
                                <li><a href="{{ url('about-us') }}">Wedding Packages</a></li>
                                <li><a href="{{ getStaticPageURL('about_us') }}">About Us</a></li>
                                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">FOLLOW US</h4>
                            <ul>
                                <li><a href="{{ $contact->facebook }}" class="facebook"><i class="fab fa-facebook"></i> Facebook</a></li>
                                <li><a href="{{ $contact->instagram }}" class="instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
                                <li><a href="{{ $contact->youtube }}" class="twitter"><i class="fab fa-youtube"></i> Youtube</a></li>
                                <li><a href="{{ $contact->trip_adviser }}" class="pinterest"><i class="fab fa-font-awesome"></i> Trip Adviser</a></li>
                                <li><a href="{{ $contact->google }}" class="pinterest"><i class="fab fa-google"></i> Google</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
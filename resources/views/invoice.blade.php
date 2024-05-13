<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('invoice/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="heading">
            <h1>Melbourne Limolink</h1>
            <p>Premium Chauffeur Service Company</p>
        </div>

        <div class="box-container">
            <div class="l-bx">
                <img src="{{ asset('invoice/img/Screenshot_9.png') }}" alt="">
                <div class="content">
                    <p><b>ABN:</b> 36151360502</p>
                    <p><b>Address:</b> 29 Golden Ash court, Meadow</p>
                    <p>Heights, VIC 3048, Melbourne</p>
                    <p><b>Phone:</b> +61 433185032 (Mob 24/7 Open) </p>
                    <p><b>Email:</b> accounts@melbournelimolink.com.au</p>
                    <p><b>Website:</b> www.melbournelimolink.com.au</p>
                </div>
            </div>

            <div class="box">
                <h5>Invoice No. -{{ $invoiceItem->invoice_id }}</h5>
                <p>Payment Details</p>
                <p>Melbourne Limolink</p>
                <p>Bsb 193-879</p>
                <p>Acc 487138959</p>
            </div>

        </div>


        <div class="box-container">
            <div class="l-bx">
                <div>
                    <h5>Invoice To</h5>
                    <p>KYLE SCHNEIDER</p>

                    <div class="contact">
                        <p><i class="fas fa-phone"></i>(987) 888 1022</p>
                        <p><i class="fas fa-envelope"></i>andrewr@email.com</p>
                        <p><i class="fas fa-map-marker-alt"></i>123 Nuggets Street</p>
                    </div>
                </div>
                <div class="content" style="margin-top: 40px;">
                    <div>
                        <h6>INVOICE DATE</h6>
                        <p>{{ dateFormat($invoiceItem->created_at) }}</p>
                    </div>

                    @if($invoiceItem->due_date)
                    <div>
                        <h6>DEU DATE</h6>
                        <p>{{ dateFormat($invoiceItem->due_date)}}</p>
                    </div>
                    @else
                    <div>
                        <h6>DEU DATE</h6>
                        <p>{{ dateFormat($formattedDate)}}</p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="box">
                <h5 style="background: none;">AMOUNT DUE</h5>
                <p style="background: #fffa6a; padding: 6px; font-weight: 600; text-align: center;">${{ $invoiceItem->subtotal}}</p>
            </div>

        </div>

        <!-- ------------------------------ -->

        <div class="table">
            <h5>Trip summary</h5>

            <div class="table-box">

                <div>
                    <p><b>Pickup Date & Time</b></p>
                    <p>{{ dateFormat($invoiceItem->pick_up_date) }}, {{ $invoiceItem->pick_up_time }}</p>
                </div>

                <div>
                    <p>Service Type</p>
                    <p>{{ $invoiceItem->service->name ?? 'N/A'}}</p>
                </div>
                <div>
                    <p>Pick-Up Location</p>
                    <p>{{ $invoiceItem->pick_up_location }}</p>
                </div>
                <div>
                    <p> Drop-Off Location</p>
                    <p>{{ $invoiceItem->drop_off_location }}</p>
                </div>

                @php
                    $return = json_decode($invoiceItem->return_service);
                @endphp

                @if($return->pick_up_date && $return->pick_up_time)
                <div>
                    <p>Return Pickup Date </p>
                    <p>{{ $return->pick_up_date }}</p>
                </div>
                <div>
                    <p>Return Pickup Time</p>
                    <p>{{ $return->pick_up_time }}</p>
                </div>
                @endif

                <div>
                    <p>No. of Passengers</p>
                    <p>{{ $invoiceItem->number_of_passenger ?? 'N/A' }}</p>
                </div>
                <div>
                    <p>Luggage</p>
                    <p>{{ $invoiceItem->number_of_luggage ?? 'N/A' }}</p>
                </div>
                <div>
                    <p>Vehicle Name</p>
                    <p>{{ $invoiceItem->vehicleBooked->name }}</p>
                </div>
                <div>
                    <p>Estimated Fare</p>
                    <p>${{ showAmount($invoiceItem->estimate_fare ?? 0.00) }}</p>
                </div>
                <div>
                    <p>Extra for ({{ $invoiceItem->vehicleBooked->name ?? 'N/a' }})</p>
                    <p>${{ showAmount($invoiceItem->vehicle) }}</p>
                </div>

                @if($invoiceItem->baby_seat)
                <div>
                    <p>Baby Seats</p>
                    <p>${{ showAmount($invoiceItem->baby_seat ?? 0) }}</p>
                </div>
                @endif 

                @if($invoiceItem->stop_over_charge)
                <div>
                    <p>Extra Wait</p>
                    <p>${{ showAmount($invoiceItem->stop_over_charge) }}</p>
                </div>
                @endif

                @if ($invoiceItem->late_night)
                <div>
                    <p>Late Night/Early Morning Pickup</p>
                    <p>${{ showAmount($invoiceItem->late_night) }}</p>
                </div>
                @endif

                @if($invoiceItem->return_fare)
                <div>
                    <p>Return Fare</p>
                    <p>${{ showAmount($invoiceItem->return_fare) }}</p>
                </div>
                @endif

                <div>
                    <p>Total Without GST</p>
                    <p>${{ showAmount($invoiceItem->total_without_gst) }}</p>
                </div>
                <div>
                    <p>GST</p>
                    <p>${{ showAmount($invoiceItem->vat) }}</p>
                </div>
                <div>
                    <p>Total (with GST)</p>
                    <p>${{ showAmount($invoiceItem->subtotal) }}</p>
                </div>
            </div>

        </div>

        <!-- ------------------------------------ -->

        <div class="image-box">

            <div class="image-gallery">
                <h2>Our Private tours</h2>
                <div class="images">
                    <img src="{{ asset('invoice/img/tours.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/tours2.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/tours.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/tours2.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/tours.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/tours2.jpg') }}" alt="">
                </div>
            </div>

            <div class="image-gallery">
                <h2>Our Premium Cars</h2>
                <div class="images">
                    <img src="{{ asset('invoice/img/cars.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/cars2.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/cars.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/cars2.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/cars.jpg') }}" alt="">
                    <img src="{{ asset('invoice/img/cars2.jpg') }}" alt="">
                </div>
            </div>

        </div>

        <!-- -----------  -->

        <div class="tours-info">
            <div>
                <p>1. Great Ocean Road Tour</p>
                <p>2. Phillip Island Tour</p>
                <p>3. Yarra Valley Wine Tour</p>
                <p>4. Puffing Billy Tour</p>
            </div>
            <div>
                <p>5. Snow & SKI Tour</p>
                <p>6. Sightseeing Tour</p>
                <p>7. Mornington Peninsula Tour</p>
                <p>8. Customised Tours</p>
            </div>
        </div>

        <!-- -------  -->

        <div class="contacts">
            <div class="contact-box">
                <h5>follow us on:</h5>
                <div class="c-link">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </div>
            </div>
            <div class="contact-box">
                <img src="{{ asset('invoice/img/Google-logo.png') }}" alt="" style="width: 100%; height: 40px;">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Customer Review</p>
            </div>
            <div class="contact-box"><img style=" object-fit: contain;" src="{{ asset('invoice/img/img.png') }}" alt=""></div>
        </div>

        <!-- --------------------  -->

        <div class="menu-link">
            <a href="#">Privacy Policy |</a>
            <a href="#">Terms and Conditions |</a>
            <a href="#">Refund Policy</a>
        </div>


    </div>
</body>

</html>
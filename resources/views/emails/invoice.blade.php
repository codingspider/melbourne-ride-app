<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <!--<link rel="stylesheet" href="{{ asset('invoice/style.css') }}">-->
    <style>
        
*{
    font-family: Arial, Helvetica, sans-serif;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
}

p{
    font-size: 13px;
}

body{
    max-width: 1000px; margin: 0 auto;  
} 

.container{ 
    background: #ECEFF7;
    padding: 30px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 7px;
}

.heading{
    text-align: center; 
    margin-bottom: 45px;
}
.heading h1{
    font-size: 35px;
    margin-bottom: 10px;
}

.heading p{
    font-size: 16px;
    font-weight: 500;
}

.container .box-container{
    display: flex;
    flex-wrap: wrap;  
    justify-content: space-between; 
    gap: 40px;
    margin-bottom: 20px;
}  
.container .box-container .l-bx{
    display: flex; 
    gap: 1rem;
}
.container .box-container .l-bx .content P{
margin-bottom: 8px;
font-size: 14px;
}

.container .box-container .box h5{
margin-bottom: 15px;
font-size: 18px;
background: #00000016;
padding: 2px 4px;
}

.container .box-container .box P{
margin-bottom: 8px;
font-size: 14px;
}

.container .box-container .l-bx h5{
    padding: 5px;
    font-size: 20px;
    margin-bottom: 10px;
    background: #000;
    color: #fff;
    padding-left: 8px;
}
.container .box-container .l-bx div p{
    margin-bottom: 20px;
}

.container .box-container .l-bx .contact p{
    font-size: 12px;
}
.container .box-container .l-bx div .contact p>i{
    color: #444;
}

.container .box-container .l-bx h6{
margin-bottom: 4px;
font-size: 14px; 
padding: 3px; 
}


.container .box-container .l-bx p{
    margin-bottom: 10px;
}

.container .box-container .l-bx  .contact p{
    margin-bottom: 10px;
}
.container .box-container .l-bx  .contact p i{
    margin-right: 5px;
    color: navy;
}


/* --------------------------------- */

.container .table h5{
    font-size: 20px;
    margin-bottom: 10px;
    padding: 10px;
}

.container .table {
    border: 1px solid orange;
    border-radius: 5px; 
}
.container .table .table-box{
    background: #fff;
}
.container .table .table-box div{
display: flex;
justify-content: space-between; 
border: 1px solid gainsboro;
padding: 10px 12px;
}
.container .table .table-box div p{
    font-size: 13px;
}

/* -------------------------- */


.image-box {
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap; 
    gap: 20px;
}

.image-box .image-gallery{
    flex: 1 1 48%;
}
.image-box .image-gallery h2{
    margin-bottom: 20px;
    font-size: 20px;
}
.image-box .image-gallery .images{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 10px;
}

.image-box .image-gallery .images img{
    width: 100%;height: 90px; object-fit: cover;
    object-fit: cover;
    border-radius: 10px;
}

.image-box .image-gallery:nth-child(2) .images{
    gap: 0;
}
.image-box .image-gallery:nth-child(2) .images img{
    border-radius: 0;
    padding-bottom: 10px;   
}


/* --------------------- */

.tours-info{
    display: flex;
    gap: 30px;
    margin: 20px 0;
}

.tours-info div p{
    margin-bottom: 7px;
    font-size: 15px;
    font-weight: 600;
}

/* ------------ */

.contacts{
    display: flex;
    flex-wrap: wrap;
}

.contacts .contact-box{
    padding: 10px;  
    border-right: 2px solid orange; 
    background: #fff;
    text-align: center;
}
.contacts .contact-box:last-child{
    border: none;
}
.contacts .contact-box img{
    height: 60px;
    width: 100px;
    object-fit: cover;
}
.contacts .contact-box h5{
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 600;
}
.contacts .contact-box .c-link a{
    padding: 7px;
    font-size: 12px;
    background: #000;
    color: #fff;
    text-decoration: none;
    border-radius: 50%;
}
.contacts .contact-box .stars{
    margin-bottom: 6px;
}
.contacts .contact-box .stars i{
    color: orange;
    font-size: 12px;
}

.menu-link{
    margin-top: 25px;
}
.menu-link a{
    font-size: 14px;
    text-decoration: none;
    font-weight: 600;
    color: #000;
}
    </style>
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
                <h5>Invoice No. -{{ $book->invoice_id }}</h5>
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
                        <p>{{ dateFormat($book->created_at) }}</p>
                    </div>

                    @if($book->due_date)
                    <div>
                        <h6>DEU DATE</h6>
                        <p>{{ dateFormat($book->due_date)}}</p>
                    </div>
                    @else

                    @endif
                </div>
            </div>

            <div class="box">
                <h5 style="background: none;">AMOUNT DUE</h5>
                <p style="background: #fffa6a; padding: 6px; font-weight: 600; text-align: center;">${{ $book->subtotal}}</p>
            </div>

        </div>

        <!-- ------------------------------ -->

        <div class="table">
            <h5>Trip summary</h5>

            <div class="table-box">

                <div>
                    <p><b>Pickup Date & Time</b></p>
                    <p>{{ dateFormat($book->pick_up_date) }}, {{ $book->pick_up_time }}</p>
                </div>

                <div>
                    <p>Service Type</p>
                    <p>{{ $book->service->name ?? 'N/A'}}</p>
                </div>
                <div>
                    <p>Pick-Up Location</p>
                    <p>{{ $book->pick_up_location }}</p>
                </div>
                <div>
                    <p> Drop-Off Location</p>
                    <p>{{ $book->drop_off_location }}</p>
                </div>

                @php
                    $return = json_decode($book->return_service);
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
                    <p>{{ $book->number_of_passenger ?? 'N/A' }}</p>
                </div>
                <div>
                    <p>Luggage</p>
                    <p>{{ $book->number_of_luggage ?? 'N/A' }}</p>
                </div>
                <div>
                    <p>Vehicle Name</p>
                    <p>{{ $book->vehicleBooked->name }}</p>
                </div>
                <div>
                    <p>Estimated Fare</p>
                    <p>${{ showAmount($book->estimate_fare ?? 0.00) }}</p>
                </div>
                <div>
                    <p>Extra for ({{ $book->vehicleBooked->name ?? 'N/a' }})</p>
                    <p>${{ showAmount($book->vehicle) }}</p>
                </div>

                @if($book->baby_seat)
                <div>
                    <p>Baby Seats</p>
                    <p>${{ showAmount($book->baby_seat ?? 0) }}</p>
                </div>
                @endif 

                @if($book->stop_over_charge)
                <div>
                    <p>Extra Wait</p>
                    <p>${{ showAmount($book->stop_over_charge) }}</p>
                </div>
                @endif

                @if ($book->late_night)
                <div>
                    <p>Late Night/Early Morning Pickup</p>
                    <p>${{ showAmount($book->late_night) }}</p>
                </div>
                @endif

                @if($book->return_fare)
                <div>
                    <p>Return Fare</p>
                    <p>${{ showAmount($book->return_fare) }}</p>
                </div>
                @endif

                <div>
                    <p>Total Without GST</p>
                    <p>${{ showAmount($book->total_without_gst) }}</p>
                </div>
                <div>
                    <p>GST</p>
                    <p>${{ showAmount($book->vat) }}</p>
                </div>
                <div>
                    <p>Total (with GST)</p>
                    <p>${{ showAmount($book->subtotal) }}</p>
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
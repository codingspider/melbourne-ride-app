<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css"
        integrity="sha512-DQ8AYRNJzvNabl2m6fcjEtXqhT7LoW4NsmYF31qUaavTFJfFHAs8zFuCpxOwWmn8rqrXpANVDZgvjO9bnAmLDw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .invoice-title h2,
    .invoice-title h3 {
        display: inline-block;
    }

    .table>tbody>tr>.no-line {
        border-top: none;
    }

    .table>thead>tr>.no-line {
        border-bottom: none;
    }

    .table>tbody>tr>.thick-line {
        border-top: 2px solid;
    }

    .section .container {
        max-width: 880px;
        padding: 20px 25px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        border-radius: 10px;
        background: #fff;
    }

    .section .invoice-title img {
        width: 30%;
        height: 30px;
    }

    .invoic-date {
        margin-top: -40px;
    }

    .pay-to {
        text-align: right;
    }

    .section p {
        line-height: 10px;
    }

    .section .bg-gray {
        background: #f5f6fa;
    }

    .terms,
    .table-responsive {
        border-radius: 10px;
    }

    .list-item ul {
        list-style-type: square;
    }

    .invoice_btns a {
        text-decoration: none;
    }

    .invoice_btn {
        color: #B9B4C7;
    }

    .section .invaddress .cs-box {
        width: 49%;
    }

    @media (max-width: 590px) {
        .section .invaddress {
            display: block !important;
        }

        .section .invaddress .cs-box {
            margin-bottom: 20px;
            width: 100%;
        }
    }
    </style>

</head>

<body style="background-color: #f5f7ff !important;">
    <section class="section" id="messageDiv">
        <div class="container border my-5">
            <div class="row top-bar">
                <div class="col-md-12">
                    <div class="invoice-title d-flex justify-content-between ">
                        <div>
                            <p>Reservation NO: {{ $booking->order_id}}</p>
                            <p>Issue Date: </b>{{ showDateTime($booking->created_at) }}</p>
                        </div>
                        <img src="{{ asset('assets/images/setting/'.gs()->logo) }}" alt="">
                    </div>
                    <hr>
                </div>
            </div>
            <div class="mb-2 d-flex justify-content-between invaddress">
                <div class="cs-box">
                    <div class="cs-box"
                        style="border: 2px solid #eaeaea !important; padding: 5px 10px !important; !important; border-radius: 5px !important;  min-width: 150px !important; text-align: center;">
                        <p class="cs-mb5">No Of Days</p>
                        <p class="cs-accent_color" style="color: #2ad19d; font-weight: 700; font-size: 20px;">
                            {{ getDaysFromDate($booking->from_date, $booking->to_date) }} Days</p>
                    </div>
                </div>
                <div class="cs-box">
                    <div class="cs-invoice_right">
                        <b class="cs-primary_color">{{ $booking->service->name }}</b>
                    </div>
                </div>
                <div class="cs-box">
                    <div class="cs-box"
                        style="border: 2px solid #eaeaea !important; padding: 5px 10px !important; !important; border-radius: 5px !important;  min-width: 150px !important; text-align: center;">
                        <p class="cs-mb5">Distance</p>
                        <p class="cs-accent_color" style="color: #2ad19d; font-weight: 700; font-size: 20px;">
                            {{$booking->total_km}} KM</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between invaddress" style="padding: 0 20px;">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td><b>Start Location : </b> {{ $booking->start_location }} </td>
                            <td><b>Pick up time : </b> {{ $booking->pickup_time }} </td>
                            <td><b>Booking Date : </b>{{ $booking->from_date }}</td>
                            <td><b>Drop-off : </b> {{ $booking->end_location }} </td>
                            <td><b>To Date </b>{{ showDateTime($booking->to_date, 'Y-m-d') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div style="border: 1px solid #eaeaea; border-radius: 6px; padding:5px 20px;">
                <div class="row">
                    <h6><strong>Customer Info</strong></h6>
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <td> <b>Name</b> : {{ $booking->customer->name }}
                                    {{ $booking->customer->last_name }}</td>
                                <td> <b>Phone</b>: {{ $booking->customer->phone }}</td>
                                <td> <b>Address</b> : {{ $booking->customer->address }}</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <hr>
                @php 
                $transport = getVhicleInformation($booking->driver->id);
                @endphp
                <div class="d-flex justify-content-between invaddress">
                    <div class="cs-box" style="border: 1px solid #eaeaea; border-radius: 6px; padding:5px 20px;">
                        <h6><strong>Car Information</strong></h6>
                        <p>Car Model: {{ $transport->driver_transport_detail->name }}</p>
                        <p>Registration No: {{ $transport->driver_transport_detail->register_no }}</p>
                        <p>Model NO: {{ $transport->driver_transport_detail->model_no }}</p>
                        <p>Engine No: {{ $transport->driver_transport_detail->engine_no }}</p>
                    </div>
                    <div class="cs-box" style="border: 1px solid #eaeaea; border-radius: 6px; padding:5px 20px;">
                        <h6><strong>Driver Information</strong></h6>
                        <div class="d-flex">
                            <p>Driver Name:</p>
                            <p> {{ $booking->driver->name }}</p>
                        </div>
                        <div class="d-flex">
                            <p>Driving Licence: {{ $booking->driver->license_number }}</p>
                        </div>
                        <div class="d-flex">
                            <p>Contact:</p>
                            <p>{{ $booking->driver->phone_number }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table_responsive">
                        <table class="border table" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th>Service Details</th>
                                    <th>Fare</th>
                                    <th>Total KM</th>
                                    <th>Tax</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $booking->service->name }}</td>
                                    <td>{{ $booking->base_fare }}</td>
                                    <td>{{ $booking->total_km }}</td>
                                    <td>{{ $booking->tax }}</td>
                                    <td>{{ $booking->discount }}</td>
                                    <td>{{ $booking->final_total }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table_responsive">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                    <b>Payment Method</b><br> {{ $booking->payment_method }}
                                    </td>
                                    <td></td>
                                    <td>
                                        <p></p>
                                    </td>
                                    <td>Payment Status : </td>
                                    <td>
                                    @forelse ($booking->payment as $payment)
                                    {!! $payment->badgePaymentData() !!}
                                    @empty
                                    There is no payment data !
                                    @endforelse
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="tm_bottom_invoice_left">
                    <p style="color: #B9B4C7; font-size: 18px;">Thank you for your business.</p>
                </div>
            </div>
        </div>

        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            window.print();
        });
    </script>
</body>

</html>
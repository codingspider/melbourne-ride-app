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
    </style>

</head>

<body style="background-color: #f5f7ff !important;">
    <section class="section">
        <div class="container border my-5">
            <div class="row top-bar">
                <div class="col-md-12">
                    <div class="invoice-title d-flex justify-content-between ">
                        <div>
                            <p>Reservation NO: {{ $book->order_id}}</p>
                            <p>Issue Date: </b>{{ showDateTime($book->created_at) }}</p>
                        </div>
                        <img src="{{ asset('assets/images/setting/'.gs()->logo) }}" alt="">
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="cs-invoice_right">
                        <b class="cs-primary_color">{{ $book->service->name }}</b>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0 20px;">
                <div class="col-md-6">
                    <div>
                        <b>Pick-Up:</b>
                        <p>{{ $book->pick_up_location }}</p>
                        <p>{{ $book->pick_up_time }}</p>
                        <p>{{ $book->pick_up_date }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs-mb20">
                        <b class="cs-primary_color">Drop-off:</b>
                        <p class="cs-mb0">{{ $book->drop_off_location }} </p>
                        <p>{{ $book->number_of_passenger }}</p>
                    </div>
                </div>
            </div>
            @php 
            $passanger = json_decode($book->passanger_infos);
            @endphp 
            <div style="border: 1px solid #eaeaea; border-radius: 6px; padding:5px 20px;">
                <div class="row">
                    <h6><strong>Passanger Info</strong></h6>
                    <div class="col-md-4">
                        <div class="d-flex">
                            <p><strong>Name:</strong></p>
                            <p> {{ $passanger->first_name }} {{ $passanger->last_name }} </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex">
                            <p><strong>Phone Number:</strong></p>
                            <p>{{ $passanger->phone }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex">
                            <p><strong>Address: </strong></p>
                            <p> {{ $passanger->first_name }}</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table_responsive">
                        <table class="border table" style="width: 100%; ">
                            <thead>
                                <tr>
                                    <th>Service Details</th>
                                    <th>Fare</th>
                                    <th>Tax</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $book->service->name }}</td>
                                    <td>{{ $book->subtotal }}</td>
                                    <td>{{ $book->vat }}</td>
                                    <td>{{ $book->discount }}</td>
                                    <td>{{ $book->subtotal  + $book->vat }}</td>
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
                                    <b>Payment Method</b><br> {{ $book->payment_method }}
                                    </td>
                                    <td></td>
                                    <td>
                                        <p></p>
                                    </td>
                                    <td>Payment Status : </td>
                                    <td>
                                    @forelse ($book->payment as $payment)
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
                    <p style="color: #111; font-size: 12px; font-weight: 700;">Terms & Condition</p>
                    <p style="color: #666; font-size: 12px; margin-top: -10px;">IInvoice was created on a computer and
                        is valid without the signature and seal.</p>
                </div>
            </div>

        </div>

        </div>
    </section>
</body>

</html>
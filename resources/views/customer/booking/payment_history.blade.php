@extends('admin.layouts.app')
@section('title', 'Booking History')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Payment History </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Payment History </h5>

                            <table class="table table-bordered">
                            <tr>
                                <th>Sl.NO </th>
                                <th>Paid Amount </th>
                                <th>Discount </th>
                                <th>Payment Method </th>
                                <th>Payment Date </th>
                            </tr>
                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $payment->total_amount }}</td>
                                <td>{{ $payment->discount_amount }}</td>
                                <td>{{ $payment->payment_method }}</td>
                                <td>{{ dateFormat($payment->created_at) }}</td>
                            </tr>
                            @endforeach

                        </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </div>
</section>
@endsection

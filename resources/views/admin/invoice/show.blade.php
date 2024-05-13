@extends('admin.layouts.app')
@section('title', 'Invoice Show')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Invoice Show </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered mt-3">
                            <tbody>
                                <tr>
                                    <th>Client Name</th>
                                    <td>{{ $invoice->client_name }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number </th>
                                    <td>{{ $invoice->mobile_number }}</td>
                                </tr>
                                <tr>
                                    <th>Pick up location </th>
                                    <td>{{ $invoice->pick_up_location }}</td>
                                </tr>
                                <tr>
                                    <th>Drop off location </th>
                                    <td>{{ $invoice->drop_off_location }}</td>
                                </tr>
                                <tr>
                                    <th>Pick up date </th>
                                    <td>{{ $invoice->pick_up_date }}</td>
                                </tr>
                                <tr>
                                    <th>Pick up time </th>
                                    <td>{{ $invoice->pick_up_time }}</td>
                                </tr>
                                <tr>
                                    <th>Return Pick up </th>
                                    <td>{{ $invoice->retun_pick_up }}</td>
                                </tr>
                                <tr>
                                    <th>Return drop off </th>
                                    <td>{{ $invoice->return_drop_off }}</td>
                                </tr>
                                <tr>
                                    <th>Extra charge </th>
                                    <td>{{ $invoice->extra_wait }}</td>
                                </tr>
                                <tr>
                                    <th>Baby seat </th>
                                    <td>{{ $invoice->baby_seat }}</td>
                                </tr>

                                <tr>
                                    <th>Hours</th>
                                    <td>{{ $invoice->hours }}</td>
                                </tr>

                                <tr>
                                    <th>Vehicle Type</th>
                                    <td>{{ $invoice->vehicle_type }}</td>
                                </tr>

                                <tr>
                                    <th>No of passanger </th>
                                    <td>{{ $invoice->no_of_passangers }}</td>
                                </tr>
                                
                                <tr>
                                    <th>Service Type </th>
                                    <td>{{ $invoice->service_type }}</td>
                                </tr>
                                
                                <tr>
                                    <th>Flight Number </th>
                                    <td>{{ $invoice->flight_number }}</td>
                                </tr>
                                <tr>
                                    <th>Stops </th>
                                    <td>{{ $invoice->add_stop }}</td>
                                </tr>
                                <tr>
                                    <th>Other charge </th>
                                    <td>{{ $invoice->other_charge }}</td>
                                </tr>
                                <tr>
                                    <th>GST</th>
                                    <td>{{ $invoice->gst }}</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td>{{ $invoice->discount }}</td>
                                </tr>
                                <tr>
                                    <th>Lately/Early Charge</th>
                                    <td>{{ $invoice->late_early_charge }}</td>
                                </tr>
                                <tr>
                                    <th>Invoice Total </th>
                                    <td>{{ $invoice->invoice_total }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ route('print-invoice', $invoice->id) }}" class="btn btn-info">Print</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

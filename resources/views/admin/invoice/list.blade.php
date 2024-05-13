@extends('admin.layouts.app')
@section('title', 'Invoice List')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Invoice List </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Mobile Number</th>
                                    <th>Pick-Up Location</th>
                                    <th>Drop-Off Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $invoice)
                                <tr>
                                    <td>{{ $invoice->client_name }}</td>
                                    <td>{{ $invoice->mobile_number }}</td>
                                    <td>{{ $invoice->pick_up_location }}</td>
                                    <td>{{ $invoice->drop_off_location }}</td>
                                    <td>
                                        <a href="{{ route('edit-invoice', $invoice->id) }}" class="btn btn-info btn-sm">Edit </a>
                                        <a href="{{ route('show-invoice', $invoice->id) }}" class="btn btn-danger btn-sm">Show </a>
                                        <a href="{{ route('print-invoice', $invoice->id) }}" class="btn btn-warning">Print</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

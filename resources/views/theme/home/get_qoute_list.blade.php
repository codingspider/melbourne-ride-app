@extends('admin.layouts.app')
@section('title', 'Get Qoutes')
@section('content')

<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Get Qoutes </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter" style="padding-right: 25px;">

                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Qoute List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>PicUp Date/Time</th>
                                        <th>Passenger No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getQoutes as $item)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->pick_a_date . ' ' . $item->pick_time . $item->am_pm }}</td>
                                        <td>{{ $item->pessengerNo }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </div>
</section>
@endsection

@push('custom-script')

@endpush
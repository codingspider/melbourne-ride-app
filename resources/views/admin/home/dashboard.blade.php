@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

@if(auth()->user()->is_admin == 1)
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Booking <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $todayBookings }}</h6>
                                    @if($percentageChange > 0)
                                    <span class="text-success small pt-1 fw-bold">{{ $percentageChange }}%</span>
                                    <span class="text-muted small pt-2 ps-1">increase
                                    </span>
                                    @else
                                    <span class="text-danger small pt-1 fw-bold">{{ $percentageChange }} %</span>
                                    <span class="text-muted small pt-2 ps-1">decrease</span>
                                    @endif

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-md-4">
                    <div class="card info-card revenue-card">

                        <div class="card-body">
                            <h5 class="card-title">Bookings <span>| Yesterday</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $yesterdayBookings }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-md-4">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">All Active <span>| Customers</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $customers }}</h6>

                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- End Customers Card -->



                <!-- Customers Card -->
                <div class="col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Payment Report By Payment Method </h5>
                            <div id="paymentChart"></div>
                        </div>
                    </div>
                </div><!-- End Customers Card -->

                <div class="col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Reports Summery </h5>

                            <!-- Line Chart -->
                            <div id="reportsChart"></div>
                            <!-- End Line Chart -->

                        </div>
                    </div>
                </div><!-- End Customers Card -->



            </div>
        </div><!-- End Left side columns -->


        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Recent Bookings </h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Servoce</th>
                                <th scope="col">Fainal Total </th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $item)
                            <tr>
                                <th scope="row">{{ $loop->index +1 }}</th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->service->name  }}</td>
                                <td>{{ $item->final_total }}</td>
                                <td>{!! $item->badgeData() !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div><!-- End Left side columns -->
    </div>
</section>
@endif

@endsection

@push('custom-script')
<!-- Your HTML and other scripts -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    // Fetch data using AJAX
    fetch('/chart-data')
        .then(response => response.json())
        .then(data => {
            new ApexCharts(document.querySelector("#reportsChart"), {
                series: [{
                    name: 'Bookings',
                    data: data.sales,
                }, {
                    name: 'Revenue',
                    data: data.revenue
                }, {
                    name: 'Customers',
                    data: data.customers
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: {
                        show: false
                    },
                },
                markers: {
                    size: 4
                },
                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                fill: {
                    opacity: 1
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2
                },
                xaxis: {
                    type: 'datetime',
                    categories: data.dates
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            }).render();
        });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Fetch data using AJAX
    fetch('/pie-chart-data')
        .then(response => response.json())
        .then(data => {
            var options = {
                series: data.data,
                chart: {
                    width: 380,
                    type: 'donut',
                },
                labels: data.labels,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#paymentChart"), options);
            chart.render();
        });
});
</script>

@endpush
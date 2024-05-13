@extends('theme.layouts.app')
@section('title', 'Packages')
@push('style')
    <style>
        .price-section {
            padding: 40px 0;
        }

        .price {
            background: #e9e9e9;
        }

        .price_list {
            padding: 10px 0;
            border-bottom: 1px solid rgb(241, 201, 100);
        }

        .price_list:last-child {
            border-bottom: none;
        }

        .hedding-color {
            background: rgb(235, 184, 55) !important;
        }

        .package-title {
            color: black;
            padding-top: 20px;
        }

        .list-group {
            margin-bottom: 0px;
        }
    </style>
@endpush
@section('content')
    <div class="content-area price">
        <!-- PAGE -->
        <section class="page-section  ">
            <div class="container">
                <h2 class="text-center package-title"> <strong>{{ $title }}</strong> </h2>
                <div class="row price-section">
                    @foreach ($packages as $package)
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default  ">
                                <div class="panel-heading"
                                    style="background: {{ $package?->bg_color }}; color: {{ $package?->text_color }}">
                                    <h4 class="panel-title" style="text-align: center; font-weight: bold">{{ $package?->title }}</h4>
                                </div>
                                <div class="panel-body" style="text-align: center;">
                                    <h4 class="text-center">From ${{ $package?->price }} AUD</h4>
                                    <ul class="list-group" style="text-align: left;">
                                        @php
                                            $features = App\Models\Feature::whereIn(
                                                'id',
                                                json_decode($package->features_id),
                                            )->get();

                                        @endphp
                                        @foreach ($features as $feature)
                                            <li class="price_list">{{ $feature?->title }}</li>
                                        @endforeach
                                    </ul>
           
                                    @if(\Str::after(url()->current(), url('/')) == '/private-tour-package')
                                        <form action="{{ url('get-qoute-booking-form') }}" id="PrivateForm1" method="GET">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="service_id" value="Private Tour">
                                            <input type="hidden" name="package_name" value="{{ $package->title }}">
                                            <button type="submit" class="btn btn-theme btn-theme-md bookNowPrice">Book Now</button>
                                        </form>
                                    @else
                                        <form action="{{ url('get-qoute-booking-form') }}" id="PrivateForm2" method="GET">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="service_id" value="Weddings">
                                            <input type="hidden" name="package_name" value="{{ $package->title }}">
                                            <button type="submit" class="btn btn-theme btn-theme-md bookNowPrice">Book Now</button>
                                        </form>
                                    @endif

                                    
                                </div>
                            </div>
                        </div>
                    @endforeach

                    
                </div>

            </div>
        </section>
    </div>
@endsection
@push('script')
<script>
    $(document).on('click', '.bookNowPrice', function(e){
        
    });
</script>
@endpush

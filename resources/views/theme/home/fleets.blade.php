<!-- PAGE -->

<style>
    .bgseven {
        background-image: url('{{ asset('assets/images/pagebanner/65cd004d862ad1707933773.jpg') }}');
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: center;
        height: 500px;
    }

    .vechile_image {
        width: 100%;
        height: 156px;
        /*object-fit: cover;
        border: 1px solid #d5d5d5;
        margin: 6px; */
    }

    .vechile-body:hover {
        background: rgb(231, 229, 64);
        transition: .4s;
    }

    .vehicle {
        background: rgb(223 220 220 / 40%) !important;
        padding: 20px !important;
        margin-bottom: 20px !important;
    }

    .vechile-title {
        color: black;
        padding-bottom: 30px;
    }

    @media screen and (min-width:300px) and (max-width:500px) {
        .bgseven {
            width: 100%;
            height: 300px;
        }

    }
</style>


<section class="page-section vehicle">
    <div class="container">
        <h3 class="text-center vechile-title">VEHICLE CATEGORIES</h3>
        @foreach ($fleets as $key => $fleet)
            <div class="col-md-4 col-2 vertical-center  ">
                <div class="panel panel-default vechile-body">
                    <div class="panel-body">
                        <h4 class="text-center" style="color:black"> {{ $fleet->name }} </h4>
                        <h4 class="text-center" style="color:black"> ${{ $fleet->price }} </h4>

                        <div class="row">
                            <div class="col-md-6 col-sm-3">
                                <img src="{{ asset('assets/images/placeholder/convenient.png') }}" height="30px"
                                    alt="" srcset=""> <span
                                    style="font-weight: bold; font-size: 15px">{{ $fleet->passanger ?? 'N/A' }}
                                    Persons</span>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/placeholder/suitcase.png') }}" height="30px"
                                    alt="" srcset=""> <span
                                    style="font-weight: bold; font-size: 15px">{{ $fleet->luggage ?? 'N/A' }}
                                    Luggages</span>
                            </div>
                            <div class="col-md-12">
                                <img src="{{ asset('assets/images/placeholder/bag.png') }}" height="30px"
                                    alt="" srcset=""> <span
                                    style="font-weight: bold; font-size: 15px">{{ $fleet->hand_bag ?? 'N?A' }}
                                    H. Carries</span>
                            </div>
                            @foreach (json_decode($fleet->photos) as $carphoto => $photo)
                                @if ($carphoto == 0)
                                    <div class="col-md-12">
                                        <img class="vechile_image" src="{{ asset('assets/images/carphotos/'.$photo) }}" alt="">
                                    </div>
                                @endif
                            @endforeach

                            <div class="col-md-6" style="margin-left: 5px;">
                                <a class="btn btn-theme" href="{{ route('book-now') }}">Rent It</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- /PAGE -->

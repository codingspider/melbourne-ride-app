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
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border: none; /* Remove border */
}

</style>


<section class="page-section vehicle">
    <div class="container">
        <h3 class="text-center vechile-title">VEHICLE CATEGORIES</h3>
        @foreach ($fleets as $key => $fleet)
        <div class="col-md-4 col-2 vertical-center">
            <div class="panel panel-default vechile-body">
                <div class="panel-body">
                    <h4 class="text-center" style="color:black"> {{ $fleet->name }} </h4>
                    <table class="table table-no-border">
                        <tr>
                            <td>
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/images/placeholder/2.jpg') }}" height="20px"
                                        alt="" srcset=""> <span
                                        style="font-weight: bold; font-size: 12px;white-space: nowrap;">{{ $fleet->passanger ?? 'N/A' }}
                                        Persons</span>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/images/placeholder/1.jpg') }}" height="20px"
                                        alt="" srcset=""> <span
                                        style="font-weight: bold; font-size: 12px;white-space: nowrap;">{{ $fleet->luggage ?? 'N/A' }}
                                        Luggages</span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/images/placeholder/3.jpg') }}" height="20px" alt=""
                                        srcset=""> <span
                                        style="font-weight: bold; font-size: 12px;white-space: nowrap;">{{ $fleet->hand_bag ?? 'N?A' }}
                                        H. Carries</span>
                                </div>
                            </td>
                            <!-- <td>
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/images/placeholder/wifi-signal.png') }}" height="30px"
                                        alt="" srcset=""> <span
                                        style="font-weight: bold; font-size: 12px">{{ $fleet->wifi ?? 'N?A' }}</span>
                                </div>
                            </td> -->
                        </tr>
                        <!-- <tr>
                            <td>
                                <div class="col-md-12">
                                    <img src="{{ asset('assets/images/placeholder/video-player.png') }}" height="30px"
                                        alt="" srcset=""> <span
                                        style="font-weight: bold; font-size: 12px">{{ $fleet->movie ?? 'N?A' }}</span>
                                </div>
                            </td>
                        </tr> -->
                    </table>
                    <div class="col-md-12">
                                <img class="vechile_image" src="{{ asset('assets/images/carphotos/'.$fleet->photos) }}" alt="">
                            </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- /PAGE -->
<section class="page-section with-sidebar sub-page">
    <!-- CONTENT -->
    <div class="col-md-12" id="content">
        <div class="row">
            @forelse($items as $item)
            <div class="col-md-4">
                <input type="hidden" name="fleet_id" value="{{$item->id}}">

                <div class="thumbnail no-border no-padding thumbnail-car-card">
                    <div class="media">
                        @foreach(json_decode($item->photos) ?? [] as $key => $value)
                        @if($key == 0)
                        <a class="media-link" data-gal="prettyPhoto" href="#">
                            <img src="{{ asset('assets/images/carphotos/'. $value) }}" alt="{{ $item->name }}" style="object-fit: cover;" class="img-fluid">
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <div class="caption text-center table-responsive">
                        <h4 class="caption-title"><a href="#">{{ $item->name }}</a></h4>
                        <h4 class="caption-title"><a href="#">${{ $item->price + $service_charge }}</a></h4>
                        <div class="buttons">
                            <a class="btn btn-theme fleet" href="{{ route('select-fleet', $item->id) }}">Choose Your Vehicle</a>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('assets/Persons.png') }}" height="30px"
                                            alt="" srcset=""> <span
                                            style="font-weight: bold; font-size: 15px">{{ $item->passanger ?? 'N/A' }}
                                            Persons</span></td>
                                    <td><img src="{{ asset('assets/H Carries.png') }}" height="30px"
                                            alt="" srcset=""> <span
                                            style="font-weight: bold; font-size: 15px">{{ $item->luggage ?? "N/A"}}
                                            Luggages</span></td>
                                    <td><img src="{{ asset('assets/luggauges.png') }}" height="30px" alt=""
                                            srcset=""> <span
                                            style="font-weight: bold; font-size: 15px">{{ $item->hand_bag ?? 'N?A'}} H.
                                            Carries</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @empty 
            <p>No Vehicle found !</p>
            @endforelse
        </div>


    </div>
    <!-- /CONTENT -->
</section>

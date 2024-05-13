<table class="table table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>Persons</td>
            <td>Hand Bag</td>
            <td>Luggage</td>
            <td>Image</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->passanger }}</td>
            <td>{{ $item->hand_bag }}</td>
            <td>{{ $item->luggage }}</td>
            <td>
                @foreach(json_decode($item->photos) ?? [] as $key => $value)
                @if($key == 0)
                <a class="media-link" data-gal="prettyPhoto" href="{{ asset('assets/images/carphotos/'. $value) }}">
                    <img style="height: 50px" src="{{ asset('assets/images/carphotos/'. $value) }}"
                        alt="{{ $item->name }}">
                </a>
                @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div class="row">
                    <form action="{{ route('fare-estimator') }}" method="POST" id="fareEstimate">

                    <div class="col-md-12">
                        <div class="row">
                            @foreach ($amenities as $amenitie)
                            <div class="col-md-4">
                                <div class="inner yellow-border">
                                    <div class="stm_top clearfix">
                                        <div class="stm_left heading-font">
                                            <h4>{{ $amenitie->name }}</h4>
                                            <div class="price">
                                                <mark>From</mark>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{ $amenitie->cost }}</bdi>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="stm_image text-left">
                                        <img src="{{ asset('assets/images/amenite/'.$amenitie->photo) }}">
                                    </div>


                                    <div class="col-md-12">
                                        <div class="input-group number-input">
                                            <span class="input-group-btn">
                                                <a class="btn btn-default decrement" style="background-color: #F0C540">-</a>
                                            </span>
                                            <input id="quantity" name="amenitie[{{$amenitie->id}}][baby_seat]" class="form-control quantity" type="number"
                                                value="0" style="height: 34px">
                                            <span class="input-group-btn">
                                                <a class="btn btn-default increment" style="background-color: #F0C540">+</a>
                                            </span>

                                            <input type="hidden" name="amenitie[{{$amenitie->id}}][amenitie_id]" value="{{$amenitie->id}}">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="left">
                            <div class="overflowed">
                                <button class="btn btn-theme pull-right" type="submit">Next </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </td>
        </tr>
    </tbody>
</table>
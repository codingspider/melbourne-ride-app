<div class="col-md-12 content car-listing" id="content">
    <h3 class="block-title alt mt-md-3"><i class="fa fa-angle-down"></i>Select Vehicle </h3>
    <!-- Car Listing -->
    @foreach($items as $item)
    <input type="hidden" name="fleet_id" value="{{$item->id}}">
    <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
        <div class="media">
            @foreach(json_decode($item->photos) as $key => $value)
            @if($key == 0)
            <a class="media-link" data-gal="prettyPhoto" href="{{ asset('assets/images/carphotos/'. $value) }}">
                <img src="{{ asset('assets/images/carphotos/'. $value) }}" alt="">
                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
            </a>
            @endif
            @endforeach
        </div>
        <div class="caption">
            <h4 class="caption-title"><a href="#">{{ $item->name }}</a></h4>
            <h5 class="caption-title-sub">{{ $item->price ?? 'Price not available.' }}</h5>
            <div class="caption-text">
                {{$item->details }}
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td><i class="fa fa-car"></i> {{ $item->model ?? 'N/A'}}</td>
                        <td><i class="fa fa-dashboard"></i> {{ $item->fuel_type ?? "N/A"}}</td>
                        <td><i class="fa fa-cog"></i> {{ $item->gear_type ?? 'N?A'}}</td>
                        <td><i class="fa fa-road"></i> {{ $item->running_km ?? 'N/A'}}</td>
                        @if($button)
                        <td class="buttons"><a class="btn btn-theme fleet"
                                href="{{ route('select-fleet', $item->id) }}">Rent It</a></td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach

    
</div>
@foreach($items as $item)
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
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td><i class="fa fa-car"></i> {{ $item->model ?? 'N/A'}}</td>
                        <td><i class="fa fa-dashboard"></i> {{ $item->fuel_type ?? "N/A"}}</td>
                        <td><i class="fa fa-cog"></i> {{ $item->gear_type ?? 'N?A'}}</td>
                        <td><i class="fa fa-road"></i> {{ $item->running_km ?? 'N/A'}}</td>
                        <td class="buttons"><a class="btn btn-theme fleet"
                                href="{{ route('book-now') }}">Rent It</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination-wrapper">
            <ul class="pagination">
                {!! $items->links() !!}
            </ul>
        </div>
    </div>
</div>
@endforeach
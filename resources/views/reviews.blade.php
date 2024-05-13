<div class="panel panel-default" style="max-height: 400px; overflow-y: scroll;">
    <div class="panel-heading" style="background-color: #F0C540; text-align: center; font-weight: bold">
        <h1 style="font-size: 20px;"> Our clients say on Google</h1>
    </div>
        <div class="panel-body">
            @foreach($reviews as $review)
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <img src="{{ $review['profile_photo_url'] }}" alt="{{ $review['author_name'] }}"
                                class="img-fluid rounded-circle" style="max-width: 50px;">
                            <strong>{{ $review['author_name'] }}</strong>
                            
                            <p  style="display:inline" class="card-text">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review['rating'])
                                    <i style="color: #F09E00" class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                            </p>
                            <small style="display:inline"  class="text-muted">{{ $review['relative_time_description'] }}</small>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $review['text'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
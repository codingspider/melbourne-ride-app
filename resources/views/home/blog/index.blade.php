@extends('theme.layouts.app')
@section('title')
Blog
@endsection
@section('content')
<section class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="row">
            @foreach($latests as $latest)
            <div class="col-md-4 text-left">
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/bannerimage/'.$latest->banner_image)}}" class="img-responsive" style="height: 300px; width: 100%" alt="{{ $latest->title }}">
                    <div class="caption">
                        <h3>{{ $latest->title }}</h3>
                        <p>{{ $latest->description }}</p>
                        <p><a href="{{ route('blog-post-details', [$latest->id, $latest->slug]) }}" class="btn btn-primary" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
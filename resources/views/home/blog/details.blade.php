@extends('theme.layouts.app')
@section('title')
Blog Details
@endsection
@section('content')
<div class="page-section with-sidebar sub-page">
    <div class="container">
        <div class="col-md-12 content" id="content">
            <!-- Blog post -->
            <article class="post-wrap post-single">
                <div class="post-media">
                    <a href="{{ asset('assets/images/bannerimage/'.$blog->banner_image)}}" data-gal="prettyPhoto"><img
                            src="{{ asset('assets/images/bannerimage/'.$blog->banner_image)}}" class="img-responsive" style="height: 400px" alt="{{ $blog->title }}"></a>
                </div>
                <div class="post-header">
                    <h2 class="post-title"><a href="#">{{ $blog->title }}</a></h2>
                    <div class="post-meta">By <a href="#">Admin</a> / {{ dateFormat($blog->created_at) }}
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-excerpt">
                    {!! $blog->description !!}
                    </div>
                    <br>
                    <div class="post- mt-3">
                    {!! $blog->content !!}
                    </div>
                </div>
            </article>
            <!-- /Blog post -->
        </div>
    </div>
</div>
@endsection
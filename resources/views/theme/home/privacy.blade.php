@extends('theme.layouts.app')
@section('title', 'Privacy and Policy')
@section('content')
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs text-center">
        <div class="container">
            <div class="page-header">
                <h1 style="font-size: 20px">Privacy and Policy </h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Privacy and Policy </li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="panel panel-defualt"
                    style="padding: 50px; padding-right: 20px;">
                    <div class="panel-body">
                        <p>{!! $page->content !!}</p>
                        <p>{!! $page->section_2_content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('script')

@endpush
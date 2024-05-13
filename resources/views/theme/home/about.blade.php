@extends('theme.layouts.app')
@section('title', 'Get A Qoute')
@push('style')
    <style>
        .get-qoute-title {
            color: rgb(235, 184, 55) !important;
            text-align: center !important;
        }

        .form-search .form-title:after {
            content: none;
            display: block;
            position: absolute;
            left: 40px;
            bottom: -8px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #14181c;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <p>About us page content </p>
    </div>
@endsection


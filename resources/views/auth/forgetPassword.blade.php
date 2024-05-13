@extends('auth.auth_layout')
@section('title', 'Password Reset')
@section('content')
<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Reset your password </h5>
    </div>

    <form class="row g-3 needs-validation" action="{{ route('forget.password.post') }}" method="POST" novalidate>
        @csrf
        <div class="col-12">
            <div class="input-group has-validation">
            <input type="text" id="email_address" class="form-control" name="email" placeholder="Enter your email address" autocomplete="off" />
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Send Reset password Link </button>
        </div>
        <div class="col-12">
            <p class="small mb-0">Forgot your password ? <a href="{{ route('forget.password.get') }}">Reset Now </a></p>
        </div>
    </form>

</div>
@endsection
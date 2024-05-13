@extends('admin.layouts.app')
@section('title', 'User Profile')
@section('content')

<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if($user->photo)
                    <img src="{{ asset('assets/images/userphoto/'. $user->photo) }}" alt="{{ $user->name }}" class="rounded-circle">
                    @else 
                    <img src="{{ asset('assets/images/placeholder/male.png') }}" alt="" srcset="">
                    @endif
                    <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                    <h3>{{ $user->email }}</h3>
                    <h3>{{ $user->phone }}</h3>
                </div>
            </div>

        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            
                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{ $user->first_name }} {{ $user->last_name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">{{ $user->phone ?? 'N/A' }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="{{ route('user-profile-update') }}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if($user->photo)
                                        <img src="{{ asset('assets/images/userphoto/'. $user->photo) }}" alt="{{ $user->username}}">
                                        @else
                                        <img src="{{ asset('assets/images/placeholder/male.png') }}" alt="Profile">
                                        @endif
                                        <div class="pt-2">
                                        <input type="file" name="photo" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="first_name" type="text" class="form-control" id="First name"
                                             placeholder="Kevin Anderson" value="{{ $user->first_name }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="last_name" type="text" class="form-control" id="Last name"
                                             placeholder="Kevin Anderson" value="{{ $user->last_name }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control"
                                             placeholder="(436) 486-3538 x29071" value="{{ $user->phone ?? '' }}">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email" placeholder="k.anderson@example.com" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-end">
                                    <div class="col-md-8 col-lg-9">
                                        <button type="submit" class="btn btn-primary">Save Changes </button>
                                    </div>
                                </div>
                            </form><!-- End Profile Edit Form -->
                        </div>


                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form action="{{ route('update-user-password') }}" method="POST">
                                @csrf 
                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="old_password" type="password" class="form-control"
                                            id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="confirm-password" type="password" class="form-control"
                                            id="renewPassword">
                                    </div>
                                </div>
                                
                                <div class="row mb-3 justify-content-end">
                                    <div class="col-md-8 col-lg-9">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </form><!-- End Change Password Form -->
                        </div>

                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
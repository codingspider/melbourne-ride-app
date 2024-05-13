@extends('admin.layouts.app')
@section('title', 'User List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">User List </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter" style="padding-right: 25px;">
                            <a href="{{ route('user-create') }}" class="btn-sm btn btn-info btn_modal"><i
                                    class="bi bi-file-plus-fill"></i> Add User </a>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">User List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    @php
                                    $roles = $user->getRoleNames()->toArray();
                                    $isAdminOrSuperAdmin = in_array('Admin', $roles) || in_array('Super Admin', $roles) || in_array('Super admin', $roles) || in_array('super admin', $roles) || in_array('admin', $roles);
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>
                                            @foreach($roles as $role)
                                            <span class="badge rounded-pill bg-info text-dark">{{ $role }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($user->user_type == 0)
                                            <span class="badge rounded-pill bg-success text-dark">Admin</span>
                                            @elseif($user->user_type == 1)
                                            <span class="badge rounded-pill bg-warning text-dark">Driver</span>
                                            @else 
                                            <span class="badge rounded-pill bg-secondary text-dark">Customer</span>
                                            @endif 
                                        </td>
                                        <td>{{ dateFormat($user->created_at) }}</td>
                                        <td>
                                            <div class="d-flex">
                                            @can('user-list')
                                            <a href="{{ route('user-details', $user->id) }}"
                                                class="btn-sm btn btn-info btn_modal me-2"><i class="bi bi-eye-fill"></i></a>
                                            @endcan
                                            @can('user-edit')
                                            <a href="{{ route('user-edit', $user->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i
                                                    class="bi bi-pencil"></i></a>
                                            @endcan
                                            @unless ($isAdminOrSuperAdmin)
                                                @can('user-delete')
                                                <form action="{{ route('user-delete', $user->id) }}" method="post" class="delete-form">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                                </form>
                                                @endcan
                                            @endunless
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </div>
</section>
@endsection

@push('custom-script')
<script>
@foreach($errors -> all() as $error)
toastr.error("{{ $error }}");
@endforeach
</script>
@endpush
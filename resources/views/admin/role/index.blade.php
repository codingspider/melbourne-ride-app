@extends('admin.layouts.app')
@section('title', 'User List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Role List </li>
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
                            <a href="{{ route('role-create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Role </a>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Role List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ dateFormat($role->created_at) }}</td>
                                    
                                    <td>
                                        <div class="d-flex">
                                        @can('role-list')
                                        <a href="{{ route('role-details', $role->id) }}" class="btn-sm btn btn-info btn_modal me-2"><i class="bi bi-eye-fill"></i></a>
                                        @endcan 

                                        @if($role->name != $user_role)

                                        @can('role-edit')
                                        <a href="{{ route('role-edit', $role->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                        @endcan
                                        
                                        @can('role-delete')
                                        <form action="{{ route('role-delete', $role->id) }}" method="post" class="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        @endcan

                                        @endif
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
    @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
</script>

@endpush
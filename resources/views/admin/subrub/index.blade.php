@extends('admin.layouts.app')
@section('title', 'Subrub List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Subrub List </li>
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
                            @can('service-create')
                            <a href="{{ route('subrubs.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Subrub </a>
                            @endcan 
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Subrub List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                            <div class="d-flex">
                                            @can('service-edit')
                                            <a href="{{ route('subrubs.edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('service-delete')
                                            <form action="{{ route('subrubs.destroy', $item->id) }}" method="post" class="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                            @endcan
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

@endpush
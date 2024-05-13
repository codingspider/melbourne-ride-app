@extends('admin.layouts.app')
@section('title', 'Menu List')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Menu List </li>
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
                            @can('menu-create')
                            <a href="{{ route('menus.create') }}" class="btn-sm btn btn-info"><i class="bi bi-file-plus-fill"></i> Add New Menu </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Menu List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{ $item->name  }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>{!! $item->badgeData() !!}</td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                        <div class="d-flex">
                                            @can('menu-edit')
                                            <a href="{{ route('menus.edit', $item->id) }}" class="btn-sm btn btn-secondary me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('menu-delete')
                                            <form action="{{ route('menus.destroy', $item->id) }}" method="post" class="delete-form">
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


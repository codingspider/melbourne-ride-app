@extends('admin.layouts.app')
@section('title', 'Post List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Post List </li>
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
                            @can('post-create')
                            <a href="{{ route('post-create') }}" class="btn-sm btn btn-info"><i class="bi bi-file-plus-fill"></i> Add Post</a>
                            @endcan
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Post List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $item)
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->category->name ?? '' }}</td>
                                        <td>{{ $item->subcategory ? $item->subcategory->name : 'N/A' }}</td>
                                        <td>
                                            {!! $item->badgeData() !!}
                                        </td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                            <div class="d-flex">
                                            @can('post-edit')
                                            <a href="{{ route('post-edit', $item->id) }}" class="btn-sm btn btn-secondary me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('post-delete')
                                            <form action="{{ route('post-delete', $item->id) }}" method="post" class="delete-form">
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

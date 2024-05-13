@extends('admin.layouts.app')
@section('title', 'Slider List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Slider List </li>
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
                            @can('slider-create')
                            <a href="{{ route('sliders.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Slider </a>
                            @endcan 
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Slider List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>
                                            <img src="{{ asset('assets/images/slider/'.$item->image) }}" style="height: 50px" alt="" srcset="">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->short_description }}</td>
                                        <td>
                                           {!! $item->statusBadgeData() !!}
                                        </td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                         <div class="d-flex">
                                            @can('slider-edit')
                                            <a href="{{ route('sliders.edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            @endcan 

                                            @can('slider-delete')
                                            <form action="{{ route('sliders.destroy', $item->id) }}" method="post" class="delete-form">
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

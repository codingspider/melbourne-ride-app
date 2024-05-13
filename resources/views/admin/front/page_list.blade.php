@extends('admin.layouts.app')
@section('title', 'Page List')
@section('content')
    @include('modal.common')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Page List </li>
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
                                @can('page-create')
                                    <a href="{{ route('pages.create') }}" class="btn-sm btn btn-info"><i
                                            class="bi bi-file-plus-fill"></i> Add New Page </a>
                                @endcan
                            </div>

                            <div class="card-body pb-0">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <h5 class="card-title">Page List </h5>
                                    </div>

                                    <form action="{{ route('search') }}" method="get">
                                        <div class="form-group py-3">
                                            <input type="text" class="" name="search" placeholder="search">
                                            <button type="submit" class="btn btn-sm btn-info">search</button>
                                        </div>
                                    </form>
                                </div>


                                <table class="table datatable" id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Slug </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->slug }}</td>

                                                <td>{{ dateFormat($item->created_at) }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        {{-- @can('page-show') --}}
                                                        <a href="{{ route('pages.show', $item->id) }}"
                                                            class="btn-sm btn btn-success me-2"><i
                                                                class="bi bi-eye"></i></a>
                                                        {{-- @endcan --}}

                                                        @can('page-edit')
                                                            <a href="{{ route('pages.edit', $item->id) }}"
                                                                class="btn-sm btn btn-secondary me-2"><i
                                                                    class="bi bi-pencil"></i></a>
                                                        @endcan

                                                        @can('page-delete')
                                                            <form action="{{ route('pages.destroy', $item->id) }}"
                                                                method="post" class="delete-form">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button"
                                                                    class="show_confirm btn-sm btn btn-danger"><i
                                                                        class="bi bi-trash"></i></button>
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

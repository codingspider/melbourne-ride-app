@extends('admin.layouts.app')
@section('title', 'Packages')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">
                    Packages </li>
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
                                {{-- @can('category-create') --}}
                                <a href="{{ route('packages.create') }}" class="btn-sm btn btn-info "><i
                                        class="bi bi-file-plus-fill"></i> Add Package</a>
                                {{-- @endcan --}}
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">
                                    Packages List </h5>

                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packages as $item)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                                </td>
                                                <td>{{ dateFormat($item->created_at) }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        {{-- @can('category-edit') --}}
                                                        <a href="{{ route('packages.edit', $item->id) }}"
                                                            class="btn-sm btn btn-secondary  me-2"><i
                                                                class="bi bi-pencil"></i></a>
                                                        {{-- @endcan --}}

                                                        {{-- @can('category-delete') --}}
                                                        <form action="{{ route('packages.destroy', $item->id) }}"
                                                            method="post" class="delete-form">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button"
                                                                class="show_confirm btn-sm btn btn-danger"><i
                                                                    class="bi bi-trash"></i></button>
                                                        </form>
                                                        {{-- @endcan --}}
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
    <script></script>
@endpush

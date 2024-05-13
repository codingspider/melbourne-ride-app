@extends('admin.layouts.app')
@section('title', 'Course List')
@section('content')
    @include('modal.common')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Course List </li>
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
                                <a href="{{ route('course.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Course </a>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Course List </h5>

                                <table class="table datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th width="250px">Image</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Fee</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course as $row)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>
                                                <div style="max-width: 250px; max-height: 150px; overflow: hidden;">
                                                    <img src="{{ asset($row->crs_image) }}" alt="" class="img-fluid" style="width: 100%; height: auto;">
                                                </div>
                                            </td>
                                            <td>{{$row->crs_name}}</td>
                                            <td>{{$row->crs_code}}</td>
                                            <td>{{$row->crs_fee}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($row->crs_description, 10)}}</td>
                                            <td>
                                                {!! $row->badgeData() !!}
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit.course', ['id' => $row->id]) }}"
                                                       class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" onClick="deleteItem({{ $row->id}})"
                                                       class="btn-sm btn btn-danger"><i class="bi bi-trash"></i></a>
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
        function deleteItem(itemId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to recover this data!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete route
                    window.location = '/delete-course/' + itemId;
                }
            });
        }
    </script>
@endpush

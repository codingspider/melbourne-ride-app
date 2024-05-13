@extends('admin.layouts.app')
@section('title', 'Examination List')
@section('content')
@include('modal.common')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Examination List </li>
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
                                <a href="{{ route('examination.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Examination </a>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Examination List </h5>
                                <table class="table datatable">
                                    <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Duration</th>
                                        <th>Total Marks</th>
                                        <th>Negative Marking</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($examinations as $examination)
                                        <tr>
                                        <tr>
                                            <td>{{ $examination->course->crs_name }}</td>
                                            <td>{{ $examination->name }}</td>
                                            <td>{{ $examination->date }}</td>
                                            <td>{{ $examination->time }}</td>
                                            <td>{{ $examination->duration }} minutes</td>
                                            <td>{{ $examination->total_mark }}</td>
                                            <td>{{ $examination->negative_mark ? 'Yes' : 'No' }} ({{ $examination->negative_mark_value ? : '0' }})
                                            </td>
                                            <td>{!! $examination->badgeData()!!}</td>

                                            <td>
                                                <div class="d-flex">
                                                <a href="{{ route('examinations.edit', $examination->id) }}" class="btn btn-primary btn_modal btn-sm me-2"><i class="bi bi-pencil-square"></i></a>
                                                <form action="{{ route('examinations.destroy', $examination->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <form action="{{ route('examinations.destroy', $examination->id) }}" method="post" class="delete-form">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </form>
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
    <script>
        
    </script>
@endpush

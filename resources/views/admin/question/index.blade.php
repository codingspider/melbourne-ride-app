@extends('admin.layouts.app')
@section('title', 'Question List')
@section('content')
    @include('modal.common')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">@yield('title')</li>
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
                                <a href="{{ route('question.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add Question </a>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Question List </h5>

                                <table class="table datatable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course</th>
                                        <th>Title</th>
                                        <th>Options</th>
                                        <th>Correct Answer</th>
                                        <th>Multiple Select</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($questions as $question)
                                        <tr>
                                            <th>{{$loop->iteration}}</th>
                                            <td>{{ (isset($question->course)) ? $question->course->crs_name : null }}</td>
                                            <td>{{ $question->title }}</td>
                                            <td>{{ $question->option_a }}, {{ $question->option_b }}, {{ $question->option_c }}, {{ $question->option_d }}</td>
                                            <td>{{ $question->correct_answer }}</td>
                                            <td>{{ ($question->is_multiple) ? "Yes" : "No" }}</td>
                                            <td>
                                                <div class="d-flex">
                                                <a href="{{ route('edit.question', $question->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                                <form action="{{ route('delete.question', $question->id) }}" method="post" class="delete-form">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
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
@endpush

@extends('home.inc.master')
@section('title','Home Page')
@section('content')
@include('modal.common')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Course List</h2>
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL.NO</th>
                            <th>Course Name </th>
                            <th>Description </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $row)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $row->crs_name }}</td>
                            <td>{{ $row->description }}</td>
                            <td>
                            <a href="{{ route('get-exam', $row->id) }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Exam  </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

@endsection
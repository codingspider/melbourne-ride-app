<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Exam Details </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Total Mark </td>
                            <td>Negative Mark </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exams as $exam)
                        <tr>
                            <td>{{ $exam->name }}</td>
                            <td>{{ $exam->date }}</td>
                            <td>{{ $exam->duration }}</td>
                            <td>{{ $exam->total_mark }}</td>
                            <td>{{ $exam->negative_mark_value }}</td>
                            <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('get-exam-questions', [$course_id, $exam->id]) }}">Start Exam </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            
        </div>
    </div>
</div>
@push('custom-script')

@endpush
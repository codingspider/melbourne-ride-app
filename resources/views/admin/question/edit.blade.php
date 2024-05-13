<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Question </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('questions.update', $question->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="course_id">Course: <span class="text-danger">*</span></label>
                        <select name="course_id" class="form-control" required>
                            <option>Select</option>
                            @foreach ($courses as $row)
                            <option {{ $row->id == $question->course_id ? 'selected' : ''}} value="{{ $row['id'] }}">{{ $row['crs_name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="course_id">Exam: <span class="text-danger">*</span> </label>
                        <select name="exam_id" class="form-control" required>
                            <option>Select</option>
                            @foreach ($exams as $exam)
                            <option {{ $exam->id == $question->exam_id ? 'selected' : ''}} value="{{ $exam->id }}">{{ $exam->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="title">Question Title: <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ $question->title }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="option_a">Option A: <span class="text-danger">*</span></label>
                        <input type="text" name="option_a" class="form-control" value="{{ $question->option_a }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="option_b">Option B: <span class="text-danger">*</span></label>
                        <input type="text" name="option_b" class="form-control" value="{{ $question->option_b }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="option_c">Option C: <span class="text-danger">*</span></label>
                        <input type="text" name="option_c" value="{{ $question->option_c }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="option_d">Option D: <span class="text-danger">*</span></label>
                        <input type="text" name="option_d" value="{{ $question->option_d }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="correct_answer">Correct Answer: if has multiple answer (put it like 1,2,3) <span class="text-danger">*</span></label>
                        <input type="text" name="correct_answer" value="{{ $question->correct_answer }}" class="form-control" placeholder="1,2,3" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="attachment">Attachment:</label>
                        <input type="file" name="attachment" class="form-control" id="gallery-photo-add">
                        <div class="gallery mt-2"></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>
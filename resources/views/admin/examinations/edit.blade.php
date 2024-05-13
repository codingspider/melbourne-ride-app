<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Examination </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="row g-3" method="post" action="{{route('examination.update', $exam->id)}}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="name">Select Course: <span class="text-danger">*</span></label>
                        <select name="course_id" id="course_id" class="form-select" required>
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                            <option {{ $course->id == $exam->course_id ? 'selected' : ''}} value="{{ $course->id }}">
                                {{ $course->crs_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Examination Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ $exam->name }}" class="form-control" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="duration">Duration (in minutes): <span class="text-danger">*</span></label>
                        <input type="number" name="duration" value="{{ $exam->duration }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="total_mark">Total Marks: <span class="text-danger">*</span></label>
                        <input type="number" name="total_mark" value="{{ $exam->total_mark }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="total_mark">Pass Marks: <span class="text-danger">*</span> </label>
                        <input type="number" name="pass_mark" value="{{ $exam->pass_mark }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="negative_mark">Negative Marking: </label>
                        <input type="checkbox" class="form-check-input" style="border-radius: 50%;" value="1"
                            name="negative_mark" {{ isset($exam->negative_mark) ? 'checked' : '' }}
                            id="negative-mark-checkbox">
                    </div>

                    <div id="negative-mark-text">
                        <label for="negative-mark-value">Negative Mark Value: </label>
                        <input type="number" step="0.01" name="negative_mark_value" id="negative-mark-value"
                            value="{{ $exam->negative_mark_value }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Status: <span class="text-danger">*</span></label>
                        <select name="status" id="" class="form-select" required>
                            <option {{ $exam->status == 1 ? '' : ''}} value="1">Active</option>
                            <option {{ $exam->status == 0 ? '' : ''}} value="0">Inactive</option>
                        </select>
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
@push('script')

@endpush
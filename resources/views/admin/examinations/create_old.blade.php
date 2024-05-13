@extends('layouts.admin')

@section('title')
    Create Question
@endsection
@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create Question</h5>

        <!-- Vertical Form -->
        <form action="{{ route('examinations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Select Course:</label>
                <select name="course_id" id="course_id" class="form-control">
                    <option value="" disabled>Select Course</option>
                    @foreach ($courses as $id => $course)
                        <option value="{{ $id }}">{{ $course }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Examination Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Examination Date:</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="time">Examination Time:</label>
                <input type="time" name="time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (in minutes):</label>
                <input type="number" name="duration" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total_mark">Total Marks:</label>
                <input type="number" name="total_mark" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="negative_mark">Negative Marking:</label>
                <input type="checkbox" class="form-check-input" style="border-radius: 50%;" name="negative_mark" value="1" id="negative-mark-checkbox">
            </div>
{{--            <input type="checkbox" name="negative_mark" id="negative-mark-checkbox" value="1">--}}
            <div id="negative-mark-text"  style="display: none;">
                <label for="negative-mark-value">Negative Mark Value:</label>
                <input type="number" step="0.01" name="negative_mark_value" id="negative-mark-value" class="form-control">
            </div>
            <div class="form-group">
                <label for="question_bank_id">Question Bank:</label>
                <select name="question_bank_id" class="form-control" required>
                    <option value="" disabled>Select Question Bank</option>
                    @foreach ($questionBanks as $id => $questionBank)
                        <option value="{{ $id }}">{{ $questionBank }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Deactivate</option>
                </select>
            </div>
            <div class="form-group mt-1">
                <label for="message_alert">Message Alert: </label>

                <p class="m-1">
                    <input type="radio" name="message_alert" value="1" checked class="form-check-input" >Yes</input>
                    <input type="radio" name="message_alert" value="0" class="form-check-input">No</input>
                </p>
            </div>
            <div class="col-6 float-right mt-2">
                <a href="{{ route('examinations.index')}}" class="btn btm-md btn-warning">Cancel</a>
                <button type="submit" class="btn btm-md btn-primary">Save</button>
            </div>

        </form>


      </div>
    </div>
</div>

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $(function() {
                // Multiple images preview in browser
                var imagesPreview = function(input, placeToInsertImagePreview) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img style="height: 60px; width: 60px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#gallery-photo-add').on('change', function() {
                    imagesPreview(this, 'div.gallery');
                });
            });
        });
    </script>
<script>
    const checkbox = document.getElementById("negative-mark-checkbox");
    const textInput = document.getElementById("negative-mark-text");

    checkbox.addEventListener("change", function () {
        textInput.style.display = this.checked ? "block" : "none";
    });
</script>
@endsection

@endsection

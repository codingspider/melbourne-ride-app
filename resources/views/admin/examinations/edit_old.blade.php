@extends('layouts.admin')
@section('title')
    Update Question
@endsection

@section('content')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Question</h5>

        <!-- Vertical Form -->
        <form action="{{ route('examinations.update', $examination->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Select Course:</label>
                <select name="course_id" id="course_id" class="form-control">
                    <option value="" disabled>Select Course</option>
                    @foreach ($courses as $id => $course)
                        <option value="{{ $id }}" {{ $id == $examination->course_id ? 'selected' : '' }}>{{ $course }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Examination Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $examination->name }}" required>
            </div>
            <div class="form-group">
                <label for="date">Examination Date:</label>
                <input type="date" name="date" class="form-control" value="{{ $examination->date }}" required>
            </div>
            <div class="form-group">
                <label for="time">Examination Time:</label>
                <input type="time" name="time" class="form-control" value="{{ $examination->time }}" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (in minutes):</label>
                <input type="number" name="duration" class="form-control" value="{{ $examination->duration }}" required>
            </div>
            <div class="form-group">
                <label for="total_mark">Total Marks:</label>
                <input type="number" name="total_mark" class="form-control" value="{{ $examination->total_mark }}" required>
            </div>
            <div class="form-group">
                <label for="negative_mark">Negative Marking:</label>
                <input type="hidden" name="negative_mark" value="0">
                <input type="checkbox" class="form-check-input" style="border-radius: 50%;" name="negative_mark" id="negative-mark-checkbox" value="1" {{ $examination->negative_mark ? 'checked' : '' }}>
            </div>

            @if($examination->negative_mark == 1)
                <div id="negative-mark-text">
                    <label for="negative-mark-value">Negative Mark Value:</label>
                    <input type="number" step="0.01" name="negative_mark_value" class="form-control" id="negative-mark-value" value="{{$examination->negative_mark_value}}">
                </div>
            @else
                <div id="negative-mark-text" style="{{ $examination->negative_mark ? 'display: block;' : 'display: none;' }}">
                    <label for="negative-mark-value">Negative Mark Value:</label>
                    <input type="number" step="0.01" name="negative_mark_value" class="form-control" id="negative-mark-value" value="{{$examination->negative_mark_value}}">
                </div>

            @endif

            <div class="form-group">
                <label for="question_bank_id">Question Bank:</label>
                <select name="question_bank_id" class="form-control" required>
                    @foreach ($questionBanks as $id =>  $questionBank)
                        <option value="{{ $id }}" {{ $id == $examination->question_bank_id ? 'selected' : '' }}>
                            {{ $questionBank }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="" class="form-control">
                    <option value="1" {{ $examination->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $examination->status == 0 ? 'selected' : '' }}>Deactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Message Alert </label>
                <p>
                    <input type="radio" name="message_alert" value="1" {{ $examination->message_alert == 1 ? 'checked' : '' }} checked class="form-check-input" >Yes</input>
                    <input type="radio" name="message_alert" value="0" {{ $examination->message_alert == 0 ? 'checked' : '' }} class="form-check-input">No</input>
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
                    $('.gallery').empty();
                    imagesPreview(this, 'div.gallery');
                });
            });
        });
    </script>
    <script>
        const checkbox = document.getElementById("negative-mark-checkbox");
        const textInput = document.getElementById("negative-mark-text");
        const negativeMarkValueInput = document.getElementById("negative-mark-value");

        checkbox.addEventListener("change", function () {
            if (this.checked) {
                textInput.style.display = "block";
                // You can set the value to the previous value or any default value here
            } else {
                textInput.style.display = "none";
                negativeMarkValueInput.value = "0";
            }
        });
    </script>
@endsection

@endsection

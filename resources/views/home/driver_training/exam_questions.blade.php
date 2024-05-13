@extends('home.inc.master')
@section('title','Home Page')
@section('content')
<style>
<style>.question h2,
h4 {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

.question h5 {
    display: flex;
}

.question input {
    margin-right: 5px;
}

.question .marks {
    display: flex;
    justify-content: space-between;
}

.question {
    vertical-align: middle;
    align-items: center;
    width: 960px;
    margin: auto;
    border: 1px solid gray;
    padding-left: 20px;
    margin-top: 20px;
}

.checkbox-width {
    width: 10%
}
.view-results {
    padding: 10px;
    cursor: pointer;
    font-size: inherit;
    color: white;
    background: teal;
    border-radius: 8px;
    margin-right: 5px;
    width: 150px
}
</style>
</style>
<section class="question">
    <div class="container">
        <form action="{{ route('store-exam-result') }}" method="POST" id="examFormSubmit">
            @csrf
            <input type="hidden" name="course_id" value="{{$course->id}}">
            <input type="hidden" name="exam_id" value="{{ $exam->id  }}">
            <div class="row">
                <h2>{{ $course->crs_name }} {{ $exam->name  }} </h2>
                <h4>Bangladesh Bank 'Assistant Director(General)'</h4>
                <div class="marks">
                    <p>Time : {{ $exam->duration }}</p>
                    <p>Full Marks : {{ $exam->pass_mark }}</p>
                </div>
                @foreach ($questions as $question)
                <div class="col-md-6">
                    <h5> <label for="nam">{{ $loop->index +1 }}. {{ $question->title }} :</label> </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p> <input name="question[{{$question->id}}][answer][]" value="1" class="checkbox-width" type="checkbox"><label for="{{ $question->option_a }}">
                                    {{ $question->option_a }} </label></p>
                        </div>
                        <div class="col-md-6">
                            <p> <input name="question[{{$question->id}}][answer][]" value="2" class="checkbox-width" type="checkbox"><label for="{{ $question->option_b }}">
                                    {{ $question->option_b }} </label></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p> <input name="question[{{$question->id}}][answer][]" value="3" class="checkbox-width" type="checkbox"><label for="{{ $question->option_c }}">
                                    {{ $question->option_c }} </label></p>
                        </div>
                        <div class="col-md-6">
                            <p> <input name="question[{{$question->id}}][answer][]" value="4" class="checkbox-width" type="checkbox"><label for="{{ $question->option_d }}">
                                    {{ $question->option_d }} </label></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <button class="view-results" class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</section>
@endsection

@push('script')

<script>
$(document).ready(function() {
    // Warn the user before leaving the page
    window.addEventListener('beforeunload', function(e) {
        // You can customize the message displayed in the confirmation dialog
        var confirmationMessage = 'Are you sure you want to leave? Your quiz progress may be lost.';
        (e || window.event).returnValue = confirmationMessage; // Standard
        return confirmationMessage; // IE, Edge
    });
});
</script>

<script>
$(document).ready(function() {
    // Set the target countdown time (in seconds)
    var minutes = "{{ $exam->duration  }}";
    var seconds = minutes * 60;
    var countdownTime = seconds; // 5 minutes in seconds
    var interval = 1000; // Update every 1 second

    // Function to update the countdown timer
    function updateCountdown() {
        var minutes = Math.floor(countdownTime / 60);
        var seconds = countdownTime % 60;

        // Add leading zeros if needed
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        // Update the HTML with the formatted time
        $('#countdown').text(minutes + ":" + seconds);

        // Check if the countdown has reached zero
        if (countdownTime <= 0) {
            clearInterval(timerInterval); // Stop the countdown when it reaches zero
            alert('Time is up!'); // You can replace this with your own logic
        } else {
            countdownTime--; // Decrement the countdown time
        }
    }

    // Initial call to set up the countdown
    updateCountdown();

    // Set up an interval to update the countdown every second
    var timerInterval = setInterval(updateCountdown, interval);
});
</script>
@endpush
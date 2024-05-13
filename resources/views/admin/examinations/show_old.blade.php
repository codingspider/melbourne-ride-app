@extends('layouts.admin')
@section('title')
    Question Details
@endsection

@section('content')
<style>
  .hgt{
    display: flex;
    justify-content: space-between;
  }
  .input{
    display: flex;
    justify-content: space-between;
  }
  .datatable-top {
    display: none;
  }
</style>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="hgt">
              <h5 class="card-title">Question Details</h5>
              <div class="bt mt-2"><a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</a></div>
            </div>

            <div class="col-12 row">
            <!-- Table with stripped rows -->
            <table class="table">
                <tbody>
                    <tr>
                        <td>Subject</td>
                        <td>{{ (isset($question->subject)) ? $question->subject->name : null }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{ $question->title }}</td>
                    </tr>
                    <tr>
                        <td>Options</td>
                        <td>{{ $question->option_a }}, {{ $question->option_b }}, {{ $question->option_c }}, {{ $question->option_d }}</td>
                    </tr>
                    <tr>
                        <td>Correct Answer</td>
                        <td>{{ $question->correct_answer }}</td>
                    </tr>
                    <tr>
                        <td>Multiple Select</td>
                        <td>{{ ($question->is_multiple) ? "Yes" : "No" }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ ($question->status) ? "Active" : "Deactivate" }}</td>
                    </tr>


                    <tr>
                        <td colspan="2" class="text-center"><b>Image</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php $image = $question->image; ?>
                            @if (isset($image))
                            <img src='{{asset("/") . $image }}' alt="image" style="height: 200px; width: 220px; margin-bottom: 5px;">
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>

@endsection

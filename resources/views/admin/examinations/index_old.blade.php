@extends('layouts.admin')

@section('title')
    Examination List
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
</style>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                <div class="hgt">
                    <h5 class="card-title">Examination List</h5>

                    <div class="bt mt-2"><a href="{{ route('examinations.create')}}" class="btn btn-sm btn-primary">Create</a></div>
                </div>
            </div>
          <div class="card-body">


            <!-- Table with stripped rows -->
                <table class="table datatable table-responsive">
                  <thead>
                    <tr>
                      <th>Course</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Duration</th>
                      <th>Total Marks</th>
                      <th>Negative Marking</th>
                      <th>Question Bank</th>
                      <th>Status</th>
                      <th>Message Alert</th>
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
                            <td>{{ $examination->total_mark }}




                            </td>
                            <td>{{ $examination->negative_mark ? 'Yes' : 'No' }}
                                ({{ $examination->negative_mark_value ? : '0' }})
                            </td>
                            <td>{{ $examination->questionBank->title }}</td>

                            <td>{{ $examination->status ? 'Active' : 'Deactivate' }}</td>
                            <td>{{ $examination->message_alert ? 'Yes' : 'No' }}</td>

                            <td>
                                <a href="{{ route('examinations.edit', $examination->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('examinations.destroy', $examination->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                </form>
                                <a href="{{ route('examinations.result', $examination->id) }}" class="btn btn-success"><i class="bi bi-trophy"></i> Result</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            //
        });

        function filter(){
            setTimeout(function() {
                $('#search-form').submit();
            }, 100);

        }
    </script>
@endsection


@endsection

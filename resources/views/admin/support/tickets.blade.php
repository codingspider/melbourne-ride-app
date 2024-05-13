@php 
use App\Constants\Status;

@endphp

@extends('admin.layouts.app')
@section('title', 'All Ticket')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Support Ticket</h5>

                    <!-- Default Table -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Submitted By</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Last Reply</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.ticket.view', $item->id) }}" class="fw-bold">
                                        [Ticket#{{ $item->ticket }}] {{ strLimit($item->subject,30) }} </a>
                                </td>

                                <td>
                                    @if($item->user_id)
                                    <a href="#"> {{ $item->user->name }}</a>
                                    @else
                                    <p class="fw-bold"> {{$item->name}}</p>
                                    @endif
                                </td>
                                <td>
                                    @php echo $item->statusBadge; @endphp
                                </td>
                                <td>
                                    @if($item->priority == Status::PRIORITY_LOW)
                                    <span class="badge rounded-pill bg-dark">Low</span>
                                    @elseif($item->priority == Status::PRIORITY_MEDIUM)
                                    <span class="badge rounded-pill bg-warning">Medium</span>
                                    @elseif($item->priority == Status::PRIORITY_HIGH)
                                    <span class="badge rounded-pill bg-danger">High</span>
                                    @endif
                                </td>

                                <td>
                                    {{ diffForHumans($item->last_reply) }}
                                </td>

                                <td>
                                    <a href="{{ route('admin.ticket.view', $item->id) }}"
                                        class="btn btn-sm btn-outline-primary ms-1">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">No Data Found !</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
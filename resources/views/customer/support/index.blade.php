@php
use App\Constants\Status;
@endphp
@extends('admin.layouts.app')
@section('title','All Ticket')
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
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Last Reply</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($supports as $support)
                            <tr>
                                <td> <a href="{{ route('ticket.view', $support->ticket) }}">
                                        [Ticket#{{ $support->ticket }}] {{ $support->subject }} </a></td>
                                <td>
                                    @php echo $support->statusBadge; @endphp
                                </td>
                                <td>
                                    @if ($support->priority == Status::PRIORITY_LOW)
                                    <span class="badge rounded-pill bg-info">Low</span>
                                    @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                    <span class="badge rounded-pill bg-warning">Midium</span>
                                    @elseif($support->priority == Status::PRIORITY_HIGH)
                                    <span class="badge rounded-pill bg-danger">High</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($support->last_reply)->diffForHumans() }} </td>

                                <td>
                                    <a class="btn btn-base btn-sm" href="{{ route('ticket.view', $support->ticket) }}">
                                        <i class="bi bi-pc-display-horizontal"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="rounded-bottom text-center" colspan="100%">Data Not Found </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
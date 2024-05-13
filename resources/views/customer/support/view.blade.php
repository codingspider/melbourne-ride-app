@php
use App\Constants\Status;
@endphp
@extends('admin.layouts.app')
@section('title','View Ticket')
@section('content')
<div class="card">
    <div class="card-body">
        <section class="pb-100 pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 account-wrapper">
                        <div class="account-form">
                            <div
                                class="card-header card-header-bg d-flex justify-content-between align-items-center flex-wrap">
                                <h5 class="mt-0 text-white">
                                    @php echo $myTicket->statusBadge; @endphp
                                    [Ticket#{{ $myTicket->ticket }}] {{ $myTicket->subject }}
                                </h5>
                                @if ($myTicket->status != Status::TICKET_CLOSE && $myTicket->user)
                                <form action="{{ route('ticket.close', $myTicket->id) }}" method="post"
                                    class="delete-form">
                                    @csrf
                                    <button type="button" class="show_confirm btn-sm btn btn-danger"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                                @endif
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('ticket.reply', $myTicket->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-between">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message"
                                                    rows="4">{{ old('message') }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="form-label">@lang('Attachments')</label> <small
                                            class="text-danger">@lang('Max 5 files can be uploaded'). @lang('Maximum
                                            upload size is') {{ ini_get('upload_max_filesize') }}</small>
                                        <input class="form-control" name="attachments[]" type="file"
                                            accept=".png,.jpg,.jpeg,.pdf,.doc,.docx" />
                                        <div id="fileUploadsContainer"></div>
                                        <p class="ticket-attachments-message text-muted my-2">
                                            @lang('Allowed File Extensions'): .@lang('jpg'), .@lang('jpeg'),
                                            .@lang('png'), .@lang('pdf'), .@lang('doc'), .@lang('docx')
                                        </p>
                                    </div>
                                    <div class="col-md-12 justify-content-center">
                                        <button class="btn btn-success w-20" type="submit"> <i class="bi bi-reply"></i> Reply</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="custom__bg mt-4">
                            <div class="card-body">
                                @foreach ($messages as $message)
                                @if ($message->admin_id == 0)
                                <div class="row border-primary rounded-bottom border-radius-3 my-3 mx-2 border py-3"
                                    style="background-color: #d4b55829">
                                    <div class="col-md-3 border-end text-end">
                                        <h6 class="my-2">{{ $message->ticket->name }}</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <small class="text-muted fw-bold my-3">
                                            @lang('Posted on')
                                            {{ $message->created_at->format('l, dS F Y @ H:i') }}</small>
                                        <p>{{ $message->message }}</p>
                                        @if ($message->attachments->count() > 0)
                                        <div class="mt-2">
                                            @foreach ($message->attachments as $k => $image)
                                            <a class="me-3"
                                                href="{{ route('ticket.download', encrypt($image->id)) }}"><i
                                                    class="fa fa-file"></i> Attachment {{ ++$k }} </a>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @else
                                <div class="row border-warning border-radius-3 rounded-top my-3 mx-2 border py-3">
                                    <div class="col-md-3 border-end text-end">
                                        <h6 class="my-2">{{ $message->admin->name }}</h6>
                                        <p class="lead text-muted">@lang('Staff')</p>
                                    </div>
                                    <div class="col-md-9">
                                        <small class="text-muted fw-bold my-3">
                                            @lang('Posted on')
                                            {{ $message->created_at->format('l, dS F Y @ H:i') }}</small>
                                        <p>{{ $message->message }}</p>
                                        @if ($message->attachments->count() > 0)
                                        <div class="mt-2">
                                            @foreach ($message->attachments as $k => $image)
                                            <a class="me-3"
                                                href="{{ route('ticket.download', encrypt($image->id)) }}"><i
                                                    class="fa fa-file"></i> Attachment {{ ++$k }} </a>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection
@push('style')
<style>
.input-group-text:focus {
    box-shadow: none !important;
}
</style>
@endpush
@push('script')
<script>
(function($) {
    "use strict";
    var fileAdded = 0;
    $('.addFile').on('click', function() {
        if (fileAdded >= 4) {
            notify('error', 'You\'ve added maximum number of file');
            return false;
        }
        fileAdded++;
        $("#fileUploadsContainer").append(`
                    <div class="input-group my-3">
                        <input type="file" name="attachments[]" accept=".png,.jpg,.jpeg,.pdf,.doc,.docx" class="form-control" required />
                        <button type="submit" class="input-group-text btn-danger textdark remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
    });
    $(document).on('click', '.remove-btn', function() {
        fileAdded;
        $(this).closest('.input-group').remove();
    });

})(jQuery);
</script>
@endpush
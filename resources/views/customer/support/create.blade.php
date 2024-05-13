@extends('admin.layouts.app')
@section('title', 'Ticket Open')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Ticket</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input name="name" type="hidden" value="{{ $user->name }}">
                        <input name="email" type="hidden" value="{{ $user->email }}">

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-md-9">
                                <input class="form-control" name="subject" type="text" value="{{ old('subject') }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Priority</label>
                            <div class="col-md-9">
                                <select class="form-control" name="priority" required>
                                    <option value="3">@lang('High')</option>
                                    <option value="2">@lang('Medium')</option>
                                    <option value="1">@lang('Low')</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="inputMessage" name="message" rows="6"
                                    required>{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Attachment</label>
                            <div class="col-md-9">
                                <input class="form-control mb-2" id="inputAttachments" name="attachments[]" type="file"
                                    accept=".png,.jpg,.jpeg,.pdf,.doc,.docx" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </div>
    </div>
</section>
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
                        <button type="button" class="input-group-text btn--danger remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
    });
    $(document).on('click', '.remove-btn', function() {
        fileAdded--;
        $(this).closest('.input-group').remove();
    });
})(jQuery);
</script>
@endpush
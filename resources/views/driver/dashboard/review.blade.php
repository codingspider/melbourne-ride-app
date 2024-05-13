<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rating and Review </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('driver-review-store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-6 col-form-label">Rating <span class="text-danger">*</span></label>
                  <div class="col-sm-12">
                  <input type="number" name="rating" class="form-control" inputmode="numeric" pattern="[1-5]" title="Please enter a number between 1 and 5" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-6 col-form-label">Comment <span class="text-danger">*</span></label>
                  <div class="col-sm-12">
                    <textarea name="comment" class="form-control"></textarea>
                  </div>
                </div>
            </div>
            <input type="hidden" name="customer_id" value="{{ $booking->customer_id}}">
            <input type="hidden" name="driver_id" value="{{ $booking->driver_id }}">
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
            <input type="hidden" name="service_id" value="{{ $booking->service_id }}">

            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
        </form>
    </div>
</div>
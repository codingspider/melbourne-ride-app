<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Category </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('credit-cards.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Card Holder Name <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="card_holder" value="{{ $item->card_holder}}" class="form-control"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Card Number <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="card_number" value="{{ $item->card_number}}" class="form-control"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">Expiration Date <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="text" name="expiration_date" value="{{ $item->expiration_date}}"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label">CVV <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" min="100" max="9999" name="cvv" value="{{ $item->cvv}}"
                            class="form-control" required>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>
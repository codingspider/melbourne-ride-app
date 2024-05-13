<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Payment </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">

                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Total KM </td>
                                <td>Total Fare </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $booking->total_km }}</td>
                                <td>{{ $booking->final_total }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <p class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your Booking Details </span>
                            </p>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Discount </h6>
                                    </div>
                                    <span class="text-muted" id="discount">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">After Discount </h6>
                                    </div>
                                    <span class="text-muted" id="grand_total">{{ $booking->final_total }}</span>
                                </li>
                     
                            </ul>

                            <form class="card p-2" id="coupon_form" action="{{ route('find-coupon-code') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="code" id="code" placeholder="Promo code">
                                    <input type="hidden" name="amount" value="{{ $booking->final_total }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" id="payment_form" action="{{ route('init-payment-process') }}" method="POST">
                                @csrf 

                                <input type="hidden" name="total_amount" id="payment_amount" value="{{ $booking->final_total }}">
                                <input type="hidden" name="discount_amount" id="discount_amount" value="0">
                                <input type="hidden" name="booking_id" value="{{ $booking->id }}">

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" readonly name="name" id="firstName" placeholder="" value="{{ $customer->name }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Email</label>
                                        <input type="text" class="form-control" readonly name="email" placeholder="" value="{{ $customer->email }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Phone</label>
                                        <input type="text" class="form-control" readonly name="phone" placeholder="" value="{{ $customer->phone }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="firstName">Address</label>
                                        <input type="text" class="form-control" readonly name="address" placeholder="" value="{{ $customer->address }}" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" id="pay_now">Pay Now </button>
        </div>
    </div>
</div>


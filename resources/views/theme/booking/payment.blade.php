<div class="col-md-12">
    <table class="table">
        <tbody>
            <tr>
                <td>Total Fare </td>
                <td class="flat_rate">${{ showAmount($subtotal ?? 0) }}</td>
                <input type="hidden" name="total" id="total" value="{{ showAmount($subtotal ?? 0) }}">
            </tr>
            <tr>
                <td>Discount</td>
                <td class="discount_text">${{ showAmount($discountAmount ?? 0) }}</td>
                <input type="hidden" name="discount" id="discount" value="{{ showAmount($discountAmount ?? 0) }}">
            </tr>
            <tr>
                <td>GST </td>
                <td class="gst">${{ showAmount($tax ?? 0) }}</td>
                <input type="hidden" name="vat" id="vat" value="{{ showAmount($tax ?? 0) }}">
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Total Payable </td>
                <td class="payable">${{ showAmount($total ?? 0) }}</td>
                <input type="hidden" name="subtotal" value="{{ showAmount($total ?? 0) }}">
            </tr>
        </tfoot>
    </table>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <label>
                        <input type="radio" name="payment_method" value="credit_card">
                        <span>Credit Card <img src="{{ asset('assets/images/placeholder/card.png') }}"
                                style="height: 20px" alt="" srcset=""></span>
                    </label> <br>

                </div>
                <div class="col-sm-4">
                    <label>
                        <input type="radio" name="payment_method" value="paypal" id="paypalPayableAmount">
                        <span class="btn btn-success">Pay <span id="payAmount">{{ showAmount($total ?? 0) }}</span> from Paypal</span>
                    </label><br>

                </div>
                <div class="col-sm-4">
                    <label>
                        <input type="radio" name="payment_method" value="direct_driver_payment" checked>
                        Pay to driver/bank transfer
                    </label> <br>
                    <small>Bank transfer: No surcharge </small> <br>

                    <small>Pay to driver: Credit Card surcharge fee apply</small>

                </div>
            </div>
        </div>


    </div>
</div>

<div class="col-md-12" id="card_option" style="display: none">
    <div class="form-group">
        <label for="Passenger Phone">Select Credit Card </label>
        <select name="card_type" id="card_type" class="form-control alt">
            <option value="">Select Card </option>
            <option value="1">New Credit Card </option>
            @if (Auth::check())
            <option value="2">Card From Your Account </option>
            @endif
        </select>
    </div>
</div>

<div class="col-md-12" id="saved_cards" style="display: none">
    <div class="form-group">
        <label for="Passenger Phone">Select Credit Card </label>
        <select name="user_card_id" id="user_card_id" class="form-control alt">
            @foreach (getCards() as $card)
            <option value="{{ $card->id }}">{{ $card->card_number }}</option>
            @endforeach
        </select>
    </div>
</div>

<div id="card_info" style="display: none">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Credit Card Number">Credit Card Number</label>
            <input type="text" name="card_no" placeholder="Credit Card Number" class="form-control alt">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="Expiration Month">CVV</label>
            <input type="text" name="cvv" placeholder="cvv" class="form-control alt">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="Expiration year">Month</label>
            <select name="exp_month" class="form-control alt" id="">
                @for ($month = 1; $month <= 12; $month++) @php $monthName=date('F', mktime(0, 0, 0, $month, 1)); 
                @endphp <option value="{{ $month }}">{{ $monthName }}</option>
                @endfor
            </select>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="Expiration year">Expiration Year</label>
            <select name="exp_year" class="form-control alt" id="">
                @foreach (getYear() as $key => $value)
                <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="Card Holder Name">Card Holder Name</label>
            <input type="text" name="card_holder_name" placeholder="Card Holder Name" class="form-control alt">
        </div>
    </div>
</div>

<input type="hidden" name="vehicle" value="{{ showAmount($vehicleCharge) }}">
<input type="hidden" name="baby_seat" value="{{ showAmount($babySeatCost) }}">
<input type="hidden" name="estimate_fare" value="{{ showAmount($serviceCharge) }}">
<input type="hidden" name="return_fare" value="{{ $is_return ? showAmount($total_return_fare) : 0 }}">
<input type="hidden" name="total_without_gst" value="{{ showAmount($total_without_gst) }}">
<input type="hidden" name="late_night" value="{{ showAmount($late_night) }}">
<input type="hidden" name="stop_over_charge" value="{{ showAmount($stop_over_charge) }}">
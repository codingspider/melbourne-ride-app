<div class="row mt-2">
    @if(!Auth::check())
    <div class="col-md-6">
        <div class="form-group">
            <label for="First Name">First Name</label>
            <input name="passanger_infos[first_name]" id="first_name" class="form-control alt" type="text"
                placeholder="First Name">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Last Name">Last Name</label>
            <input name="passanger_infos[last_name]" id="last_name" class="form-control alt" type="text"
                placeholder="Last Name">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Email Address">Email Address</label>
            <input name="passanger_infos[email]" id="email" class="form-control alt" type="text"
                placeholder="Your Email Address">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger Phone</label>
            <input name="passanger_infos[phone]" id="phone" class="form-control alt" type="text"
                placeholder="Your Phone number">
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger Pickup Phone</label>
            <input name="passanger_infos[pick_up_phone]" id="phone" class="form-control alt" type="text"
                placeholder="Your Phone number">
        </div>
    </div>
    @else
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger First Name</label>
            <input readonly class="form-control alt" name="passanger_infos[first_name]" type="text"
                value="{{ auth()->user()->first_name }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger Last Name</label>
            <input readonly class="form-control alt" name="passanger_infos[last_name]" type="text"
                value="{{ auth()->user()->last_name }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger Email</label>
            <input readonly class="form-control alt" type="text" name="passanger_infos[email]"
                value="{{ auth()->user()->email }} ">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Passenger Phone">Passenger Phone</label>
            <input readonly class="form-control alt" type="text" name="passanger_infos[phone]"
                value="{{ auth()->user()->phone }} ">
        </div>
    </div>
    @endif
</div>
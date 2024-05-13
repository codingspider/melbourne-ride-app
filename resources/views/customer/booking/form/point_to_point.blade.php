<div class="col-md-6">
    <div class="form-group">
        <label for="Pick-Up Date">Pick Up Location</label>
        <input name="pick_up_location" class="form-control alt" id="pick_up_location" type="text"
            placeholder="Pick up location">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group"><label for="Drop Off Address">Drop Off Adress</label>
        <input class="form-control alt" id="drop_off_location" type="text" placeholder="Drop Off Address"
            name="drop_off_address" required>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="Pick-Up Date">Pick-Up Date</label>
        <input name="pick_up_date" class="form-control alt datepicker" id="pick_up_date" type="text" required
            placeholder="Pick up date">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="Pick-Up Date">Pick-Up Time</label>
        <input name="pick_up_time" class="form-control alt" type="time" required
            placeholder="Pick up time">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="Pick-Up Date">Full Name </label>
        <input name="full_name" class="form-control alt" id="full_name" type="text"
            value="{{ auth()->user() ? auth()->user()->first_name . ' ' . auth()->user()->last_name : '' }}" required
            placeholder="Full name">

    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="Pick-Up Date">Phone Number</label>
        <input name="phone_number" class="form-control alt" id="phone_number" type="text"
            value="{{ auth()->user() ? auth()->user()->phone : '' }}" required placeholder="Phone Number">

    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="Pick-Up Date">Email</label>
        <input name="email" class="form-control alt" id="email" type="text"
            value="{{ auth()->user() ? auth()->user()->email : '' }}" required placeholder="Email">

    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <table class="table table-bordered" id="dynamic_field">
            <tr>
                <td colspan="2"><button type="button" name="add" id="add" class="btn btn-success btn-sm">Add Stops
                    </button>
                </td>
            </tr>
        </table>
    </div>
</div>
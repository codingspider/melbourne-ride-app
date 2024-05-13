<div class="col-md-12 private">
    <div class="form-group"><label for="private tour">Selected Tour</label>
    <select name="private_tour" class="form-control alt" required>
        @foreach(allPrivateTours() as $key => $value)
        <option value="{{ $value }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
</div>
<div class="col-md-12 private">
    <div class="form-group"><label for="Pick-Up Location">Pick Up Location</label><input class="form-control alt"
            type="text" placeholder="Pick-Up location" name="pick_up_location" id="pick_up_location" required> </div>
</div>
<!-- <div class="col-md-6 private">
    <div class="form-group"><label for="Drop off Location">Drop of Location</label><input class="form-control alt"
            type="text" placeholder="Drop off location" name="drop_off_location" id="drop_off_location" required> </div>
</div> -->


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
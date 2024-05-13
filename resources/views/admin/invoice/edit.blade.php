@extends('admin.layouts.app')
@section('title', 'Invoice Create')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Invoice Create </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <form action="{{ route('update-manual-imvoice', $invoice->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Client Name *</label>
                                <input type="text" name="passanger[full_name]" value="{{ $passanger->full_name }}" class="form-control" placeholder="Client name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Mobile Number *</label>
                                <input type="text" name="passanger[phone_number]" value="{{ $passanger->phone_number }}" class="form-control" placeholder="Mobile Number" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Client Email *</label>
                                <input type="text" name="passanger[email]" value="{{ $passanger->email }}" class="form-control" placeholder="Client Email" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Pick up location *</label>
                                <input type="text" name="pick_up_location" value="{{ $invoice->pick_up_location }}" class="form-control" placeholder="Pick up location" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Drop off location *</label>
                                <input type="text" name="drop_off_location" value="{{ $invoice->drop_off_location }}" class="form-control" placeholder="Drop off location" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Pick up date *</label>
                                <input type="date" name="pick_up_date" value="{{ $invoice->pick_up_date }}" class="form-control" placeholder="Pick up date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Pick up time *</label>
                                <input type="time" name="pick_up_time" value="{{ $invoice->pick_up_time }}" class="form-control" placeholder="Pick up time" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Return Pickup Date</label>
                                <input type="date" name="return[pick_up_date]" value="{{ $invoice->pick_up_date }}" class="form-control" placeholder="Return Pick up location">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Return Pickup Time</label>
                                <input type="time" name="return[pick_up_time]" value="{{ $invoice->pick_up_time }}" class="form-control" placeholder="Return Drop off location">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Extra Wait </label>
                                <input type="text" name="extra_wait" value="{{ $invoice->extra_wait }}" class="form-control" placeholder="Extra wait">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Baby Seat </label>
                                <input type="number" name="baby_seat" value="{{ $invoice->baby_seat }}" class="form-control" placeholder="Baby seat">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Hours </label>
                                <input type="number" name="hours" value="{{ $invoice->hours }}" class="form-control" placeholder="Hours">
                            </div>
                         
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Number of Passangers * </label>
                                <input type="number" name="no_of_passangers" value="{{ $invoice->no_of_passangers }}" class="form-control" placeholder="Number of Passangers">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Service *</label>
                                <select id="service_id" name="service_id" class="form-control">
                                    <option value="">Choose Service </option>
                                    @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3" id="vehicles">
                                
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Flight Number </label>
                                <input type="text" name="flight_number" value="{{ $invoice->flight_number }}" class="form-control" placeholder="Flight Number">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Add Stop </label>
                                <input type="text" name="stops[]" value="{{ $invoice->stops }}" class="form-control" placeholder="Add stop">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Discount </label>
                                <input type="number" name="discount" value="{{ $invoice->discount }}" class="form-control" placeholder="Discount">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Late Night / Early Morning Pickup </label>
                                <input type="number" name="late_night" value="{{ $invoice->late_night }}" class="form-control" placeholder="Late Night / Early Morning Pickup">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Other Charge </label>
                                <input type="number" name="other_charge" value="{{ $invoice->other_charge }}" class="form-control" placeholder="Other Charge">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">GST 10% *</label>
                                <input type="number" name="vat" value="{{ $invoice->vat }}" class="form-control" placeholder="GST 10% ">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Total Fare (with GST)*</label>
                                <input type="number" name="subtotal" value="{{ $invoice->subtotal }}" class="form-control" placeholder="Total Fare (with GST)">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Invoice Date *</label>
                                <input type="date" name="created_at" value="{{ $invoice->created_at }}" class="form-control" placeholder="Invoice Date">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Due Date *</label>
                                <input type="date" name="due_date" value="{{ $invoice->due_date }}" class="form-control" placeholder="Due Date">
                            </div>
                            <div class="col-md-6 mb-3 mt-4">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection

@push('custom-script')
<script>
$(document).ready(function(){
    $('#service_id').on('input', function(){
        var inputValue = $(this).val();
        $.ajax({
            url: '/get-vehicles',
            type: 'GET',
            data: {inputValue: inputValue},
            dataType: 'html',
            success: function(response){
                $('#vehicles').html(response);
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
@endpush
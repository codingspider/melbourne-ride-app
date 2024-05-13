@extends('admin.layouts.app')
@section('title', 'General Setting')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Setting Update </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <form action="{{ route('setting-update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-3 col-form-label">Business Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Enter Title" class="form-control" name="business_name"
                                    required="" value="{{ $general->business_name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Business Address: <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="address" placeholder="Enter Address" class="form-control"
                                    name="business_address" required="" value="{{ $general->business_address}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Business Phone
                                Number: <span
                                class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="tel" placeholder="Enter Number" class="form-control" name="business_number" value="{{ $general->business_number}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Business Email: <span
                                class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" placeholder="Enter email" class="form-control" name="business_email" value="{{ $general->business_email}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 mt-2">
                            <label for="inputText" class="col-sm-6 col-form-label">Payment Method </label>
                            <div class="col-sm-10">
                                <div class="form-check">

                                    <input type="checkbox" class="form-check-input" style="border-radius: 50%;" name="nab_transact" 
                                           {{ $general->nab_transact ? 'checked' : '' }} id="nab_transact-checkbox">

                                    <label class="form-check-label" for="nab_transact-checkbox">
                                        NAB Transact
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row mb-3 myDiv" @if($general->nab_transact == null) style="display:none" @endif>
                            <label for="inputText" class="col-sm-6 col-form-label">Merchant ID<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="merchant_id" value="{{ $general->merchant_id}}">
                            </div>
                        </div>
                    
                        <div class="row mb-3 myDiv" @if($general->nab_transact == null) style="display:none" @endif>
                            <label for="inputPassword" class="col-sm-6 col-form-label"> Transaction Password <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="transaction_pass" value="{{ $general->transaction_pass}}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-6 col-form-label">Paypal Client ID<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="paypal_client_id" value="{{ $general->paypal_client_id}}">
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label"> Paypal Secret  <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="paypal_secret" value="{{ $general->paypal_secret}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 mt-2">
                            <label for="inputText" class="col-sm-6 col-form-label">SMS Status</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" style="border-radius: 50%;" name="sms_status" 
                                           {{ $general->sms_status ? 'checked' : '' }} id="sms_status-checkbox">

                                    <label class="form-check-label" for="sms_status-checkbox">
                                        Send SMS
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row mb-3 smsDiv" @if($general->sms_status == null) style="display:none" @endif>
                            <label for="inputText" class="col-sm-6 col-form-label">Clicksend Username<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="clicksend_username" value="{{ $general->clicksend_username}}">
                            </div>
                        </div>
                    
                        <div class="row mb-3 smsDiv" @if($general->sms_status == null) style="display:none" @endif>
                            <label for="inputPassword" class="col-sm-6 col-form-label"> Clicksend API <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="clicksend_key" value="{{ $general->clicksend_key}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">GST Setting: <span
                                class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" placeholder="Enter GST %" class="form-control" name="gst"
                                    required value="{{ $general->gst}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Subrub Charge Type : </label>
                            <div class="col-sm-6">
                                <select name="subrub_charge_type" class="form-control">
                                    <option value="0">Choose type </option>
                                    <option {{ $general->subrub_charge_type == 'fixed' ? 'selected' : '' }} value="fixed">Fixed</option>
                                    <option {{ $general->subrub_charge_type == 'amount' ? 'selected' : '' }} value="amount">Amount</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Subrub Charge Amount : </label>
                            <div class="col-sm-6">
                                <input type="number" placeholder="Enter amount" class="form-control" name="subrub_amount" value="{{ $general->subrub_amount }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Admin Confirmation SMS : </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Enter admin confirmation sms" class="form-control" name="admin_confirm_sms" required value="{{ $general->admin_confirm_sms }}">
                            </div>
                        </div>
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Customer Confirmation SMS : </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Enter customer confirmation sms" class="form-control" name="customer_confirm_sms" required value="{{ $general->customer_confirm_sms }}">
                            </div>
                        </div>
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Admin Reminder SMS : </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Enter admin reminder sms" class="form-control" name="admin_remind_sms" required value="{{ $general->admin_remind_sms }}">
                            </div>
                        </div>
                        <div class="row mb-5 mt-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Customer Reminder SMS : </label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Enter customer confirmation sms" class="form-control" name="customer_remind_sms" required value="{{ $general->customer_remind_sms }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                    <div class="row mb-5 mt-3">
                        <label class="col-sm-4 col-form-label"> Logo <span class="text-danger">*</span> </label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <input type="file" name="logo" accept="image/png, image/jpg, image/gif, image/jpeg" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    @if($general->logo)
                                    <img src="{{ asset('assets/images/setting/' . $general->logo) }}" alt="" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-5 mt-3">
                        <label class="col-sm-4 col-form-label"> FavIcon <span class="text-danger">*</span> </label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <input type="file" name="favicon" accept="image/png, image/jpg, image/gif, image/jpeg" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    @if($general->favicon)
                                    <img src="{{ asset('assets/images/setting/' . $general->favicon) }}" alt="" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="row mb-5 mt-5">
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <a class="btn btn-danger" style="margin-right: 10px"
                                        href="{{ route('dashboard') }}">Cancel </a>
                                    <button class="btn btn-info" type="submit">Save </button>
                                </div>
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
$(document).ready(function () {
    $('#nab_transact-checkbox').change(function () {
        $('.myDiv').toggle(this.checked);
    });
    
    $('#sms_status-checkbox').change(function () {
        $('.smsDiv').toggle(this.checked);
    });

    // Initial state check
    if ($('#nab_transact-checkbox').is(':checked')) {
        $('.myDiv').show();
    } else {
        $('.myDiv').hide();
    } 
    
    if ($('#sms_status-checkbox').is(':checked')) {
        $('.smsDiv').show();
    } else {
        $('.smsDiv').hide();
    } 
});

$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Fare </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('fare-store') }}" method="POST">
            @csrf 
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label"> Service <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="service_id" id="" class="form-control">
                            @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label"> Base Fare (Per KM Rate)<span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="number" name="base_fare" class="form-control">
                    </div>
                </div>
                
                <!-- <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label"> Per KM Rate </label>
                    <div class="col-sm-12">
                        <input type="number" name="per_km_rate" class="form-control">
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label"> Per Minute Rate </label>
                    <div class="col-sm-12">
                        <input type="number" name="per_minute_rate" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-6 col-form-label"> Extra Charge </label>
                    <div class="col-sm-12">
                        <input type="number" name="extra_charge" class="form-control">
                    </div>
                </div>

                <div class="row mb-3 mt-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Tax</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" style="border-radius: 50%;" value="1"
                                name="is_vat_applicable">
                            <label class="form-check-label" for="gridCheck2">
                                If Tax Applicable
                            </label>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Vat </label>
                    <div class="col-sm-10">
                        <input type="number" placeholder="vat in percentage" class="form-control" name="vat"
                            value="">
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
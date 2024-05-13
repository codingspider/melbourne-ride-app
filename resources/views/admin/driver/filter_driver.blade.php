<label for="end_location" class="form-label">Transport <span>*</span></label>
<select name="driver_id" class="form-control" id="driver_id">
@foreach($transports as $driver)
    <option value="{{ $driver->driver_id }}">{{ $driver->name }} {{ $driver->model_no }} </option>
@endforeach
</select>
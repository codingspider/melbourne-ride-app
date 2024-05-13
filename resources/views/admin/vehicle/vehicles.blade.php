<label for="">Choose Vehicles </label>
<select name="fleet_id" id="fleet_id" class="form-control">
    @foreach ($items as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
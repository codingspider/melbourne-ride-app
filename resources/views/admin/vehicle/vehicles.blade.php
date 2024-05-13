<select name="traveler[0][fleet_id]" id="fleet_id" class="form-control">
    @foreach ($items as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
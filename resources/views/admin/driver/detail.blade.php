<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="row">
                <h5 class="modal-title" id="exampleModalLabel">Driver Details </h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>First Name </th>
                            <th>Phone Number </th>
                            <th>Address Line 1 </th>
                            <th>License Number </th>
                            <th>Service </th>
                            <th>Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $driver->name }}</td>
                            <td>{{ $driver->phone }}</td>
                            <td>{{ $driver->address }}</td>
                            <td>{{ $driver->license_number }}</td>
                            <td>{{ $driver->service->name }}</td>
                            <td>{!! $driver->badgeData() !!}</td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="modal-title"> Driver Transport Details </h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Transport Name </th>
                            <th>Register Number </th>
                            <th>Engine Number </th>
                            <th>Chasis Number </th>
                            <th>Model Number </th>
                            <th>Seat Capacity </th>
                            <th>Car Plate Number </th>
                            <th>Operating License </th>
                            <th>Photo </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $driver->driver_transport_detail->name ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->register_no ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->engine_no ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->chasis_no ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->model_no ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->seat_capacity ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->car_planumber ?? '' }}</td>
                            <td>{{ $driver->driver_transport_detail->operating_license ?? '' }}</td>
                            @php
                            $photos = $driver->driver_transport_detail->car_photos ?? "[]";
                            $arrayRepresentation = json_decode($photos) ?? [];
                            @endphp
                            <td>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @foreach($arrayRepresentation as $key => $value)
                                            <img src="{{ asset('assets/images/carphotos/'. $value) }}" alt="" srcset="">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
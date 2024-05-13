<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pick up date </th>
            <!--<th>Pick up time </th>-->
            <!-- <th>Pick up location</th>
            <th>Drop off loction </th>
            <th>Stops</th>
            <th>Passanger </th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $requestData['pick_up_date'] ?? null }}</td>
            <!--<td>{{ $requestData['pick_up_time'] ?? null  }}</td>-->
            <!-- <td>{{ $requestData['pick_up_location'] ?? null  }}</td>
            <td>{{ $requestData['drop_off_location'] ?? null  }}</td>
            <td>{{ $requestData['stops'] ?? null  }}</td>
            <td>{{ $requestData['number_of_passenger'] ?? null  }}</td> -->
        </tr>
    </tbody>
</table>
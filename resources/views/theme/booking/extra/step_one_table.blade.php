<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pick up date </th>
            <th>Pick up time </th>

            @if($requestData['service_id'] == 1)
            <th>Pick Up Location</th>
            <th>Drop off loction </th>

            @elseif($requestData['service_id'] == 2)
            <th> Pick Up Location </th>
            <th>  Drop Off Location </th>
            
            @elseif($requestData['service_id'] == 3)
            <th> Pick Up Location </th>
            <th> Drop Off Location </th>
       
            @elseif($requestData['service_id'] == 4)
            <th> Pick Up Location </th>
            <th> Drop Off Location </th>
            <th> Hours </th>
            
            @elseif($requestData['service_id'] == 5)
            <th> Pick Up Location </th>
            <th> Ceremony Location </th>
            <th> Hours </th>
    
            @elseif($requestData['service_id'] == 6)
            <th> Tour </th>
            <th> Pick Up Location </th>
            @endif 
            <th>Name </th>
            <th>Phone Number </th>
            <th>Email </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $requestData['pick_up_date'] ?? null }}</td>
            <td>{{ $requestData['pick_up_time'] ?? null  }}</td>

            @if($requestData['service_id'] == 1)
            <td>{{ $requestData['pick_up_location'] ?? null  }}</td>
            <td>{{ $requestData['point_b'] ?? null  }}</td>

            @elseif($requestData['service_id'] == 2)
            <td>{{ $requestData['point_a'] ?? null  }}</td>
            <td>{{ $requestData['airport'] ?? null  }}</td>
            
            @elseif($requestData['service_id'] == 3)
            <td>{{ $requestData['pick_up_location'] ?? null  }}</td>
            <td>{{ $requestData['drop_off_address'] ?? null  }}</td>
            
            @elseif($requestData['service_id'] == 4)
            <td>{{ $requestData['pick_up_location'] ?? null  }}</td>
            <td>{{ $requestData['drop_off_address'] ?? null  }}</td>
            <td>{{ $requestData['hours'] ?? null  }}</td>
            
            @elseif($requestData['service_id'] == 5)
            <td>{{ $requestData['pick_up_location'] ?? null  }}</td>
            <td>{{ $requestData['ceremony_location'] ?? null  }}</td>
            <td>{{ $requestData['hours'] ?? null  }}</td>
            
            @elseif($requestData['service_id'] == 6)
            <td>{{ $requestData['private_tour'] ?? null  }}</td>
            <td>{{ $requestData['pick_up_location'] ?? null  }}</td>

            @endif

            <td>{{ $requestData['full_name'] ?? null  }}</td>
            <td>{{ $requestData['phone_number'] ?? null  }}</td>
            <td>{{ $requestData['email'] ?? null  }}</td>
        </tr>
    </tbody>
</table>
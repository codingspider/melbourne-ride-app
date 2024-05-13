
let map;
let directionsService;
let directionsRenderer;
let pickUpMarker;
let dropOffMarker;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -37.8136, lng: 144.9631  },
        zoom: 12
    });

    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    // Autocomplete for pick-up location
    const pickUpAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById('pick_up_location'),
        {
            types: ['geocode'],
            componentRestrictions: { country: 'AU' }
        }
    );

    pickUpAutocomplete.addListener('place_changed', function() {
        const place = pickUpAutocomplete.getPlace();

        // Clear existing marker and directions
        if (pickUpMarker) {
            pickUpMarker.setMap(null);
        }
        if (dropOffMarker) {
            dropOffMarker.setMap(null);
        }
        directionsRenderer.setDirections({ routes: [] });

        // Create marker for pick-up location
        pickUpMarker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            title: 'Pick-up Location',
            icon: {
                path: google.maps.SymbolPath.CIRCLE,
                fillColor: '#FF0000',
                fillOpacity: 1,
                strokeWeight: 0,
                scale: 10 // Adjust the scale to change the size of the marker
            }
        });

        map.panTo(place.geometry.location);
        calculateAndDisplayRoute();
    });

    // Autocomplete for drop-off location
    const dropOffAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById('drop_off_location'),
        {
            types: ['geocode'],
            componentRestrictions: { country: 'AU' }
        }
    );

    dropOffAutocomplete.addListener('place_changed', function() {
        const place = dropOffAutocomplete.getPlace();

        // Clear existing marker and directions
        if (pickUpMarker) {
            pickUpMarker.setMap(null);
        }
        if (dropOffMarker) {
            dropOffMarker.setMap(null);
        }
        directionsRenderer.setDirections({ routes: [] });

        // Create marker for drop-off location
        dropOffMarker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            title: 'Drop-off Location'
        });

        map.panTo(place.geometry.location);
        calculateAndDisplayRoute();
        calculateDistance();
    });
}

function calculateAndDisplayRoute() {
    const start = document.getElementById('pick_up_location').value;
    const end = document.getElementById('drop_off_location').value;

    directionsService.route({
        origin: start,
        destination: end,
        travelMode: 'DRIVING'
    }, function (response, status) {
        if (status === 'OK') {
            directionsRenderer.setDirections(response);
        } 
    });
}

function calculateDistance() {
    var origin = document.getElementById('pick_up_location').value;
    var destination = document.getElementById('drop_off_location').value;

    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix(
        {
            origins: [origin],
            destinations: [destination],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
        },
        function(response, status) {
            if (status == 'OK') {
                var distance = response.rows[0].elements[0].distance;
                var duration = response.rows[0].elements[0].duration;

                var main_distance = parseFloat(distance.value/1000);
                $('#total_distance').val(main_distance);
                $('#total_duration').val(duration.text);
            } else {
                alert('Error: ' + status);
            }
        }
    );
}

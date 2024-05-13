$(document)
    .ready(function () {
        "use strict";

        let map;
        let directionsService;
        let directionsRenderer;
        let pickUpMarker;
        let dropOffMarker;

        function initMap() {
            map = new google
                .maps
                .Map(document.getElementById('map'), {
                    center: {
                        lat: 37.7749,
                        lng: -122.4194
                    },
                    zoom: 12
                });

            directionsService = new google
                .maps
                .DirectionsService();
            directionsRenderer = new google
                .maps
                .DirectionsRenderer();
            directionsRenderer.setMap(map);

            // Autocomplete for pick-up location
            const pickUpAutocomplete = new google
                .maps
                .places
                .Autocomplete(document.getElementById('pick_up_location'), {types: ['geocode']});

            pickUpAutocomplete.addListener('place_changed', function () {
                const place = pickUpAutocomplete.getPlace();

                // Clear existing marker and directions
                if (pickUpMarker) {
                    pickUpMarker.setMap(null);
                }
                if (dropOffMarker) {
                    dropOffMarker.setMap(null);
                }
                directionsRenderer.setDirections({routes: []});

                // Create marker for pick-up location
                pickUpMarker = new google
                    .maps
                    .Marker({map: map, position: place.geometry.location, title: 'Pick-up Location'});

                map.panTo(place.geometry.location);
                calculateAndDisplayRoute();
            });

            // Autocomplete for drop-off location
            const dropOffAutocomplete = new google
                .maps
                .places
                .Autocomplete(document.getElementById('drop_off_location'), {types: ['geocode']});

            dropOffAutocomplete.addListener('place_changed', function () {
                const place = dropOffAutocomplete.getPlace();

                // Clear existing marker and directions
                if (pickUpMarker) {
                    pickUpMarker.setMap(null);
                }
                if (dropOffMarker) {
                    dropOffMarker.setMap(null);
                }
                directionsRenderer.setDirections({routes: []});

                // Create marker for drop-off location
                dropOffMarker = new google
                    .maps
                    .Marker({map: map, position: place.geometry.location, title: 'Drop-off Location'});

                map.panTo(place.geometry.location);
                calculateAndDisplayRoute();
            });
        }

        function calculateAndDisplayRoute() {
            const start = document
                .getElementById('pick_up_location')
                .value;
            const end = document
                .getElementById('drop_off_location')
                .value;

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

    });
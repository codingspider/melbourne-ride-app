<style>
.carousel-control {
    width: 0%;
}
.pac-container {
    z-index: 10000; /* Adjust the z-index value as needed */
}
</style>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form action="#" method="POST" id="return_ride_form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Pick-Up Date">Pick-Up Date</label>
                                        <input name="pick_up_date" class="form-control alt datepick" id="pick_up_date" type="text" required placeholder="Pick up date">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Pick-Up Time">Pick-Up Time</label>
                                        <input name="pick_up_time" class="form-control alt timepick" id="pick_up_time" type="text" required
                                        placeholder="Pick up time">
                                    </div>
                                </div>

                                @if($service == 2)
                                <div class="col-md-12">
                                    <div class="form-group"><label for="Pick-Up Date">Flight Number </label><input name="flight_number"
                                            class="form-control alt" id="flight_number" type="text" required></div>
                                </div>
                                @endif

                                <div class="col-md-12">
                                    <div class="left">
                                        <div class="overflowed">
                                            <button class="btn btn-theme pull-right" type="submit">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Function to initialize Autocomplete for Place One input
        function initMapPlaceOne() {
            const input = document.getElementById("placeOne");
            const options = {
                types: ["geocode"],
                componentRestrictions: { country: "au" }
            };
            const autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        // Function to initialize Autocomplete for Place Two input
        function initMapPlaceTwo() {
            const input = document.getElementById("placeTwo");
            const options = {
                types: ["geocode"],
                componentRestrictions: { country: "au" }
            };
            const autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        // Call the initialization functions when document is ready
        initMapPlaceOne();
        initMapPlaceTwo();
        
        $('.datepick').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        
        $('.timepick').datetimepicker({
            format: 'LT'
        });
    });
</script>
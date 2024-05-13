$(document).ready(function() {
    "use strict";
    // step 1 form submit 
    $(document).on("submit", "#ride_form", function(e){
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: form.serialize(),
            dataType: "html",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(response) {
                $('#step_1_form_data').show();
                $('#step_1_form').hide();
                $('#first_step_data_table').html(response);
                findFleets();
            },
            error: function(response) {
                if (response.status === 422) {
                    toastr.error('Validation Error', { closeButton: true, timeOut: 500 });
                }else if (response.status === 500) {
                    toastr.error('Internal server error', { closeButton: true, timeOut: 500 });
                } else {
                    toastr.error('An unexpected error occurred.');
                }
            },   
            
        });
    });

    function findFleets(){
        $.ajax({
            url: '/get-fleets-data',
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                $('#fleets-table').html(response);
                $('#step_2_form_data').show();
            },
            error: function(response) {
                if (response.status === 422) {
                    // Display validation errors using Toastr
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error', { closeButton: true, timeOut: 5000 });
                    });
                }
            }
        });
    };

    $('#fleets-table').on('click', '.pagination a', function(e) {
        e.preventDefault();
        const page = $(this).attr('href').split('page=')[1];
        loadItems(page);
    });
        
    function loadItems(page) {
        $.ajax({
            url: '/get-fleets-data?page=' + page,
            type: 'get',
            datatype: 'html',
            success: function(data) {
                $('#fleets-table').html(data);
            },
        });
    }

    $(document).on("click", ".fleet", function(e) {
        e.preventDefault();
        var url = $(this).attr("href");
        // Send an AJAX GET request
        $.ajax({
            url: url,
            type: "GET",
            dataType: 'html',
            success: function(response) {
                $('#step_2_form_data').hide();
                $('#step_2_fleet_data').show();
                // $('#step_3_form_data').show();
                $('#flight_info').show();
                $('#flight_info_data_table').html(response);
                getRate();
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error', { closeButton: true, timeOut: 5000 });
                    });
                }
            }
        });
    });

    
    $(document).on("submit", "#final_form", function(e){
        e.preventDefault();
        var form = $(this);
        var actionUrl = form.attr('action');
        $('#bookBtn').prop('disabled', true);
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(response) {
                if(response.status == 200){
                    toastr.success(response.success, { closeButton: true, timeOut: 5000 });
                    location.reload(true);
                }else{
                    toastr.error('Validation Error', { closeButton: true, timeOut: 5000 });
                }
                $('#bookBtn').prop('disabled', false);
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error', { closeButton: true, timeOut: 5000 });
                    });
                }
                $('#bookBtn').prop('disabled', false);
            }
        });
    });

    function getRate(){
        var rate = $('#fare').val();
        var gst = $('#gst').val();
        var fleet = $('#fleet_id').val();

        $('.flat_rate').text('$'+ rate);
        $('.gst').text('$'+gst);
        $('#selected_fleet_id').val(fleet);
        $('#subtotal').val(rate);
        $('#vat').val(gst);
    }

});
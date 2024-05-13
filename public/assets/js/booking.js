$(document).ready(function() {
    "use strict";


    $(document).on('change', 'input[name="payment_method"]:checked', function(){ 
        var value = $(this).val();

        if (value === 'paypal') {
            $("#card_option").hide();
            $("#card_info").hide();
        } else if (value === 'direct_driver_payment') {
            $("#card_option").hide();
            $("#card_info").hide();
        } else {
            $("#card_option").show();
        }
    });
    

    $(document).on('change', '#check_drop', function(){ 
        // Check if the checkbox is checked
        if($(this).is(":checked")) {
          // If checked, show the div
          $("#drop_airline_name").hide();
          $("#drop_flight").hide();
        } else {
          // If not checked, hide the div
          $("#drop_airline_name").show();
          $("#drop_flight").show();
        }
    });

    $(document).on('change', '#check_picup', function(){ 
        // Check if the checkbox is checked
        if($(this).is(":checked")) {
          // If checked, show the div
          $("#pick_airline_name").hide();
          $("#pick_flight").hide();
        } else {
          // If not checked, hide the div
          $("#pick_airline_name").show();
          $("#pick_flight").show();
        }
    });

    $(document).on('change', '#card_type', function(){  
        if($(this).val() == 1) {
            $("#card_info").show();
            $("#saved_cards").hide();
        } else {
            $("#card_info").hide();
            $("#saved_cards").show();
        }
    }); 
    
    $(document).on('click', '.step_one_edit', function(e) {
        $("#step_1_form_data").hide();
        $("#step_2_fleet_data").hide();
        $("#step_1_form").show();
        $("#step_2_form_data").hide();
    });
    
    $(document).on('click', '.step_two_edit', function(e) {
        $("#step_2_fleet_data").hide();
        $("#step_2_form_data").show();
    });
    
    


    

});
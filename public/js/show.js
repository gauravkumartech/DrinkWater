$(document).ready(function() {

    $(document).on("click", ".show_step1_form", function(event) {
        // showLoader();
        console.log("show_step1_form");
        $(".step2_form").hide(true);
        $(".step3_form").hide(true);
        $(".step4_form").hide(true);
        $(".step1_form").show(true);
        $(".current_tab").val("step1_form");
        setDropDownvalue();
        // hideLoader();
    });

    $(document).on("click", ".show_step2_form", function(event) {
        // showLoader();
        console.log("show_step2_form");
        $(".step1_form").hide(true);
        $(".step3_form").hide(true);
        $(".step4_form").hide(true);
        $(".step2_form").show(true);
        $(".current_tab").val("step2_form");
        setDropDownvalue();
        // hideLoader();
    });

    $(document).on("click", ".show_step3_form", function(event) {
        console.log("show_step3_form");
        $('.payment_method').next(".dropdown-toggle").prop('disabled', false);
        $('.payment_method').show();
        // showLoader();
        $(".step1_form").hide(true);
        $(".step2_form").hide(true);
        $(".step4_form").hide(true);
        $(".step3_form").show(true);
        $(".current_tab").val("step3_form");
        setDropDownvalue();
        // hideLoader();
    });

    $(document).on("click", ".show_step4_form", function(event) {
        console.log("show_step4_form");
        $('.payment_method').next(".dropdown-toggle").prop('disabled', true);
        // showLoader();
        $(".step1_form").hide(true);
        $(".step2_form").hide(true);
        $(".step2_form").hide();
        $(".step3_form").hide(true);
        $(".step4_form").show(true);
        $(".step5_form").hide(true);
        $(".current_tab").val("step4_form");
        setDropDownvalue();
        // hideLoader();
    });

    $(document).on("click", ".show_step5_form", function(event) {
        console.log("show_step5_form");
        console.log(localStorage.getItem('braintree_error'));
        console.log(`$("#basic-form").valid()`, $("#basic-form").valid());

        // showLoader();

        if ($("#basic-form").valid() && (localStorage.getItem('braintree_error') == 'false' || localStorage.getItem('braintree_error') == false)) {

            console.log('IN');

            // $('.package_note_final_page').text($('#package5').children("option:selected").text());

            // // $('.payment_method').next(".dropdown-toggle").hide();

            // $('.shipping_address_final_page').val( $('#shipping_address').val());
            // $('.shipping_address1_final_page').val( $('#shipping_address2').val());
            // $('.s_city_state_zip_final_page').val( $('#s_city_state_zip').val());

            // $('.last_4_digit_card').text($("#basic-form").serializeArray()[23].value.substr($("#basic-form").serializeArray()[23].value.length - 4));


            // $(".step1_form").hide(true);
            // $(".step2_form").hide(true);
            // $(".step2_form").hide();
            // $(".step3_form").hide(true);
            // $(".step4_form").hide(true);
            // $(".step5_form").show(true);
            $(".current_tab").val("step5_form");
            $('.payment_method').show();
            $('.payment_method').next(".dropdown-toggle").prop('disabled', false);

            $('.final_page_package_label').next(".dropdown-toggle").prop('disabled', true);
            $('.final_page_delivery_freq_label').next(".dropdown-toggle").prop('disabled', true);
            $('.final_page_edit_address_label').next(".dropdown-toggle").prop('disabled', true);


            // setDropDownvalue();

            // let package_value = localStorage.getItem('package');
            // let service_fees = string.service_fees.toFixed(2);
            // let delivery_fees = string.delivery_fees.toFixed(2);
            // let tax = ((string.package[package_value]*string.tax)/100).toFixed(2);
            // let package_amount = string.package[package_value];
            // let total_amount = (parseFloat(package_amount) + parseFloat(service_fees) + parseFloat(delivery_fees) + parseFloat(tax)).toFixed(2);

            // $('.service_fees').text('$' + service_fees);
            // $('.delivery_fees').text('$' + delivery_fees);
            // $('.tax_amount').text('$' + tax);
            // $('.total_amount').text('$' + total_amount);
            // $('.total_amount').val(total_amount);
        }

        // hideLoader();
    });

    $(document).on("click", ".show_final_form", function(event) {
        console.log("show_final_form");
        if ($("#basic-form").valid()) {
            showLoader();
            $(".step1_form").hide(true);
            $(".step2_form").hide(true);
            $(".step3_form").hide(true);
            $(".step4_form").hide(true);
            $(".final_form").show(true);
            $(".current_tab").val("final_form");
            setDropDownvalue();
        }
    });
});
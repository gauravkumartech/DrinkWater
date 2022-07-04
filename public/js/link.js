var form = document.querySelector('#basic-form');
var client_token = $('.client_token').val();

braintree.dropin.create({
    authorization: client_token,
    selector: '#bt-dropin',
    // paypal: {
    //     flow: 'vault'
    // }
}, function(createErr, instance) {
    if (createErr) {
        console.log('Create Error', createErr);
        return;
    }
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        instance.requestPaymentMethod(function(err, payload) {
            if (err) {
                console.log('Request Payment Method Error', err);
                localStorage.setItem('braintree_error', true);
                return;
            }

            // Add the nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            localStorage.setItem('braintree_error', false);
            // form.submit();
            // $('.show_step5_form').click();
        });
    });
});


$(document).ready(function() {

    $('.shipping_address_final_page').prop('disabled', true).hide();
    $('.shipping_address1_final_page').prop('disabled', true).hide();
    $('.s_city_state_zip_final_page').prop('disabled', true).hide();

    $('.shipping_add_final_page').show().text($('.shipping_address_final_page').val() + ' ' + $('.shipping_address1_final_page').val())
    $('.citi_state_zip_final_page').show().text($('.s_city_state_zip_final_page').val())
    $('.final_page_package_label').next(".dropdown-toggle").prop('disabled', true);
    $('.payment_method_final_page').text($('.payment_method_finl_page_class').children("option:selected").text());
    // showLoader();     

    $(document).on("change", "#package1", function() {
        console.log("package1 change");

        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package2", function() {
        console.log("package2 change");
        let selected = $(this).children("option:selected").val();
        console.log(selected);
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package3", function() {
        console.log("package3 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package4", function() {
        console.log("package4 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package5", function() {
        console.log("package5 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();

        $('.package_note_final_page').text($('#package5').children("option:selected").text());

        let package_value = localStorage.getItem('package');
        let service_fees = string.service_fees.toFixed(2);
        let delivery_fees = string.delivery_fees.toFixed(2);
        let tax = ((string.package[package_value] * string.tax) / 100).toFixed(2);
        let package_amount = string.package[package_value];
        let total_amount = (parseFloat(package_amount) + parseFloat(service_fees) + parseFloat(delivery_fees) + parseFloat(tax)).toFixed(2);

        $('.service_fees').text('$' + service_fees);
        $('.delivery_fees').text('$' + delivery_fees);
        $('.tax_amount').text('$' + tax);
        $('.tax_amount').val(tax);
        $('.total_amount').text('$' + total_amount);
        $('.total_amount').val(total_amount);
    });

    $(document).on("change", "#delivery_frequency1", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency2", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
    });

    $(document).on("change", "#delivery_frequency3", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency4", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency5", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
        $('.delivery_note_final_page').text($('#delivery_frequency5').children("option:selected").text());
    });

    $(document).on("change", "#payment_method", function() {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("payment_method", selected);
        setDropDownvalue();
    });

    $('.purchase_button').on('click', function() {
        console.log('purchase_button');
        $(".current_tab").val("final_form");
        // $(this).prop('disabled',true);
        // $(this).text('Please Wait......');
        showLoader();
    })

    $("#basic-form").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3,
                maxlength: 15,
            },
            last_name: {
                required: true,
                minlength: 3,
                maxlength: 15,
            },
            mobile: {
                required: true,
                minlength: 7,
                maxlength: 15,
                number: true,
            },
            email: {
                required: true,
                email: true,
                // maxlength: 30,
            },

            package: {
                required: true,
            },

            delivery_frequency: {
                required: true,
            },

            billing_address: {
                required: true,
            },

            shipping_address: {
                required: true,
            },

            billing_address2: {
                required: true,
            },

            shipping_address2: {
                required: true,
            },

            b_city_state_zip: {
                required: true,
            },

            s_city_state_zip: {
                required: true,
            },

            payment_method: {
                required: true,
            },

            name_on_card: {
                required: true,
                maxlength: 40,
            },

            card_number: {
                required: true,
                number: true,
                minlength: 10,
            },

            card_cvv: {
                required: true,
                number: true,
                maxlength: 5,
                minlength: 3,
            },

            card_expiry: {
                required: true,
                minlength: 5,
                maxlength: 6,
            },
        },

        messages: {
            first_name: {
                minlength: "First name must be at least 8 characters long",
                maxlength: "First name must be at least 15 characters long",
            },
            last_name: {
                minlength: "Last name must be at least 8 characters long",
                maxlength: "Last name must be at least 15 characters long",
            },
            email: {
                required: "Email is required",
                email: "Enter a valid email",
            },
            mobile: {
                minlength: "Mobile must be at least 7 characters long",
                maxlength: "Mobile must be at least 15 characters long",
            },

            package: {
                required: "Package is required",
            },

            delivery_frequency: {
                required: "Delivery frequency is required",
            },
        },

        submitHandler: function(form) {
            let current_tab = $(".current_tab").val();
            console.log('current_tab', current_tab);

            console.log($(this));

            if (current_tab == "step1_form") {
                showLoader();
                if ($("#basic-form").valid()) {
                    setDropDownvalue();
                    $(".step1_form").hide();
                    $(".step2_form").show();
                    $(".current_tab").val("step2_form");
                }
                hideLoader();
            }

            if (current_tab == "step2_form") {
                showLoader();
                $('.payment_method').next(".dropdown-toggle").prop('disabled', false);
                if ($("#basic-form").valid()) {
                    $(".step1_form").hide(true);
                    $(".step2_form").hide(true);
                    $(".step4_form").hide(true);
                    $(".step3_form").show(true);
                    $(".current_tab").val("step3_form");
                    setDropDownvalue();
                }
                hideLoader();
            }

            if (current_tab == "step3_form") {
                showLoader();
                if ($("#basic-form").valid()) {
                    $(".step1_form").hide(true);
                    $(".step2_form").hide(true);
                    $(".step2_form").hide();
                    $(".step3_form").hide(true);
                    $(".step4_form").show(true);
                    $(".step5_form").hide(true);
                    $(".current_tab").val("step4_form");
                    setDropDownvalue();
                }
                hideLoader();
            }

            if (current_tab == "step4_form") {
                $('.show_step5_form').click();
                $('#basic_form').submit();
            }

            if (current_tab == 'step5_form') {
                // return;
                // form.submit();
                $('.package_note_final_page').text($('#package5').children("option:selected").text());

                $('.payment_method').next(".dropdown-toggle").hide();

                $('.shipping_address_final_page').val($('#shipping_address').val());
                $('.shipping_address1_final_page').val($('#shipping_address2').val());
                $('.s_city_state_zip_final_page').val($('#s_city_state_zip').val());

                $('.last_4_digit_card').text($("#basic-form").serializeArray()[23].value.substr($("#basic-form").serializeArray()[23].value.length - 4));


                $(".step1_form").hide(true);
                $(".step2_form").hide(true);
                $(".step3_form").hide(true);
                $(".step4_form").hide(true);
                $(".step5_form").show(true);
                $(".current_tab").val("final_form");
                setDropDownvalue();

                let package_value = localStorage.getItem('package');
                let service_fees = string.service_fees.toFixed(2);
                let delivery_fees = string.delivery_fees.toFixed(2);
                let tax = ((string.package[package_value] * string.tax) / 100).toFixed(2);
                let package_amount = string.package[package_value];
                let total_amount = (parseFloat(package_amount) + parseFloat(service_fees) + parseFloat(delivery_fees) + parseFloat(tax)).toFixed(2);

                $('.service_fees').text('$' + service_fees);
                $('.delivery_fees').text('$' + delivery_fees);
                $('.tax_amount').text('$' + tax);
                $('.tax_amount').val(tax);
                $('.total_amount').text('$' + total_amount);
                $('.total_amount').val(total_amount);

            }

            if (current_tab == 'final_form') {
                if ($("#basic-form").valid()) {
                    $(".step1_form").hide(true);
                    $(".step2_form").hide(true);
                    $(".step3_form").hide(true);
                    $(".step4_form").hide(true);
                    $(".step5_form").hide(true);
                    $(".final_form").show(true);
                    $(".current_tab").val("final_form");
                }
                setDropDownvalue();
                form.submit();
            }
        },
    });


    function showLoader() {
        $('.loader').show();
        $('.main_content').hide();
    }

    function hideLoader() {

        // $('.loader').hide();
        // $('.main_content').show();
        // return;

        setTimeout(function() {
            $('.loader').hide();
            $('.main_content').show();
        }, 1000);
    }


    $(".same_billing_address").click(function() {
        $("#shipping_address").val($("#billing_address").val());
        $("#shipping_address2").val($("#billing_address2").val());
        $("#s_city_state_zip").val($("#b_city_state_zip").val());
    });

    $('.edit_package').on('click', function() {
        $('.package_note_final_page').text($('#package5').children("option:selected").text());
        $('.final_page_package_label').next(".dropdown-toggle").prop('disabled', true);

        if ($(this).text() == 'Edit') {
            $('.final_page_package_label').hide();
            $('#package5').next(".dropdown-toggle").show();
            $('#package5').next(".dropdown-toggle").prop('disabled', false);
            $(this).text('Save');
        } else {
            $('#package5').next(".dropdown-toggle").hide();
            $('#package5').next(".dropdown-toggle").prop('disabled', true);
            $('.final_page_package_label').show();
            $(this).text('Edit');
        }
    })

    $('.edit_delivery_freq').on('click', function() {

        $('.delivery_note_final_page').text($('#delivery_frequency5').children("option:selected").text());
        $('.final_page_delivery_freq_label').next(".dropdown-toggle").prop('disabled', true);

        if ($(this).text() == 'Edit') {
            $('.final_page_delivery_freq_label').hide();
            $('#delivery_frequency5').next(".dropdown-toggle").show();
            $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', false);
            $(this).text('Save');
        } else {
            $('.final_page_delivery_freq_label').show();
            $('#delivery_frequency5').next(".dropdown-toggle").hide();
            $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', true);
            $(this).text('Edit');
        }
    })

    $('.edit_address_final_page').on('click', function() {
        $('.shipping_add_final_page').text($('.shipping_address_final_page').val() + ' ' + $('.shipping_address1_final_page').val())
        $('.citi_state_zip_final_page').text($('.s_city_state_zip_final_page').val())
        $('.final_page_edit_address_label').next(".dropdown-toggle").prop('disabled', true);

        if ($(this).text() == 'Edit') {
            $('.final_page_edit_address_label').hide();
            $('.shipping_address_final_page').prop('disabled', false).show();
            $('.shipping_address1_final_page').prop('disabled', false).show();
            $('.s_city_state_zip_final_page').prop('disabled', false).show();
            $(this).text('Save');
        } else {
            $('.final_page_edit_address_label').show();
            $('.shipping_address_final_page').prop('disabled', true).hide();
            $('.shipping_address1_final_page').prop('disabled', true).hide();
            $('.s_city_state_zip_final_page').prop('disabled', true).hide();
            $(this).text('Edit');
        }
    })

    $('.shipping_address_final_page').on('change', function() {
        $("#billing_address").val($(this).val());
    })

    $('.shipping_address1_final_page').on('change', function() {
        $("#billing_address2").val($(this).val());
    })

    $('.s_city_state_zip_final_page').on('change', function() {
        $("#b_city_state_zip").val($(this).val());
    })

    $('.edit_payment_method_final_page').on('click', function() {
        console.log('edit_payment_method_final_page');
        console.log($(this).text());

        $('.final_page_payment_source_label').next(".dropdown-toggle").prop('disabled', true);

        if ($(this).text() == 'Edit') {
            $('.final_page_payment_source_label').hide();
            $('.payment_method').next(".dropdown-toggle").show();
            $('.payment_method').next(".dropdown-toggle").prop('disabled', false);
            $(this).text('Save');
        } else {
            $('.final_page_payment_source_label').show();
            $('.payment_method').next(".dropdown-toggle").hide();
            $('.payment_method').next(".dropdown-toggle").prop('disabled', true);
            $(this).text('Edit');
        }
    })

});
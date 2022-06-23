

$(document).ready(function () {
    
    $('#package5').next(".dropdown-toggle").prop('disabled', true);
    $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', true);

    
    localStorage.clear();

    let time1 = setTimeout(function () {
        $(".splash").hide();
        $(".welcome").show();
    }, string.timeout);

    let time2 = setTimeout(function () {
        $(".splash").hide();
        $(".welcome").hide();
        $(".main_content").show();
    }, string.timeout1);

    $(".splash_link").click(function () {
        clearTimeout(time1);
        $(".splash").hide();
        $(".welcome").show();
        $(".main_content").hide();
    });

    $(".welcome_link").click(function () {
        clearTimeout(time2);
        $(".splash").hide();
        $(".welcome").hide();
        $(".main_content").show();
    });

    $(".main_content_back").click(function () {
        $(".splash").hide();
        $(".welcome").show();
        $(".main_content").hide();

        setTimeout(function () {
            $(".splash").hide();
            $(".welcome").hide();
            $(".main_content").show();
        }, string.timeout);
        setDropDownvalue();
    });

    $(document).on("click", ".show_step1_form", function (event) {
        console.log("show_step1_form");
        $(".step2_form").hide(true);
        $(".step3_form").hide(true);
        $(".step4_form").hide(true);
        $(".step1_form").show(true);
        $(".current_tab").val("step1_form");
        setDropDownvalue();
    });

    $(document).on("click", ".show_step2_form", function (event) {
        console.log("show_step2_form");
        $(".step1_form").hide(true);
        $(".step3_form").hide(true);
        $(".step4_form").hide(true);
        $(".step2_form").show(true);
        $(".current_tab").val("step2_form");
        setDropDownvalue();
    });

    $(document).on("click", ".show_step3_form", function (event) {
        console.log("show_step3_form");
        if ($("#basic-form").valid()) {
            $(".step1_form").hide(true);
            $(".step2_form").hide(true);
            $(".step4_form").hide(true);
            $(".step3_form").show(true);
            $(".current_tab").val("step3_form");
            setDropDownvalue();
        }
    });

    $(document).on("click", ".show_step4_form", function (event) {
        console.log("show_step4_form");
        if ($("#basic-form").valid()) {
            $(".step1_form").hide(true);
            $(".step2_form").hide(true);
            $(".step2_form").hide();
            $(".step3_form").hide(true);
            $(".step4_form").show(true);
            $(".step5_form").hide(true);
            $(".current_tab").val("step5_form");
            setDropDownvalue();
        }
    });

    $(document).on("click", ".show_step5_form", function (event) {
        console.log("show_step5_form");
        $('#package5').prop('disabled',true);
        if ($("#basic-form").valid()) {
            $(".step1_form").hide(true);
            $(".step2_form").hide(true);
            $(".step2_form").hide();
            $(".step3_form").hide(true);
            $(".step4_form").hide(true);
            $(".step5_form").show(true);
            $(".current_tab").val("step5_form");
            setDropDownvalue();
        }
    });

    $(document).on("click", ".show_final_form", function (event) {
        console.log("show_final_form");
        if ($("#basic-form").valid()) {
            $(".step1_form").hide(true);
            $(".step2_form").hide(true);
            $(".step3_form").hide(true);
            $(".step4_form").hide(true);
            $(".final_form").show(true);
            $(".current_tab").val("final_form");
        }
        setDropDownvalue();
    });

    $(document).on("change", "#package1", function () {
        console.log("package1 change");

        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package2", function () {
        console.log("package2 change");
        let selected = $(this).children("option:selected").val();
        console.log(selected);
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package3", function () {
        console.log("package3 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package4", function () {
        console.log("package4 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#package5", function () {
        console.log("package5 change");
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("package", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency1", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency2", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
    });

    $(document).on("change", "#delivery_frequency3", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency4", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#delivery_frequency5", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("delivery_frequency", selected);
        setDropDownvalue();
    });

    $(document).on("change", "#payment_method", function () {
        let selected = $(this).children("option:selected").val();
        localStorage.setItem("payment_method", selected);
        setDropDownvalue();
    });

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
            },

            card_cvv: {
                required: true,
                number: true,
                maxlength: 15,
            },

            card_expiry: {
                required: true,
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

        submitHandler: function (form) {
            let current_tab = $(".current_tab").val();
            if (current_tab == "step1_form") {
                setDropDownvalue();
                $(".step1_form").hide();
                $(".step2_form").show();
                $(".current_tab").val("step2_form");
            }
        },
    });

    function setDropDownvalue() {
        var package = localStorage.getItem("package");
        var delivery_frequency = localStorage.getItem("delivery_frequency");
        var payment_method = localStorage.getItem("payment_method");

        console.log("package", package);
        console.log("delivery_frequency", delivery_frequency);
        console.log("payment_method", payment_method);

        $("select[name=package]").val(package);
        $("select[name=delivery_frequency]").val(delivery_frequency);
        $("select[name=payment_method]").val(payment_method);
        $(".selectpicker").selectpicker("refresh");
    }

    $(".same_billing_address").click(function () {
        $("#shipping_address").val($("#billing_address").val());
        $("#shipping_address2").val($("#billing_address2").val());
        $("#s_city_state_zip").val($("#b_city_state_zip").val());
    });

    $('.edit_package').on('click', function(){
        if( $(this).text() == 'Edit' ){
            $('#package5').next(".dropdown-toggle").prop('disabled', false);
            $(this).text('Save');
        }else{
            $('#package5').next(".dropdown-toggle").prop('disabled', true);
            $(this).text('Edit');
        }
    })

    $('.edit_delivery_freq').on('click', function(){
        if( $(this).text() == 'Edit' ){
            $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', false);
            $(this).text('Save');
        }else{
            $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', true);
            $(this).text('Edit');
        }
    })
});

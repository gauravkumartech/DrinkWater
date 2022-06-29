function setDropDownvalue() {
    var package = localStorage.getItem("package");
    var delivery_frequency = localStorage.getItem("delivery_frequency");
    var payment_method = localStorage.getItem("payment_method");

    // console.log("package", package);
    // console.log("delivery_frequency", delivery_frequency);
    // console.log("payment_method", payment_method);

    $("select[name=package]").val(package);
    $("select[name=delivery_frequency]").val(delivery_frequency);
    $("select[name=payment_method]").val(payment_method);
    $(".selectpicker").selectpicker("refresh");
}


$(document).ready(function() {
    $('#package5').next(".dropdown-toggle").hide();
    $('#delivery_frequency5').next(".dropdown-toggle").hide();
    $('#package5').next(".dropdown-toggle").prop('disabled', true);
    $('#delivery_frequency5').next(".dropdown-toggle").prop('disabled', true);

    localStorage.clear();

    let time1 = setTimeout(function() {
        $(".splash").hide();
        $(".welcome").show();
    }, string.timeout);

    let time2 = setTimeout(function() {
        $(".splash").hide();
        $(".welcome").hide();
        $(".main_content").show();
    }, string.timeout1);

    $(".splash_link").click(function() {
        clearTimeout(time1);
        $(".splash").hide();
        $(".welcome").show();
        $(".main_content").hide();
    });

    $(".welcome_link").click(function() {
        clearTimeout(time2);
        $(".splash").hide();
        $(".welcome").hide();
        $(".main_content").show();
    });


    $(".main_content_back").click(function() {
        $(".splash").hide();
        $(".welcome").show();
        $(".main_content").hide();

        setTimeout(function() {
            $(".splash").hide();
            $(".welcome").hide();
            $(".main_content").show();
        }, string.timeout);
        setDropDownvalue();
    });
})
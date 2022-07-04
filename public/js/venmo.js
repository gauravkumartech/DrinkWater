var venmoButton = document.querySelector('#venmo-button');
var client_token = $('.client_token').val();

// Create a client.
braintree.client.create({
    authorization: client_token
}, function(clientErr, clientInstance) {
    // Stop if there was a problem creating the client.
    // This could happen if there is a network error or if the authorization
    // is invalid.
    console.log("clientInstance:", clientInstance);

    if (clientErr) {
        console.error('Error creating client:', clientErr);
        return;
    }

    braintree.venmo.create({
        client: clientInstance,
        allowNewBrowserTab: false,
        allowDesktop: true,
        profileId: '1953896702662410263'
    }, function(venmoErr, venmoInstance) {
        if (venmoErr) {
            console.error('Error creating Venmo:', venmoErr);
            return;
        }
        console.log("venmoInstance:", venmoInstance);

        if (!venmoInstance.isBrowserSupported()) {
            console.log('Browser does not support Venmo');
            return;
        }

        displayVenmoButton(venmoInstance);

        // Check if tokenization results already exist. This occurs when your
        // checkout page is relaunched in a new tab. This step can be omitted
        // if allowNewBrowserTab is false.
        console.log(venmoInstance.hasTokenizationResult());
        if (venmoInstance.hasTokenizationResult()) {
            venmoInstance.tokenize(function(tokenizeErr, payload) {
                if (err) {
                    handleVenmoError(tokenizeErr);
                } else {
                    handleVenmoSuccess(payload);
                }
            });
            return;
        }
    });


    // braintree.dataCollector.create({
    //     client: clientInstance,
    //     paypal: true
    // }, function(dataCollectorErr, dataCollectorInstance) {
    //     if (dataCollectorErr) {
    //         // Handle error in creation of data collector.
    //         console.log(dataCollectorErr);
    //         return;
    //     }

    //     console.log('dataCollectorInstance:', dataCollectorInstance);
    //     console.log('Got device data:', dataCollectorInstance.deviceData);
    // });


    function displayVenmoButton(venmoInstance) {
        console.log('displayVenmoButton');
        // Assumes that venmoButton is initially display: none.
        venmoButton.style.display = 'block';

        venmoButton.addEventListener('click', function() {

            console.log('displayVenmoButton clicked');

            venmoButton.disabled = true;

            venmoInstance.tokenize(function(tokenizeErr, payload) {

                console.log('payload', payload);

                console.log('tokenizeErr', tokenizeErr);

                venmoButton.removeAttribute('disabled');

                if (tokenizeErr) {
                    handleVenmoError(tokenizeErr);
                } else {
                    handleVenmoSuccess(payload);
                }
            });
        });
    }


    function handleVenmoError(err) {
        if (err.code === 'VENMO_CANCELED') {
            console.log('App is not available or user aborted payment flow');
        } else if (err.code === 'VENMO_APP_CANCELED') {
            console.log('User canceled payment flow');
        } else {
            console.error('An error occurred:', err.message);
        }
    }


});


function handleVenmoSuccess(payload) {
    // Send the payment method nonce to your server, e.g. by injecting
    // it into your form as a hidden input.
    console.log('Got a payment method nonce:', payload.nonce);

    // Display the Venmo username in your checkout UI.
    console.log('Venmo user:', payload.details.username);
    var amount = 1;

    //test nonce for venmo
    payload_nonce = "fake-venmo-account-nonce";

    //uncomment this for live integration
    var payerID = payload_nonce; //payload.nonce;
    var deviceDataToken = '{"correlation_id":"bc850bc0840ab2d9e1d34842d0e3ffa5"}';
    var deviceData = encodeURI(deviceDataToken);

    window.location = "/Directory_name/venmo_server.php/?payerID=" + payerID + "&deviceData=" + deviceData + "&amount=" + amount;
}
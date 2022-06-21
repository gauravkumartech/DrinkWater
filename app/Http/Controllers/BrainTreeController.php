<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Illuminate\Http\Request;

class BrainTreeController extends Controller
{

    public function view()
    {

        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
            'acceptGzipEncoding' => false,
        ]);

        // return 
        // 127755032
        // 694451477
        // 470930138
        // $customer = $gateway->customer()->find('694451477');
        // $result = $gateway->customer()->delete('a_customer_id');

        // ========================================================================
            // $updateResult = $gateway->customer()->update(
            //     '470930138',
            //     [
            //     'firstName' => 'New First',
            //     'lastName' => 'New Last',
            //     'company' => 'New Company',
            //     'email' => 'new.email@example.com',
            //     'phone' => 'new phone',
            //     'fax' => 'new fax',
            //     'website' => 'http://new.example.com'
            //     ]
            // );
            // return $updateResult->success;
        
        // ========================================================================
        

        // ========================================================================
            // $result = $gateway->customer()->create([
            //     'firstName' => 'gaurav',
            //     'lastName' => 'marvaha',
            //     'company' => 'Jones Co.',
            //     'email' => 'mike.jones@example.com',
            //     'phone' => '281.330.8004',
            //     'fax' => '419.555.1235',
            //     'website' => 'http://example.com'
            // ]);

            // return $result->customer->id;
        // ========================================================================


        // return 
        $clientToken = $gateway->clientToken()->generate();

        return view('braintree/index', ['client_token' => $clientToken]);
    }
    
    public function call(Request $request)
    {
        // return $request->all();
        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
            'acceptGzipEncoding' => false,
        ]);


        // return env('BRAINTREE_MERCHANT_ID');

        $result = $gateway->paymentMethod()->create([
            'customerId' => '470930138',
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
              'verifyCard' => true,
              'verificationMerchantAccountId' => env('BRAINTREE_MERCHANT_ID'),
              'verificationAmount' => '2.00',
            ]
        ]);

        return $result;

        if ($result->success) {
            return $verification = $result->paymentMethod->verification;
        }


        $clientToken = $gateway->clientToken()->generate();

        // $clientToken = $gateway->clientToken()->generate([
        //     "customerId" => '1222,'
        // ]);

        // Then, create a transaction:
        $result = $gateway->transaction()->sale([
            'amount' => '10.00',
            'paymentMethodNonce' => $request->payment_method_nonce,
            'deviceData' => "deviceDataFromTheClient",
            'options' => [ 'submitForSettlement' => True ]
        ]);

        if ($result->success) {
            print_r("success!: " . $result->transaction->id);
        } else if ($result->transaction) {
            print_r("Error processing transaction:");
            print_r("\n  code: " . $result->transaction->processorResponseCode);
            print_r("\n  text: " . $result->transaction->processorResponseText);
        } else {
            foreach($result->errors->deepAll() AS $error) {
              print_r($error->code . ": " . $error->message . "\n");
            }
        }
    }
}

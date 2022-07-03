<?php

namespace App\Http\Controllers\Advocate;

use Exception;
use Braintree\Gateway;
use Twilio\Rest\Client;
use App\Models\Advocate;
use App\Models\Order;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdvocateController extends Controller
{
    /**
     * @name : getDetail
     */
    public function getDetail(Request $request)
    {
        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
            'acceptGzipEncoding' => false,
        ]);

        if( $request->method() == 'GET')
        {
            $clientToken = $gateway->clientToken()->generate();

            $data = Advocate::where([
                ['adv_detail_access_token',$request->detail_access_token]
            ])->first();
    
            if( $data ){
        
                return view('advocate/link', [ 
                    'advocateData' => $data,
                    'client_token' => $clientToken 
                ]);
                
            }else{
                return view('others/no_data_found');
            }
        }

        if( $request->method() == 'POST')
        {
            // return $request->all();

            $amount = $request->total_amount ?? 10.00;
            $result = $gateway->transaction()->sale([
                'amount' => $amount,
                'paymentMethodNonce' => $request->payment_method_nonce,
                'deviceData' => "deviceDataFromTheClient",
                'options' => [ 'submitForSettlement' => True ]
            ]);

            // $result_venmo = $gateway->transaction()->sale([
            //     'amount' => $amount,
            //     'paymentMethodNonce' => $request->payment_method_nonce,
            //     'options' => [
            //         'submitForSettlement' => true,
            //         'venmo' => [
            //           'profileId' => '1953896702662410263'
            //         ]
            //     ],
            //     'deviceData' => "deviceDataFromTheClient",
            // ]);

            $orderId = Order::insertGetId([
                'odr_id' => 'ordr_dw_' . time() . '_' . date('Y_m_d'),
                'odr_first_name' => $request->first_name,
                'odr_last_name' => $request->last_name,
                'odr_email' => $request->email,
                'odr_mobile' => $request->mobile,
                'odr_package_id' => $request->package,
                'odr_delivery_frequency_id' => $request->delivery_frequency,
                'billing_address' => $request->billing_address,
                'shipping_address' => $request->shipping_address,
                'billing_address2' => $request->billing_address2,
                'shipping_address2' => $request->shipping_address2,
                'b_city_state_zip' => $request->b_city_state_zip,
                's_city_state_zip' => $request->s_city_state_zip,
                'payment_method' => $request->payment_method,
                'odr_transaction_id' => $result->transaction->id,
                'odr_transaction_amount' => $amount,
                'odr_adv_detail_access_token' => $request->adv_detail_access_token,
                'odr_tax_amount' => $request->tax_amount,
            ]);

            // return 
            $orderDetail = Order::find($orderId);
            $advocateData = Advocate::where('adv_detail_access_token', $request->adv_detail_access_token)->first();

            Mail::to($request->email)->send(new OrderPlaced($advocateData, $orderDetail));

            $accountSid = getenv("TWILIO_ACCOUNT_SID");
            $authToken = getenv("TWILIO_AUTH_TOKEN");
            $client = new Client($accountSid, $authToken);

            $body = 'Hey ' .$orderDetail->odr_first_name .' '. $orderDetail->odr_last_name. '! Order Placed.'. 
            'Thanks For Shopping! Click on link to view Receipt. 
            ' . '<a href="'.url('orderDetail/'. $orderDetail->odr_id).'"> TRACK </a>';

            try
            {
                $client->messages->create(
                    '+91'. $request->mobile,
                    array(
                        'from' => '+19784875912',
                        'body' => $body
                    )
                );
            }catch (Exception $e){
                dd( "Error: " . $e->getMessage() );
            } 

            return redirect()->back();
        }
    }

    public function orderDetail(Request $request)
    {
        $orderDetail = Order::where('odr_id', $request->order_id)->first();

        $advocateData = Advocate::where('adv_detail_access_token', $orderDetail->odr_adv_detail_access_token)->first();

        return view('emails\order_placed_new', [
            'advocateData' => $advocateData,
            'orderDetail' => $orderDetail
        ]);
    }
}

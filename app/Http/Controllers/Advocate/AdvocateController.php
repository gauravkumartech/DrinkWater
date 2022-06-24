<?php

namespace App\Http\Controllers\Advocate;

use Exception;
use Braintree\Gateway;
use Twilio\Rest\Client;
use App\Models\Advocate;
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
        if( $request->method() == 'GET')
        {

            $gateway = new Gateway([
                'environment' => env('BRAINTREE_ENV'),
                'merchantId' => env('BRAINTREE_MERCHANT_ID'),
                'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
                'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
                'acceptGzipEncoding' => false,
            ]);

            $clientToken = $gateway->clientToken()->generate();

            $data = Advocate::where([
                ['adv_detail_access_token',$request->detail_access_token]
            ])->first();
    
            if( $data ){
    
                // Mail::to($data->adv_email)->send(new OrderPlaced());
        
                /* $accountSid = getenv("TWILIO_ACCOUNT_SID");
                $authToken = getenv("TWILIO_AUTH_TOKEN");
                $client = new Client($accountSid, $authToken);
                try
                {
                    $client->messages->create(
                        '+918881438096',
                        array(
                            'from' => '+19784875912',
                            'body' => 'Hey ' .$data->adv_first_name .' '. $data->adv_first_name. '! Order Placed. Thanks For Shopping!'
                        )
                    );
                }catch (Exception $e){
                    echo "Error: " . $e->getMessage();
                } */
        
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
            return $request->all();
        }
    }
}

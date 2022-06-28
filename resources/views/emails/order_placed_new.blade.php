<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRINK WATR</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}" />
    <input type="hidden" value="{{url('/')}}" class="base_url">
</head>
<body>  

    <main class="app_wrapper waterbg">
        <div class="custom_container">

      
            <div class="head_section"> 
                <div class="brand">
                    <figure class="logo"><img src="{{asset('images/logowater.png')}}" alt="Logo" /></figure>
                    <span class="brand_txt">+ {{$advocateData->adv_first_name  ?? ''}} {{$advocateData->adv_last_name  ?? ''}}</span>
                </div>

                <div class="tagline_wrap">
                    <!-- <div class="tagline">
                            <span>Drink Water</span>
                            <span> Stay Strong.</span>
                    </div> -->
                    <p>YOUR PATH TO DAILY HYDRATION + WELLNESS</p>
                </div>
            </div>

 
            <div class="form_wrapper edit_form_wrapper">
                    <div class="flex_row">
                        <div class="flex_col_sm_12">
                            <div class="form_field">
                                <div class="text-field">
                                   <input type="text" placeholder="YOUR WELLNESS SOLUTION" readonly>
                                </div>
                                {{-- <span class="text-note">1 MONTH OF HYDRATION (10KITS)</span> --}}
                                <span class="package_note_final_page"> {{config('constants.package_name')[$orderDetail->odr_package_id ?? '']  ?? ''}}</span>

                             </div>
                             <div class="form_field">
                                <div class="text-field">
                                    <input type="text" placeholder="DELIVERY FREQENCY" readonly>
                                </div>
                                {{-- <span class="text-note">EVERY SUNDAY FOR 1 MONTH </span> --}}
                                <span class="delivery_note_final_page">{{config('constants.delivery_freq')[$orderDetail->odr_delivery_frequency_id ?? '']  ?? ''}}</span>
                                <span class="text-note">(1st DELIVERY 4 KITS, THEN 2 KITS THEREAFTER). </span>
                             </div> 


                             <div class="form_field">
                                <div class="text-field">
                                   <input type="text" placeholder="DELIVERY ADDRESS" readonly>
                                 </div>
                                <span class="text-note">{{$orderDetail->shipping_address ?? '' }} {{$orderDetail->shipping_address2  ?? ''}}</span>
                                <span class="text-note">{{$orderDetail->s_city_state_zip  ?? ''}}</span>
                             </div>


                             {{-- <div class="form_field">
                                <div class="text-field">
                                   <input type="text" placeholder="PAYMENT SOURCE">
                                </div>
                                <span class="text-note">CARD ENDING IN 5777</span>
                             </div> --}}


                             <div class="form_field">
                                <div class="flex_row">
                                    <div class="flex_col_sm_6 text-left">
                                     <label class="form_label">TAX</label>
                                    </div>
                                    <div class="flex_col_sm_6 text-right">
                                        <p class="show_label">${{$orderDetail->odr_tax_amount ?? ''}}</p>
                                    </div>
                                 </div>
                                 <div class="flex_row">
                                    <div class="flex_col_sm_6 text-left">
                                     <label class="form_label">SERVICE FEE</label>
                                    </div>
                                    <div class="flex_col_sm_6 text-right">
                                        <p class="show_label">$5.00</p>
                                    </div>
                                 </div>
                                 <div class="flex_row">
                                    <div class="flex_col_sm_6 text-left">
                                     <label class="form_label">DELIVERY FEE</label>
                                    </div>
                                    <div class="flex_col_sm_6 text-right">
                                        <p class="show_label">$5.00</p>
                                    </div>
                                 </div>
                                 <div class="flex_row">
                                    <div class="flex_col_sm_6 text-left">
                                     <label class="form_label">TOTAL</label>
                                    </div>
                                    <div class="flex_col_sm_6 text-right">
                                        <p class="show_label">${{$orderDetail->odr_transaction_amount ?? ''}}</p>
                                    </div>
                                 </div>
                                 <p class="text-center">PURCHASE RECEIPT | TRANSACTION ID: {{$orderDetail->odr_transaction_id ?? ''}}</p>
                             </div>

                             <div class="form_field">
                                <p class="support_note sm_12">
                                    CONTRATUALATIONS ON SECURING YOUR PATH TO WELLNESS. FOR ANY SUPPORT RELATED INQUIRIES, PLEASE EMAIL  US AT CLARITY@DRINKWATR.COM. 
                                </p> 
                            </div>

                            <figure class="droplet_logowrap text-center">
                                <span>ALL PRODUCTS ARE DELIVERED BY</span>
                                <img src="{{asset('images/droplet.png')}}">
                            </figure>
                             

                        </div>
                    </div>


            </div>



        </div>
        <footer class="text-center">
            <div class="custom_container">
                ALL RIGHT RESERVED {{date('Y')}} &copy WATR, LLC. | PRIVACY + LEGAL
            </div>
        </footer>
    </main>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script> 
</body>
</html>
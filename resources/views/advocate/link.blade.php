<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny Raphael</title>

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}" />
    <input type="hidden" value="{{url('/')}}" class="base_url">
    
</head>
<body>  

    <main class="app_wrapper waterbg splash">
        <div class="custom_container">

           <div class="welcome_wrapper text-center">
            <div class="tagline_wrap">
                <div class="tagline">
                    <span>Drink Water</span>
                    <span> Stay Strong.</span>
                </div>
                <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
            </div>  
                <a type="button" class="splash_link">Enter</a>
           </div>

        </div>
    </main>

    <main class="app_wrapper waterbg welcome" style="display: none;">
        <div class="custom_container">

           <div class="welcome_wrapper text-center">
              
               <p class="welcome_note"> WELCOME TO  YOUR PATH TO DAILY  HYDRATION + WELLNESS</p> 

                <h1>STAY STRONG.</h1>

                <a type="button" class="welcome_link">Enter</a>
           </div>
        </div>
    </main>

    <main class="app_wrapper waterbg main_content" style="display: none;">
        <div class="custom_container">

            <form id="basic-form">
                @csrf
                <input type="hidden" class="current_tab" value="step1_form">

                <div class="step1_form">
                    <div class="head_section"> 
                        <div class="brand">
                            <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
                            <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
                        </div>
                        <div class="tagline_wrap">
                            <div class="tagline">
                                <span>Drink Water</span>
                                <span> Stay Strong.</span>
                            </div>
                            <p>Your Path to daily hydration & wellness</p>
                        </div>
                    </div>


                    <input type="hidden" value="{{Request::segment(2)}}" name="adv_detail_access_token" class="adv_detail_access_token">

                    <div class="form_wrapper">
                            <div class="flex_row">
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text"  name="first_name" id="first_name" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text"  name="last_name" id="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex_row">
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text"  name="mobile" id="mobile" number placeholder="Mobile #">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text"  name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex_row">
                                
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                            <select class="selectpicker" name="package" id="package1" required>
                                                <option value="">Select Package</option>
                                                <option value="1" >1 MONTH OF HYDRATION $250</option>
                                                <option value="2">2 MONTH OF HYDRATION $500</option>
                                                <option value="3">3 MONTH OF HYDRATION $750</option>
                                            </select>

                                        </div>
                                    </div> 
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                            <select class="selectpicker" name="delivery_frequency" id="delivery_frequency1" required>
                                                <option value="">Delivery frequency</option>
                                                <option value="1" >EVERY SUNDAY</option>
                                                <option value="2">EVERY MONDAY</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                            <div class="dots_wrapper">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                            </div>

                            <div class="dots_wrapper">
                                <button type="button" class="outline_btn m_r_20 main_content_back">Back</button>
                                <button type="submit" class="primary_btn btn_effect">Next</button>
                            </div>
                    </div>
                </div>


                <div class="step2_form" style="display: none;">
                    <main class="app_wrapper waterbg">
                        <div class="custom_container">
                    
                            <div class="head_section"> 
                                <div class="brand">
                                    <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
                                    <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
                                </div>
                                <div class="tagline_wrap">
                                    <p>Your Path to daily hydration & wellness</p>
                                </div>
                            </div>
                
                            <div class="form_wrapper">
                                <div class="flex_row">
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="billing_address" id="billing_address" placeholder="BILLING ADDRESS1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="shipping_address" id="shipping_address" placeholder="SHIPPING ADDRESS1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex_row">
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="billing_address2" id="billing_address2" placeholder="BILLING ADDRESS2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="shipping_address2" id="shipping_address2" placeholder="SHIPPING ADDRESS2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex_row">

                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="b_city_state_zip" id="b_city_state_zip" placeholder="CITY/STATE/ZIP">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text"  name="s_city_state_zip" id="s_city_state_zip" placeholder="CITY/STATE/ZIP">
                                            </div>
                                        </div>
                                        <input type="radio"  name="same_billing_address" class="hide same_billing_address" id="billing" />
                                        <label class="" for="billing">(SAME AS BILLING ADDRESS)</label>
                                    </div>
                                    
                                </div>
                            
                                <div class="flex_row m_t_50">
                                    
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <select class="selectpicker custom_select" name="package" id="package2" required>
                                                <option value="">Select Package</option>
                                                <option value="1" >1 MONTH OF HYDRATION $250</option>
                                                <option value="2">2 MONTH OF HYDRATION $500</option>
                                                <option value="3">3 MONTH OF HYDRATION $750</option>
                                            </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field custom_select">
                                                <select class="selectpicker" name="delivery_frequency" id="delivery_frequency2" required>
                                                    <option value="">Delivery frequency</option>
                                                    <option value="1" >EVERY SUNDAY</option>
                                                    <option value="2">EVERY MONDAY</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="dots_wrapper">
                                    <ul>
                                        <li></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div class="dots_wrapper">
                                    <button type="button" class="outline_btn m_r_20 show_step1_form">Back</button>
                                    <button type="submit" class="primary_btn show_step3_form">Next</button>
                                </div>
                            </div>
                            
                        </div>

                        <footer class="text-center">
                            <div class="custom_container">
                                ALL RIGHT RESERVED 2022 &copy WATR, LLC. | PRIVACY + LEGAL
                            </div>
                        </footer>

                    </main>
                </div>


                <div class="step3_form" style="display: none;">
                    <main class="app_wrapper waterbg">
                        <div class="custom_container">

                    
                            <div class="head_section"> 
                                <div class="brand">
                                    <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
                                    <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
                                </div>
                                <div class="tagline_wrap">
                                    <p>Your Path to daily hydration & wellness</p>
                                </div>
                            </div>

                
                            <div class="form_wrapper">
                                <div class="flex_row">
                                    <div class="flex_col_sm_4"></div>
                                    <div class="flex_col_sm_5">
                                        <div class="form_field">
                                            <div class="text-field custom_select">
                                                <select class="selectpicker payment_method" name="payment_method" id="payment_method">
                                                    <option>SELECT PAYMENT METHOD</option>
                                                    <option value="1" >CREDIT CARD</option>
                                                    <option value="2">DEBIT CARD</option>
                                                    <option value="3">VENMO </option>
                                                    <option value="4">APPLY PAY </option>
                                                </select>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                    <div class="flex_row">
                                        <div class="flex_col_sm_12">
                                            <div class="form_field">
                                                <div class="text-field">
                                                <input type="text" name="name_on_card" id="name_on_card" placeholder="NAME ON CARD">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex_row">
                                        <div class="flex_col_sm_12">
                                            <div class="form_field">
                                                <div class="text-field">
                                                <input type="text" name="card_number" id="card_number" placeholder="CARD NUMBER">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex_row">
                                        <div class="flex_col_sm_6">
                                            <div class="form_field">
                                                <div class="text-field">
                                                <input type="text" name="card_cvv" id="card_cvv" placeholder="CVV">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex_col_sm_6">
                                            <div class="form_field">
                                                <div class="text-field">
                                                <input type="text" name="card_expiry" id="card_expiry" placeholder="EXPIRATION">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex_row m_t_50">
                                        
                                        <div class="flex_col_sm_6">
                                            <div class="form_field">
                                                <div class="text-field">
                                                    <select class="selectpicker custom_select" name="package" id="package3" required>
                                                        <option value="">Select Package</option>
                                                        <option value="1" >1 MONTH OF HYDRATION $250</option>
                                                        <option value="2">2 MONTH OF HYDRATION $500</option>
                                                        <option value="3">3 MONTH OF HYDRATION $750</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="flex_col_sm_6">
                                            <div class="form_field">
                                                <div class="text-field custom_select">
                                                    <select class="selectpicker" name="delivery_frequency" id="delivery_frequency3" required>
                                                        <option value="">Delivery frequency</option>
                                                        <option value="1" >EVERY SUNDAY</option>
                                                        <option value="2">EVERY MONDAY</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="dots_wrapper">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                    </div>

                                    <div class="dots_wrapper">
                                        <button class="outline_btn m_r_20 show_step2_form">Back</button>
                                        <button type="submit" class="primary_btn show_step4_form">Next</button>
                                </div>
                            </div>



                        </div>
                    </main>
                </div>


                <div class="step4_form" style="display: none;">
                
                    <main class="app_wrapper waterbg">

                        <div class="custom_container">
                            <div class="head_section">

                                <div class="brand">
                                    <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
                                    <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
                                </div>

                                <div class="tagline_wrap">
                                    <p>Your Path to daily hydration & wellness</p>
                                </div>
                            </div>
                            
                            <div class="form_wrapper">
                                <div class="flex_row">
                                    <div class="flex_col_sm_4"></div>
                                    <div class="flex_col_sm_5">
                                    <div class="form_field">
                                        <div class="text-field custom_select">
                                            <select class="selectpicker payment_method" name="payment_method" id="payment_method">
                                                <option>SELECT PAYMENT METHOD</option>
                                                <option value="1" >CREDIT CARD</option>
                                                <option value="2">DEBIT CARD</option>
                                                <option value="3">VENMO </option>
                                                <option value="4">APPLY PAY </option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="flex_row m_t_50">
                                    <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                            <select class="selectpicker custom_select" name="package" id="package4" required>
                                                <option value="">Select Package</option>
                                                <option value="1" >1 MONTH OF HYDRATION $250</option>
                                                <option value="2">2 MONTH OF HYDRATION $500</option>
                                                <option value="3">3 MONTH OF HYDRATION $750</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field custom_select">
                                            <select class="selectpicker" name="delivery_frequency" id="delivery_frequency4" required>
                                                <option value="">Delivery frequency</option>
                                                <option value="1" >EVERY SUNDAY</option>
                                                <option value="2">EVERY MONDAY</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="dots_wrapper">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li class="active"></li>
                                    </ul>
                                </div>
                                <div class="dots_wrapper">
                                    <button class="outline_btn m_r_20 show_step3_form">Back</button>
                                    <button type="submit" class="primary_btn show_final_form">Next</button>
                                </div>
                            </div>
                        </div>

                        <footer class="text-center">
                            <div class="custom_container">
                                ALL RIGHT RESERVED 2022 &copy WATR, LLC. | PRIVACY + LEGAL
                            </div>
                        </footer>
                    </main>
                </div>

            </form>

            <div class="final_form" style="display: none;">

                <main class="app_wrapper waterbg">
                    <div class="custom_container">
                
                        <div class="head_section"> 
                            <div class="brand">
                                <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
                                <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
                            </div>
    
                            <div class="tagline_wrap">
                                <div class="tagline">
                                        <span>Drink Water</span>
                                        <span> Stay Strong.</span>
                                </div>
                                <p>Your Path to daily hydration & wellness</p>
                            </div>
                        </div>
    
            
                        <div class="form_wrapper">
                                <div class="flex_row">
                                    <div class="flex_col_sm_4">
    
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" placeholder="YOUR SOLUTION">
                                            </div>
                                            <span> 1 Month of HYDRATION (10 KITS)</span>
                                        </div>
                                    </div>
                                </div>
    
                            
    
                                <div class="flex_row">
                                    <div class="flex_col_sm_4"> </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" placeholder="DELVERY FREQENCY">
                                            </div>
                                            <span>EVERY SUNDAY</span>
                                        </div>
                                    </div>
                                </div>  
    
                                <div class="flex_row">
                                    <div class="flex_col_sm_2"></div>
                                    <div class="flex_col_sm_8">
                                        <p class="text-center">YOU WILL RECEIVE A RECEIPT VIA TEXT & EMAIL</p>
                                    </div>
                                </div>
    
    
                                <div class="flex_row">
    
                                    <div class="flex_col_sm_6">
                                        <div class="flex_row">
                                            <div class="flex_col_sm_6">
                                                <span class="form_label"> TAX</span>
                                            </div>
                                            <div class="flex_col_sm_6">
                                                <label class="show_label"> 1.00</label>
                                            </div>
                                        </div>
    
                                        <div class="flex_row">
                                            <div class="flex_col_sm_6">
                                                <span class="form_label"> DELIVERY</span>
                                            </div>
                                            <div class="flex_col_sm_6">
                                                <label class="show_label"> 5.00</label>
                                            </div>
                                        </div>
    
                                        <div class="flex_row">
                                            <div class="flex_col_sm_6">
                                                <span class="form_label"> TOTAL</span>
                                            </div>
                                            <div class="flex_col_sm_6">
                                                <label class="show_label"> $256.00</label>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                            
                            
    
                            
                        </div>
    
                    </div>
                </main>

            </div>
        </div>
    </main>
    
</body>
</html>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/constants.js')}}"></script>
<script src="{{asset('js/jquery_validation.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/link.js')}}"></script>

<style>

label.error {  
    color: red;  
    font-size: 1rem;  
    display: block;  
    margin-top: 5px;  
}  

input.error {  
    /* border: 1px dashed red;   */
    font-weight: 300;  
    /* color: red;   */
}  

</style>
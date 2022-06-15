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
                                        <input type="text" value="86876855858" name="first_name" id="first_name" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text" value="86876855858" name="last_name" id="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex_row">
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text" value="86876855858" name="mobile" id="mobile" number placeholder="Mobile #">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                        <input type="text" value="gaurav@gmail.cpm" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex_row">
                                
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                            <select class="selectpicker" name="package" id="package" required>
                                                <option value="">Select Package</option>
                                                <option value="1" selected>1 MONTH OF HYDRATION $250</option>
                                                <option value="2">2 MONTH OF HYDRATION $500</option>
                                                <option value="3">3 MONTH OF HYDRATION $750</option>
                                            </select>

                                        </div>
                                    </div> 
                                </div>
                                <div class="flex_col_sm_6">
                                    <div class="form_field">
                                        <div class="text-field">
                                            <select class="selectpicker" name="delivery_frequency" id="delivery_frequency" required>
                                                <option value="">Delivery frequency</option>
                                                <option value="1" selected>EVERY SUNDAY</option>
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
                                            <input type="text" name="billing_address" id="billing_address" placeholder="BILLING ADDRESS1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" name="shipping_address" id="shipping_address" placeholder="SHIPPING ADDRESS1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex_row">
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" name="billing_address2" id="billing_address2" placeholder="BILLING ADDRESS2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" name="shipping_address2" id="shipping_address2" placeholder="SHIPPING ADDRESS2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex_row">

                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" name="city" id="city" placeholder="CITY">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <input type="text" name="state_zip" id="state_zip" placeholder="STATE/ZIP">
                                            </div>
                                        </div>
                                        <input type="radio" class="hide" id="billing" />
                                        <label class="" for="billing">(SAME AS BILLING ADDRESS)</label>
                                    </div>
                                    
                                </div>
                            
                                <div class="flex_row m_t_50">
                                    
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field">
                                            <select class="selectpicker custom_select" name="package" id="package" required>
                                                <option value="">Select Package</option>
                                                <option value="1" selected>1 MONTH OF HYDRATION $250</option>
                                                <option value="2">2 MONTH OF HYDRATION $500</option>
                                                <option value="3">3 MONTH OF HYDRATION $750</option>
                                            </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="flex_col_sm_6">
                                        <div class="form_field">
                                            <div class="text-field custom_select">
                                                <select class="selectpicker" name="delivery_frequency" id="delivery_frequency" required>
                                                <option value="">Delivery frequency</option>
                                                <option value="1" selected>EVERY SUNDAY</option>
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
                                    <button type="submit" class="primary_btn">Next</button>
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
        </div>
    </main>
    
</body>
</html>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery_validation.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script>  
    $(document).ready (function () {  

        setTimeout(function(){
            $('.splash').hide();
            $('.welcome').show();
        },2000);

        setTimeout(function(){
            $('.splash').hide();
            $('.welcome').hide();
            $('.main_content').show();
        },4000);

        $('.splash_link').click(function(){
            $('.splash').hide();
            $('.welcome').show();
            $('.main_content').hide();
        });

        $('.welcome_link').click(function(){
            $('.splash').hide();
            $('.welcome').hide();
            $('.main_content').show();
        });

        $('.main_content_back').click(function(){
            $('.splash').hide();
            $('.welcome').show();
            $('.main_content').hide();

            setTimeout(function(){
                $('.splash').hide();
                $('.welcome').hide();
                $('.main_content').show();
            },2000);
        });

        $(document).on('click', '.show_step1_form', function(event) {
            console.log('show_step1_form');
            $('.step2_form').hide(true);
            $('.step1_form').show(true);
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
                    minlength: 8,
                    maxlength: 15,
                    number: true,  
                },
                email: {  
                    required: true,  
                    email: true,
                    maxlength: 30,
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

                city: {
                    required: true,  
                },

                state_zip: {
                    required: true,  
                },
            },  

            messages: {  
                first_name: {  
                    minlength: 'First name must be at least 8 characters long',  
                    maxlength: 'First name must be at least 15 characters long',  
                },
                last_name: {  
                    minlength: 'Last name must be at least 8 characters long',  
                    maxlength: 'Last name must be at least 15 characters long',  
                },
                email: {
                    required: 'Email is required',  
                    email: 'Enter a valid email',  
                },
                mobile: {  
                    minlength: 'Mobile must be at least 8 characters long',  
                    maxlength: 'Mobile must be at least 15 characters long',  
                },
                
                package: {
                    required: 'Package is required',  
                },

                delivery_frequency: {
                    required: 'Delivery frequency is required',  
                },
            }, 
            
            submitHandler: function(form) {  
                $('.step1_form').hide();
                $('.step2_form').show();
                // form.submit();  
            }  
        });  
    }); 

    
</script>  


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
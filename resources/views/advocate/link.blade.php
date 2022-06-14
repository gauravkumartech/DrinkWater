<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny Raphael</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <input type="hidden" value="{{url('/')}}" class="base_url">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery_validation.js')}}"></script>
</head>
<body>  

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

            <form id = "basic-form" action="" method="post">
                @csrf

                <input type="hidden" value="{{Request::segment(2)}}" name="adv_detail_access_token" class="adv_detail_access_token">

                <div class="form_wrapper">
                        <div class="flex_row">
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex_row">
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                    <input type="text" name="mobile" id="mobile" number placeholder="Mobile #">
                                    </div>
                                </div>
                            </div>
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                    <input type="text" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex_row">
                            
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                        <select name="package" id="package" required>
                                            <option value="">Select Package</option>
                                            <option value="1">1 MONTH OF HYDRATION $250</option>
                                            <option value="2">2 MONTH OF HYDRATION $500</option>
                                            <option value="3">3 MONTH OF HYDRATION $750</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="flex_col_sm_6">
                                <div class="form_field">
                                    <div class="text-field">
                                        <select name="delivery_frequency" id="delivery_frequency" required>
                                            <option value="">Delivery frequency</option>
                                            <option value="1">EVERY SUNDAY</option>
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
                            <button class="outline_btn m_r_20" onclick="history.back()">Back</button>
                            <button type="submit" class="primary_btn btn_effect">Next</button>
                        </div>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>

<script>  
    $(document).ready (function () {  
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
                form.submit();  
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
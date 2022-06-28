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
              <span class="brand_txt">+ {{$advocateData->adv_first_name}} {{$advocateData->adv_last_name}}</span>
            </div>
  
            <div class="tagline_wrap">
              <div class="tagline">
                <span>Drink Water</span>
                <span> Stay Strong.</span>
              </div>
              <p>Your Path to daily hydration + wellness</p>
            </div>
          </div>
  
  
          <div class="form_field">
            <div class="flex_row">
              <div class="flex_col_sm_4"></div>
              <div class="flex_col_sm_6">
                <div class="form_field">
                  <div class="text-field">
                    <input type="text" placeholder="YOUR WELNESS SOLUTION" disabled>
                  </div>
                  <span class="package_note_final_page"> {{config('constants.package_name')[$orderDetail->odr_package_id]}}</span>
                </div>
              </div>
            </div>
  
            <div class="flex_row">
              <div class="flex_col_sm_4"> </div>
              <div class="flex_col_sm_6">
                <div class="form_field">
                  <div class="text-field">
                    <input type="text" placeholder="DELVERY FREQENCY" disabled>
                  </div>
                  <span class="delivery_note_final_page">{{config('constants.delivery_freq')[$orderDetail->odr_delivery_frequency_id]}}</span>
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
  
              <div class="flex_col_sm_8" style="margin-left: auto">
                <div class="flex_row">
                  <div class="flex_col_sm_6">
                    <span class="form_label"> <b>TAX</b></span>
                  </div>
                  <div class="flex_col_sm_6">
                    <label class="show_label tax_amount">${{$orderDetail->odr_tax_amount}}</label>
                  </div>
                </div>
  
                <div class="flex_row">
                  <div class="flex_col_sm_6">
                    <label class="form_label"><b>SERVICE FEE</b></label>
                  </div>
                  <div class="flex_col_sm_6">
                    <p class="show_label service_fees">$5.00</p>
                  </div>
                </div>
  
                <div class="flex_row">
                  <div class="flex_col_sm_6">
                    <span class="form_label"><b>DELIVERY</b></span>
                  </div>
                  <div class="flex_col_sm_6">
                    <label class="show_label service_fees"> $5.00</label>
                  </div>
                </div>
  
                <div class="flex_row">
                  <div class="flex_col_sm_6">
                    <span class="form_label"><b>TOTAL</b></span>
                  </div>
                  <div class="flex_col_sm_6">
                    <label class="show_label total_amount"> ${{$orderDetail->odr_transaction_amount}}</label>
                  </div>
                </div>
  
              </div>
            </div>
  
          </div>
  
        </div>
      </main>
</body>
</html>
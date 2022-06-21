<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny Raphael</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <input type="hidden" value="{{url('/')}}" class="base_url">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/constants.js')}}"></script>
</head>

<body>  

    <main class="app_wrapper waterbg">
        <div class="custom_container">

           <div class="welcome_wrapper text-center">
              
               <p class="welcome_note" data-aos="fade-up"
               data-aos-duration="3000"> WELCOME TO  YOUR PATH TO DAILY  HYDRATION + WELLNESS</p> 

                <h1 data-aos="fade-up"
               data-aos-duration="3000">STAY STRONG.</h1>

                <a href="{{URL('wateradvocate/2fFWTYWHodZF6UDt8FaSK5YMVrqhKpJ9J6kmcyRx5Cay78BViJ')}}" class="link" data-aos="fade-up"
                data-aos-duration="3000">Enter</a>
           </div>
        </div>
    </main>
    
</body>
</html>



<script>
    $(document).ready(function(){
        setTimeout(function(){
            window.location.replace(string.base_url + '/wateradvocate/' + '2fFWTYWHodZF6UDt8FaSK5YMVrqhKpJ9J6kmcyRx5Cay78BViJ');
        },2000);
    });
</script>
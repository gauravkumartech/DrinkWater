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
    <script src="{{asset('js/constants.js')}}"></script>
</head>
<body>  

    <main class="app_wrapper waterbg">
        <div class="custom_container">

           <div class="welcome_wrapper text-center">
            <div class="tagline_wrap">
                <div class="tagline">
                    <span>Drink Water</span>
                    <span> Stay Strong.</span>
                </div>
                <figure class="logo"><img src="{{asset('images/logowater.png')}}"  alt="Logo"/></figure>
            </div>  
                <a href="{{route('welcome')}}" class="link">Enter</a>
           </div>

        </div>
    </main>
    
</body>
</html>

<script>
    $(document).ready(function(){
        setTimeout(function(){
            window.location.replace(string.base_url + '/welcome');
        },2000);
    });
</script>
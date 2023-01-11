<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthy Dude Website</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .navbar-custom {
      background-image: linear-gradient(115deg, #EAF9F5, #c0ecff);
    }

    .color{
          background-image: linear-gradient(#c0ecff, #9CF479, #c0ecff);
    }
</style>
<body class="color">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{asset('image/healthy-dude-logo2.png')}}" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid">
        @yield('content')
        <div class="row">
        <div class="col-sm-1">&nbsp;</div>
        <div class="col-sm-10"><hr class="featurette-devider"></div>
        <div class="col-sm-1">&nbsp;</div>
      <div align="center" style="font-size: 55px;"><strong>Our Partner Brands</strong></div>
      <div class="col-md-1">&nbsp;</div>
      <div class="col-md-10" align="center">
        <a href="https://www.warnke.de/"><img src="{{asset('image/warnke.jpg')}}" alt="..." width="120"></a>
        <a href="https://swisse.com.au/"><img src="{{asset('image/swisse.jpg')}}" alt="..." width="120"></a>
        <a href="https://healthycare.com.au/"><img src="{{asset('image/healthycare.jpg')}}" alt="..." width="120"></a>
      </div><br><br>
    </div>
    <div class="row" style="background-color: #c0ecff;">
          <div class="col-md-4" style="margin-top: 20px;">
            <Strong style="font-size: 40px; color:SeaGreen;">Healthy Dude</Strong><br><br>
            copyright&copy;<strong>Healthy Dude2022</strong>.All Rights Reserved. <br><br><br><br><br>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
            <strong style="font-size: 20px">Footer</strong><br>
            <a style="text-decoration: none" href="phone.html">Contact Us</a><br>
            <a style="text-decoration: none" href="computer.html">About Us</a>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
          <strong style="font-size: 20px">Follow Us</strong><br>
            <a style="margin:20px" href="https://www.facebook.com"><img src="{{asset('image/facebook.png')}}" width="50" alt=""></a>
            <a style="margin:20px" href="https://www.instagram.com"><img src="{{asset('image/instagram.png')}}" width="50" alt=""></a>
            <a style="margin:20px" href="https://wa.link/27fznx"><img src="{{asset('image/whatsapp.png')}}" width="50" alt=""></a>
          </div>
    </div>
    </div>
</body>
</html>

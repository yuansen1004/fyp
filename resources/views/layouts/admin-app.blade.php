<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthy Dude</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <style>
        .navbar-custom {
          background-color: #c0ecff;
        }

        .color{
          background-image: linear-gradient(#c0ecff, #9CF479, #c0ecff);
        }

        .form-control{
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 15px;
          padding-right: 15px;
          border-radius: 18px;
        }

        .btn{
          background-image: linear-gradient(115deg, #56d8e4, #a097ed);
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 10px;
          padding-right: 10px;
          border-radius: 50px;
          cursor: pointer;
          transition: box-shadow 0.15s;
        }

        .btn:hover{
          box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
        }

    </style>
  <body class="color">
    @if(Session::has('successs'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
    @endif
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{asset('image/icon.jpg')}}" style="width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"><strong>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: Lime;">
            <li><hr class="dropdown-devider" href="#">Brand</li>
            <li><a class="dropdown-item" href="#">KGC 正官庄</a></li>
            <li><a class="dropdown-item" href="#">Swisse</a></li>
            <li><a class="dropdown-item" href="#">Healthy Care</a></li>
            <li><hr class="dropdown-divider">Items</li>
            <li><a class="dropdown-item" href="#">Calcium Supplement</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bmi">BMI Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">modify meal calories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutUs">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactUs">Contact Us</a>
        </li>
      <form class="d-flex">
        @csrf
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword">&nbsp;&nbsp;
        <button id="btn" class="btn btn" type="submit" style="color:black"><strong>Search</strong></button>
      </form>

      </ul></strong>

    </div> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">
        @if(Auth::guard('admin')->check())
        <li><a href="{{route('admin.logout')}}">Logout</a></li>
            @endif
      </ul>
    </div>
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
        <a href="https://www.kgcchina.com/"><img src="{{asset('image/korean red ginseng.jpg')}}" alt="..." width="120"></a>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>

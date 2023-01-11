<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:wght@@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <title>Healthy Dude Website</title>
  </head>
  <style>
        .navhome{
          display: flex;
          position: relative;
        }

        .slide-bar{
          position: fixed;
          width: 350px;
          height:100%;
          background-image: linear-gradient(115deg, #EAF9F5, #c0ecff);
          padding: 30px 0;
          margin-left: -10px
        }

        .slide-bar ul li{
          padding:15px;
          border-bottom: 1px solid rgba(0,0,0,0.05);
          border-top: 1px solid rgba(225,225,225,0.05);
        }

        .slide-bar ul li a{
          display: block;
          color: black;
          font-size: 17px;
          font-family: cursive;
        }

        .slide-bar ul li a i{
          width: 25px;
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
  
  <div class="container-fluid">
    
    <div class="navhome">
      <div class="slide-bar">
      <ul class="navbar-nav">
      <a class="navbar-brand" href="#"><img src="{{asset('image/healthy-dude-logo2.png')}}" style="width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-house"></i>Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-shop"></i>Shop</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: Lime;">
            <li><hr class="dropdown-devider" href="#">Brand</li>
            <li><a class="dropdown-item" href="warnke">Warnke</a></li>
            <li><a class="dropdown-item" href="Swisse">Swisse</a></li>
            <li><a class="dropdown-item" href="healthycare">Healthy Care</a></li>
            <li><hr class="dropdown-divider">Items</li>
            <li><a class="dropdown-item" href="honey">Organic Honey</a></li>
            <li><a class="dropdown-item" href="oatmeal">Oat Meal</a></li>
            <li><a class="dropdown-item" href="vitaminc">Vitamin C</a></li>
            <li><a class="dropdown-item" href="calcium">Calcium Supplement</a></li>
            <li><a class="dropdown-item" href="fishoil">Fish Oil</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/addProduct"><i class="fa-solid fa-plus"></i>add product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/productList"><i class="fa-sharp fa-solid fa-eye"></i>view product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/addCategory"><i class="fa-solid fa-plus"></i>add category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewCategory"><i class="fa-solid fa-eye"></i>view category</a>
        </li>
        @if(Auth::guard('admin')->check())
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.logout')}}">Logout</a>
        </li>
        @else
        <a href="{{route('admin.logout')}}">Logout</a>
        @endif

      </ul>

        </div>
    </div>
  </div>
  </nav>

<div class="footer">
    @yield('content')
    <div class="row">
    <div class="col-sm-3">&nbsp;</div>
    <div class="col-sm-8"><hr class="featurette-devider"></div>
    <div class="col-sm-3">&nbsp;</div>
      <div class="col-md-8" align="center" style="font-size: 55px;"><strong>Our Partner Brands</strong></div>
      <div class="col-md-3">&nbsp;</div>
      <div class="col-md-8" align="center">
        <a href="https://www.warnke.de/"><img src="{{asset('image/warnke.jpg')}}" alt="..." width="120"></a>
        <a href="https://swisse.com.au/"><img src="{{asset('image/swisse.jpg')}}" alt="..." width="120"></a>
        <a href="https://healthycare.com.au/"><img src="{{asset('image/healthycare.jpg')}}" alt="..." width="120"></a>
      </div><br><br>
    </div>
    <div class="row" style="background-image: linear-gradient(115deg, #EAF9F5, #c0ecff);">
    <div class="col-md-3">&nbsp;</div>
          <div class="col-md-3" style="margin-top: 20px;">
            <Strong style="font-size: 40px; color:SeaGreen;">Healthy Dude</Strong><br><br>
            copyright&copy;<strong>Healthy Dude2022</strong>.All Rights Reserved. <br><br><br><br><br>
          </div>
          <div class="col-md-3"  style="margin-top: 20px;">
            <strong style="font-size: 20px">Footer</strong><br>
            <a style="text-decoration: none" href="contactUs">Contact Us</a><br>
            <a style="text-decoration: none" href="aboutUs">About Us</a>
          </div>
          <div class="col-md-3"  style="margin-top: 20px;">
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
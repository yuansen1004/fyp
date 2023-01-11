
@extends('layout')
@section('content')
<style>
  .carousel-inner {
    height: 600px;
  }

  .item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 600px;
  }

  .product {
    font-size: 70px;
  }
</style>
<div class="row">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/slider1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wallpapertag.com/wallpaper/full/b/6/8/679446-gorgerous-1920-x-1080-hd-wallpaper-1920x1080.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.wallpapersafari.com/11/11/xbP8kM.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br>


<div class="product" align="center">Product</div><hr>
@foreach($products as $product)
<div class="col-sm-4">
  <div class="product-item">
    <img src="{{asset('images')}}/{{$product->image}}" alt="" width="300">
    <div class="content">
      <h6 class="text-left">{{$product->name}}</h6>
      <h4 class="card-title text-danger">RM{{$product->price}}</h4>
    </div>
  </div>
</div>
@endforeach

<div class="d-flex justify-content-center">
  {!! $products->links() !!}
</div>

@endsection
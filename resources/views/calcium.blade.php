@extends('layout')
@section('content')
<style>
.card-image {
  width: 400px;
  height: 500px
}
#search-input{
        border: 1.5px solid black;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-left: 11px;
        padding-right: 11px;
        border-radius: 18px;
    }

    #search{
        background-image: linear-gradient(115deg, #EAF9F5, #c0ecff);
        border: 1px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 18px;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        margin-left: 8px;
        transition: box-shadow 0.15s;
        vertical-align: top;
    }
</style>
<div class="container-fluid">
        <div class="col-sm-12">
            <h2 style="text-align:center;">Calcium Supplements</h2>
                <div style="text-align:center;">
                <form method="post" action="{{route('searchProduct')}}" style="text-align:center;">
                @csrf
                    <input type="search" id="search-input" placeholder="Search product name here..." aria-label="Search" 
                    name="keyword">
                    <button id="search">Search</button><br><br>
                </form>
                    <a href="products" class="btn btn-danger btn-xs">All</a>
                    <a href="{{route ('warnke')}}" class="btn btn-danger btn-xs">warnke</a>
                    <a href="{{route ('Swisse')}}" class="btn btn-danger btn-xs">Swisse</a>
                    <a href="{{route ('healthycare')}}" class="btn btn-danger btn-xs">Healthy Care</a>
                    <a href="{{route ('honey')}}" class="btn btn-danger btn-xs">Organic Honey</a>
                    <a href="{{route ('oatmeal')}}" class="btn btn-danger btn-xs">Oat Meal</a>
                    <a href="{{route ('vitaminc')}}" class="btn btn-danger btn-xs">Vitamin C</a>
                    <a href="{{route ('calcium')}}" class="btn btn-danger btn-xs">Calcium</a>
                    <a href="{{route ('fishoil')}}" class="btn btn-danger btn-xs">Fish Oil</a>
                </div>
                <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3"><br>
                    <div class="card-deck">
                    <form action="{{route('addCart')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="card border-secondary">
                            <a href="{{route('productDetail', ['id'=>$product->id])}}">
                            <img src="{{asset('images')}}/{{$product->image}}" class="card-image"></a>
                            <div class="card-body">
                                <h6 class="text-center">{{$product->name}}</h6>
                                <h4 class="card-title text-danger">RM{{$product->price}}</h4>
                                <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"><br> Available:{{$product->quantity}}</div>
                                <button class="btn btn-danger btn-xs">Add to Cart</button>
                            </div>  
                        </div>
                        </form> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    

@endsection
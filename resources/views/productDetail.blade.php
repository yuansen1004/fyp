@extends('layout')
@section('content')
    <div class = "row">
        @foreach($products as $product)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class = "card-body">
                <form action="{{route('addCart')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <div class="row">
                    <div class="col-md-3">
                    <h5 class = "card-title">{{$product->name}}</h5>
                    <img src="{{asset('images')}}/{{$product->image}}" alt="" class="img-fluid">
                </div>
                    <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$product->description}} <br><br></p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"><br> Available:{{$product->quantity}}</div>
                    <div class="card-heading">RM{{$product->price}}</div><br>
                    <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @endforeach
</div>

@endsection

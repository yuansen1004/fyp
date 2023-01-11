@extends('admin.layout')
@section('content')
<div class="row">
<div class="col-sm-3"></div>
            <div class="col-md-8">
        <h3>Edit Product</h3>
        <form action="{{route('updateProduct')}}" method="post"><br><br>@csrf
            <h3>Product name</h3>
            @foreach($products as $product)
            ID: <input name="proID" type="text" class="form-control" value="{{$product->id}}" readonly><br>
            Product Name: <input name="productName" type="text" class="form-control" value="{{$product->name}}"><br>
            Description: <input name="description" type="text" class="form-control" value="{{$product->description}}"><br>
            Quantity: <input name="quantity" type="text" class="form-control" value="{{$product->quantity}}">
            Price: <input name="price" type="text" class="form-control" value="{{$product->price}}">
            Image: <input name="images" type="file" class="form-control"><br>
            @endforeach
            <button type="submit" class="btn btn-info">Update Product</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection
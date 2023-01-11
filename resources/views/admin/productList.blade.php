@extends('admin.layout')
@section('content')
<style>
.table{
        font-family: cursive;
    }
    </style>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0">
                            Product List
                            <a href="admin/addProduct" class="badge bg-primary p-2 text-white float-right" style="text-decoration:none;">Add Product</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
        <div class="col-sm-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Quantity</td>
                                    <td>Image</td>
                                    <td>Price</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td><img src="{{asset('images')}}/{{$product->image}}" alt="" width="100"></td>
                                    <td>{{ $product->price }}</td>
                                    <td><a href="{{route ('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;<a href="{{route ('admin.editProduct',['id'=>$product->id])}}" class="btn btn-danger btn-xs">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection
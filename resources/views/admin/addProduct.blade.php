@extends ('admin.layout')
@section('content')

<div class="productContainer mt-5">
    <div class="row">
        <div class="col-sm-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0">
                            Add Product
                            <a href="{{route('admin.productList')}}" class="badge bg-primary p-2 text-white float-right" style="text-decoration:none;">Product List</a>
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
                <form action="{{route('admin.addProduct')}}" method="post" enctype="multipart/form-data"><br><br>@csrf 
                    Name: <input name="productName" type="text" class="form-control"><br>
                    Price:<input name="price" type="number" class="form-control"><br>
                    Description: <input name="description" type="text" class="form-control"><br> 
                    Quantity: <input name="quantity" type="number" class="form-control"><br> 
                    Image: <input name="images" type="file" class="form-control"><br>
                    Category: <select name="categoryID" id="">
                        <option value="">Select Category</option>
                        <option value="1">Warnke</option>
                        <option value="2">Swisse</option>
                        <option value="3">Healthy Care</option>
                        <option value="4">Organic Honey</option>
                        <option value="5">Oat Meal</option>
                        <option value="6">Vitamin C</option>
                        <option value="7">Calcium</option>
                        <option value="8">Fish Oil</option>
                    </select>
                    <button type="submit" class="btn btn-info">Add Product</button><br><br>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="col-sm-2">&nbsp;</div>


@endsection
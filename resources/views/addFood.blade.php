@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addFood')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
            <h3>Add New Food</h3>
            Name: <input name="foodName" type="text" class="form-control"><br>
            Calory: <input name="foodCalory" type="number" class="form-control"><br>
            Image: <input name="image" type="file" class="form-control"><br>
            Category: 
            <select name="categoryID" id="" class="form-control">
             <option value="">Select Category</option>
             <option value="1">All</option>
             <option value="2">Meat</option>
             <option value="3">Vegetable</option>
             <option value="4">Beverage</option>
             <option value="5">Fruit</option>
            </select><br>
            <button type="submit" class="btn btn-info" style="text-decoration: none">Add Food</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>

<style>
    #button[type=submit]{
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

    #button[type=submit]:hover{
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
    }
</style>
@endsection
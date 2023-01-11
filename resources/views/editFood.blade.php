@extends('layout')
@section('content')
<div class = "row">
    <div class = "col-sm-2">&nbsp;</div>
    <div class = "col-sm-8">
        <h3>Edit Food</h3>
        <form action="{{route('updateFood')}}" method = "post"><br><br>@csrf

        @foreach($food as $food)
        ID: <input name = "foodID" type="text" class = "form-control" value="{{$food->id}}" readonly><br>
        Name: <input name = "foodName" type="text" class = "form-control" value="{{$food->name}}"><br>
        Calory: <input name = "foodCalory" type="text" class = "form-control" value="{{$food->calory}}"><br>
        Image: <input name="image" type="file" class="form-control" value="{{$food->image}}"><br>
        Category:
        <select name="categoryID" id="" class="form-control" value="{{$food->categoryID}}">
             <option value="">Select Category</option>
             <option value="1">All</option>
             <option value="2">Meat</option>
             <option value="3">Vegetable</option>
             <option value="4">Beverage</option>
             <option value="5">Fruit</option>
            </select><br>
        @endforeach
        <button type = "submit" class = "btn btn-info">Update</button><br><br>
        </form>
    </div>
    <div class = "col-sm-2">&nbsp;</div>
</div>
@endsection
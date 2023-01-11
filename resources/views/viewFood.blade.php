
@extends('layout')
@section('content')


<div class = "row">
    <div class = "col-sm-2">&nbsp;</div>
    <div class = "col-sm-8">

        <table class = "table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Food Name</td>
                    <td>Calory</td>
                    <td>Image</td>
                    <td>Category</td>
                </tr>
            </thead>

            <tbody>
                @foreach($food as $food)
                <tr>
                    <td>{{$food->id}}</td>
                    <td>{{$food->name}}</td>
                    <td>{{$food->calory}}</td>
                    <td>{{$food->image}}</td>
                    <td>{{$food->categoryID}}</td>
                    <td>
                        <a href="{{route('deleteFood',['id'=>$food->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>

                        <a href="{{route('editFood',['id'=>$food->id])}}" class="btn btn-info btn-xs">Edit</a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class = "col-sm-2">&nbsp;</div>
</div>
@endsection
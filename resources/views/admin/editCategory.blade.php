@extends('admin.layout')
@section('content')
<div class="row">
<div class="col-sm-3"></div>
            <div class="col-md-8">
        <h3>Edit Category</h3>
        <form action="{{route('updateCategory')}}" method="post"><br><br>@csrf
            <h3>Category name</h3>
            @foreach($categories as $category)
            <input name="catID" type="text" class="form-control" value="{{$category->id}}"><br><input name="catName" type="text" class="form-control" value="{{$category->name}}">
            @endforeach
            <button type="submit" class="btn btn-info">Update Category</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection
@extends('layout')
@section('content')

    <div class = "row">
    <h2 style="text-align:center;">Meat</h2>

        <form method="post" action="{{route('searchFood')}}" style="text-align:center;">
        @csrf
            <input type="search" id="search-input" placeholder="Search food name here..." aria-label="Search" 
            name="keyword">
            <button id="search">Search</button><br><br>
        </form>

        <div id="buttons" style="text-align:center;">
            <a class="button-value" style="text-decoration: none" href="/showFood">All</a>
            <a class="button-value" style="text-decoration: none" href="/showMeat">Meat</a>
            <a class="button-value" style="text-decoration: none" href="/showVegetable">Vegetable</a>
            <a class="button-value" style="text-decoration: none" href="/showBeverage">Beverage</a>
            <a class="button-value" style="text-decoration: none" href="/showFruit">Fruit</a>
            <a class="button-value" style="text-decoration: none" href="/modifyMealCalories"><i class="fa-solid fa-calculator"></i></a>
        </div>

        @foreach($food as $food)
        <div class = "col-sm-3">
&nbsp;
        <form method="post" action="{{route('addMeat')}}">
        <form action="Meat" method="POST">
        <input type="hidden" name="id" value="{{$food->id}}">
        @csrf
            <div class="card" style="width: 16rem;">
                <span class="border border-secondary">
                    <img class="img-thumbnail" src="{{asset('image')}}/{{$food->image}}">
                        <div class="card-body">
                            <p class = "card-title" style="font-size: 18px">Name: <input id="oo" name="name" value="{{$food->name}}" readonly></p>
                            <h6 class = "card-text">Calories: <input id="oo" name="calory" value="{{$food->calory}}" readonly></h6>
                                <div class="card-heading">Quantity 
                                    <input type="number" name="quantity" value="1" min="1" style="width: 5rem;">
                                </div>
                                <br>
                            <button class="btn btn-primary" id="add-btn">Add To List</button>
                        </div>
                </span>
            </div>
            </div>
        </form>
        @endforeach
    </div>
    <br>
</form>


<style>

    #buttons a{
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

    #buttons a:hover{
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
    }

    #oo{
        border: 0px solid;
        width: 125px;
    }

    #oo:hover{
        border: none;
    }

    #add-btn:hover{
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
    }

    .img-thumbnail{
        width: 250px;
        height:250px;
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
@endsection
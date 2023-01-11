@extends('layout')
@section('content')

<style>
    h1{
        font-family: Arial;
        font-weight: bold;
        font-style: italic;
        text-align: center;
        color: seagreen;
        font-size:45px;
    }

    h3{
        font-family: Arial;
        font-weight: bold;
        color: seagreen;
        text-align: center;
        font-size:35px;
    }

    #p1{
        text-align: center;
        font-size: 24px;
    }
    
</style>

<br>
<div> <h1>About Us</h1> </div>
<br>

<div class="row">
    <div class="col-md-6">
        <img src="{{asset('image/Ultraman.jpg')}}" style="width:550px">
    </div>

    <div class="col-md-6">
    &nbsp;
    &nbsp;
        <h3>Origin</h3>
        &nbsp;
        &nbsp;
        <p id="p1">On March 18, 2020, Malaysia imposed Movement Control Order (MCO). Online shopping platforms are also developing along with the trend, but there is a lack of online shopping platforms to promote healthy life.</p>
        &nbsp;
        <p id="p1">Thus, <b>Healthy Dude</b> was created solely for this purpose.</p>
    </div>
</div>

<hr class="featurette-devider">

<div class="row">
&nbsp;
<div> <h1>Target</h1></div>

    <div class= "col-md-4">
        <div class="card" style="width: 25rem;">
        <span class="border border-success">
            <img class="card-img-top" src="{{asset('image/healthy life.jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Promote healthy living</h5>
                <p class="card-text">Provide relevant knowledge and information, so that more people understand and learn to maintain a healthy living standard habits.</p>
            </div>
            </span>
        </div>
    </div>

    <div class= "col-md-4">
        <div class="card" style="width: 25rem;">
        <span class="border border-success">
            <img class="card-img-top" src="{{asset('image/mutual benefit.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mutual Benefit</h5>
                <p class="card-text">With the concept of "mutual benefit", merchants and consumers can sell or buy affordable goods or services on the platform.</p>
            </div>
            </span>
        </div>
    </div>

    <div class= "col-md-4">
        <div class="card" style="width: 25rem;">
        <span class="border border-success">
            <img class="card-img-top" src="{{asset('image/One-stop service.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">'One-stop service' Platform</h5>
                <p class="card-text">With the concept of "one-stop health platform", it can solve the troubles of users' daily life or travel, and all the goods/services on the shelves are screened by the platform and strictly checked.</p>
            </div>
            </span>
        </div>
    </div>

</div>

&nbsp;
<br>

<style>
    .card:hover{
        transition: box-shadow 0.15s;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.4);
        padding-top: 2px;
        padding-bottom: 2px;
        padding-left: 2px;
        padding-right: 2px;
    }
</style>

@endsection
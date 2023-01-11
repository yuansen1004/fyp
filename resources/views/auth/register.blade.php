<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<style>
    .container{
        height: 100%;
        width: 100%;
        background-image: linear-gradient(#c0ecff, #9CF479, #c0ecff);
        background-position: center;
        background-size: cover;
        position: absolute;
    }   
    .container-box{
        height: 400px;
        width: 380px;
        position: relative;
        margin: 6% auto;
        background: #fff;
        padding: 5px;
        overflow: hidden;
        background-color: #C9C7C4;
    }
    .class-header{
        width: 150px;
        margin: 10px auto;
        position: relative;
        left: 0px;
        font-size: 40px;
    }
    #name{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        left: 40px;
        font-size: 20px;
    }
    #email{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        left: 40px;
        font-size: 20px;
    }
    #password{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        left: 40px;
        font-size: 20px;
    }
    #password-confirm{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        left: 40px;
        font-size: 20px;
    }
    #register-btn{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        font-size: 20px;
        position: relative;
        left: 40px;
        background-color: #9CF479;
    }

</style>

<div class="container">
    <div class="container-box">
        <div class="class-header">Register</div>
        <form method="POST" action="{{ route('register') }}" class="input" id="register">@csrf
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
            <br><button id="register-btn" type="submit" class="btn btn-primary">{{ __('Register') }}</button>          
        </form>
    </div>
</div>
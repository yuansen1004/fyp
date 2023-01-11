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
        left: 20px;
        font-size: 40px;
    }
    #email{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        font-size: 20px;
        left: 40px;
    }
    #password{
        margin: 10px auto;
        width: 300px;
        height: 30px;
        position: relative;
        left: 40px;
        font-size: 20px;
    }
    .form-check{
        position: relative;
        left: 40px;
    }
    .btn-link{
        position: relative;
        left: 40px;
    }
    #register{
        margin: 10px auto;
        position: absolute;
        left: 40px;
    }
    #login-btn{
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
            <div class="class-header">Login</div>
                <form method="POST" action="{{ route('login') }}">@csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>                                
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> 
                        @endif 
                    <br><button id="login-btn" type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    <br><a href="/register" id="register">Don't have account yet?</a>
                    </form>
            </div>
</div>
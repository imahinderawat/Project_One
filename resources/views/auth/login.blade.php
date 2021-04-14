<!doctype html><html lang="en-GB">
<title> CSCS TEST INFO - Online Exams - Login </title>
<head>
<style>
.form_register {
  width: 500px;
  border: 0px solid green;
  padding: 50px;
  margin: 4px;
  height: 350px;
  border-radius: 26px;
  display: inline-block;
  background-color: white;
}

body {
    text-align: left;
}

.img_register{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
        position: absolute;
        right: 0%;
    }


.form-control {
    background-color: transparent;
    color: dimgrey;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #eeeeee 2px;
    padding: 3px 10px;
    /*border-radius:4px;*/
}

.col-md-4 {
    color: Green;
    font-size: 18px;
    font-family: 'Crimson Text', serif;
    /*border-radius:20px;
    background-color: pink;*/
}

.btn {
    color: black;
    font-size: 16px;
    background-color: pink;
    width: 100px;
    border: white;
    padding: 10px;
    margin: 5px;
    border-radius:20px;
    font-family: 'Crimson Text', serif;
}



  /* When the screen is less than 1150 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 767px) {
  .img_register{
        max-width: 50%;
        max-height: 50%;
        display: none; /* remove extra space below image */
        position: absolute;
        right: 0%;
    }
    
  }
  
  

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 1024px) {
    .form_register {
  width: 500px;
  border: 0px solid green;
  padding: 50px;
  margin: 4px;
  height: 350px;
  border-radius: 26px;
  display: inline-block;
  background-color: white;
}
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 768px) {
    .form_register {
  width: 200px;
  border: 0px solid green;
  padding: 50px;
  margin: 4px;
  height: 400px;
  border-radius: 26px;
  display: inline-block;
  background-color: white;
}
}

</style>

</head>

<body>
@extends('layouts.app')

@section('content')
<div class=form_register>
<img class=img_register src = "https://as2.ftcdn.net/jpg/03/38/74/15/500_F_338741574_eFLGWMtAyg7jS3qCWKjmMSjyjeqGzkNT.jpg">
</br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div></br>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div></br>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div></br></br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button></br></br></br>
                                <div class="col-md-10 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn_forgot btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
</body>
</html>

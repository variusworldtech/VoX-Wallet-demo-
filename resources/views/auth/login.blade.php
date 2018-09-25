@extends('layouts.welcome_layout')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 offset-xs-1 col-sm-11 offset-sm-2 col-md-11 offset-md-2 col-lg-8 offset-lg-0">
            <div class="well">
                <div class="card-body">
                    <form id="loginForm" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                &nbsp;&nbsp;


                            </div>
                        </div>
                        <a style="color:mediumblue" href="{{URL::to('/register') }}">Need an account? Signup now</a>
                    </form>

                    <br>
                    <button id="account1" class="btn">Shane</button>
                    <button id="account2" class="btn">Andy</button>
                    <button id="account3" class="btn">Shirline</button>
                    <button id="account4" class="btn">James</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
    $("#account1").click(function() {
       $("#email").val("s.benjamin@variusworldtech.com");
       $("#password").val("password");
       $('#loginForm').submit();
    });
    $("#account2").click(function() {
       $("#email").val("andy@tenkaisolutions.com");
       $("#password").val("password");
       $('#loginForm').submit();
    });
    $("#account3").click(function() {
       $("#email").val("shirlineserrao@gmail.com");
       $("#password").val("password");
       $('#loginForm').submit();
    });
    $("#account4").click(function() {
       $("#email").val("james@variusworldtech.com");
       $("#password").val("password");
       $('#loginForm').submit();
    });
  });
</script>


@endsection

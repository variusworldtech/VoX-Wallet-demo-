@extends('layouts.welcome_layout')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 offset-xs-1 col-sm-11 offset-sm-2 col-md-11 offset-md-2 col-lg-8 offset-lg-0">
            <div class="well">

                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <a style="color:mediumblue" href="{{URL::to('/login') }}">Already registered? Login</a>
                    </form>

                    <br>
                    <button id="account1" class="btn">Shane</button>
                    <button id="account2" class="btn">Andy</button>
                    <button id="account3" class="btn">Sherline</button>
                    <button id="account3" class="btn">James</button>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function(){
    $("#account1").click(function() {
       $("#name").val("shane");
       $("#email").val("s.benjamin@variusworldtech.com");
       $("#password").val("password");
       $("#password-confirm").val("password");
    });
    $("#account2").click(function() {
      $("#name").val("andy");
      $("#email").val("andy@tenkaisolutions.com");
      $("#password").val("password");
      $("#password-confirm").val("password");
    });
    $("#account3").click(function() {
      $("#name").val("sherline");
      $("#email").val("sherlineserrao@gmail.com");
      $("#password").val("password");
      $("#password-confirm").val("password");
    });
    $("#account4").click(function() {
      $("#name").val("james");
      $("#email").val("james@variusworldtech.com");
      $("#password").val("password");
      $("#password-confirm").val("password");
    });
  });
</script>
@endsection

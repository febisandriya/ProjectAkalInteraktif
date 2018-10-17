@extends('template_auth')

@section('konten')
<div class="container">
  <div class="headerlogin">
    <h2>Login</h2>
  </div>
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="input-group">
<label>Email Address</label>
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>

<div class="input-group">
<label>Password</label>
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
@if ($errors->has('password'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('password') }}</strong>
  </span>
@endif
</div>

<div class="input-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
<label>Captcha</label>
<div class="captcha">
<span>{!! captcha_img() !!}</span>
<button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
</div>
<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
@if ($errors->has('captcha'))
  <span class="help-block">
    <strong>{{ $errors->first('captcha') }}</strong>
  </span>
@endif
</div>
<div class="input-grup">
<button type="submit" class="btn">
{{ __('Login') }}
</button>
</div>
<div class="input-grup">
<a class="btn " href="{{ route('password.request') }}">
{{ __('Forgot Your Password?') }}
</a>
</div>
</form>
</div>


<script type="text/javascript">
$(".btn-refresh").click(function(){

  $.ajax({

     type:'GET',

     url:'/refresh_captcha',

     success:function(data){

        $(".captcha span").html(data.captcha);

     }

  });

});

</script>
@endsection
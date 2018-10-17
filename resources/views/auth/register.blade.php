@extends('template_auth')

@section('konten')
<div class="container">
  <div class="headerlogin">
    <h2>Register</h2>
  </div>
<form method="POST" action="{{ route('register') }}">
@csrf
  <div class="input-group">
  <label>{{ __('Name') }}</label>
  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
  </div>

  <div class="input-group">
  <label>{{ __('E-Mail Address') }}</label>
  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
  @if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
  @endif
  </div>

  <div class="input-group">
  <label>{{ __('Password') }}</label>
  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
  @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
  @endif
  </div>

<div class="input-group">
  <label>{{ __('Confirm Password') }}</label>
  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>

<div class="input-group">
  <button type="submit" class="btn btn-primary">{{ __('Register') }}
  </button>
  </div>
</form>
</div>
@endsection
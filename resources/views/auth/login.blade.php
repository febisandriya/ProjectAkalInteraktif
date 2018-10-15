@extends('template_auth')

@section('konten')
<div class="container">
  <center>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
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

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">

                      <label for="password" class="col-md-4 control-label">Captcha</label>


                      <div class="col-md-6">

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

                  </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                      </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

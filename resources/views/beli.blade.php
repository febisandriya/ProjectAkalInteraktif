@extends('template_order')

@section('konten')
<div class="container">
  <div class="headerlogin">
    <h2>Masukan Identitas</h2>
  </div>
<form method="POST" action="{{ route('order') }}">
@csrf
  <div class="input-group">
  <label>{{ __('Nama Lengkap') }}</label>
  <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>
  @if ($errors->has('nama'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('nama') }}</strong>
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
    <label>{{ __('No HP') }}</label>
    <input id="nohp" type="text" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="nohp" value="{{ old('nohp') }}" required>
    @if ($errors->has('nohp'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nohp') }}</strong>
      </span>
    @endif
    </div>

  <div class="input-group">
  <label>{{ __('Alamat') }}</label>
  <textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" required></textarea>
  @if ($errors->has('alamat'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('alamat') }}</strong>
    </span>
  @endif
  </div>


    <div class="input-group">
    <label>{{ __('Jumlah Pembelian') }}</label>
    <input id="qty" type="number" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" value=1 required/>
  @if ($errors->has('qty'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('qty') }}</strong>
      </span>
    @endif
    </div>


      <div class="input-group">
      {{ csrf_field() }}
      <input id="harga" type="hidden"name="harga" value={{$data->harga}}></input>
      </div>

  <div class="input-group">
  {{ csrf_field() }}
  <input id="product_id" type="hidden"name="product_id" value="{{$data->id}}"></input>
  </div>



<div class="input-group">
  <button type="submit" class="btn btn-primary">{{ __('Checkout') }}
  </button>
  </div>
</form>
</div>
@endsection

@extends('template_home')
@section('konten')
<!doctype html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="body-content">
    <div class="row">
      <div class="col-lg-6">

<h4>Alamat Pengiriman</h4>
<p>{{Session::get('nama')}}</p>
<p>{{Session::get('nohp')}}</p>
<p>{{Session::get('alamat')}}</p>
</div>
<div class="col-lg-6">
<!-- <div align="right"> -->
<pre>
  <h4>Ringkasan Belanja</h4>
  Harga        {{Session::get('harga')}}
  jumlah beli  {{Session::get('qty')}}
  Total harga  {{Session::get('total')}}
</pre>
  <button type="submit" class="btn btn-primary">Bayar
</div>
</button>
<!-- </div> -->
</div>
</div>
<div class="row">
<div class="col-lg-2">
{{ csrf_field() }}
<img src="{{ url('uploads/gambar1.png') }}" style="width: 100px; height: 100px;"/>
 </div>
 <div class="col-lg-3">
   <h4>{{Session::get('namaproduct')}}</h4>
   <p>{{Session::get('harga')}}</P>
   </div>

  </div>

</div>



</body>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection

@extends('template_home')
@section('konten')
<!doctype html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
  <div class="constainer">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <center><h2>Alamat Pengirim</h2></center>
        <hr>
        <form class="form-horizontal" method="POST"">

  <div class="form-group">
            <label class="control-label col-xs-3" for="alamat">Alamat</label>
            <div class="col-xs-9">
              <textarea rows="3" class="form-control" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
            </div>
          </div>

 <div class="form-group">
            <label class="control-label col-xs-3">pilih kurir</label>
            <div class="col-xs-2">
              <label class="radio-inline">
                  <input type="radio" name="JNE" value="JNE"> JNE
              </label>
            </div>
            <div class="col-xs-2">
              <label class="radio-inline">
                  <input type="radio" name="J&T" value="J&T"> J&T
              </label>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-offset col-xs-9">
              <center><button type="button" class="btn btn-default" ><i class="fa fa-plus"></i>Bayar</button></center>
            </div>
          </div>
</form>
</div>
</div>
</div>



</body>
@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection

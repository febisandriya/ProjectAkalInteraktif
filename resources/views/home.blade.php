@extends('template_home')
@section('konten')
<!doctype html>

<head>
<title>PT Akal Interaktif</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



 <body>
 <div class="body-content">
   <div class="row">
   @foreach($data as $datas)

             <div class="col-lg-3">
                <h4>{{$datas->nama_product}}</h4>
                <img src="{{ url('uploads/'.$datas->gambar) }}" style="width: 75px; height: 75px;"/>
                <p>{{$datas->deskripsi}}</p>
                <br>{{$datas->harga}}</br>

                  <a href="{{route('productdetail', [$datas->id])}}"><button type="button" class="btn btn-default" ><i class="fa fa-plus"></i> Detail</button></a>
              </div>
              @endforeach
            </div>
          </div>
        </body>


@endsection
@section('footer')
 <h4>PT Akal Interaktif</h4>
 <h5>Footer</h5>
@endsection

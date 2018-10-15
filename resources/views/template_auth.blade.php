<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> PT Akal Interaktif</title>
   <li <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
 <div class="container-fluid">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="{{url('/')}}">PT Akal Interaktif</a>
 </div>

<!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav">
 </ul>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="{{ route('register') }}">Daftar</a></li>
  <li><a href="{{ route('login') }}">Masuk</a></li>
 </ul>
 </li>
 </ul>
 </div><!-- /.navbar-collapse -->
 </div>
</nav>
<div class="container">
 @yield('konten')
</div>
</body>
<footer>
 @yield('footer')
</footer>

<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
 <a class="navbar-brand" href="{{route('home')}}">PT Akal Interaktif</a>
 </div>

<!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav">
 </ul>
 <form class="navbar-form navbar-left" role="search">
 <div class="form-group">
 <input type="text" class="form-control" placeholder="Cari">
 </div>
 <button type="submit" class="btn btn-default">Cari</button>
 </form>
 <ul class="nav navbar-nav navbar-right">
 <ul class="nav navbar-nav">
   <li class="dropdown">
     <a href="{{ route('logout') }}"  class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }} <span class="glyphicon glyphicon-user pull-right"></span></a>
     <ul class="dropdown-menu">
       <li class="divider"></li>
       <li><a href="">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
     </ul>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
  </form>
</li>
</ul>
</ul





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

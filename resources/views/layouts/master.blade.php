<!DOCTYPE html>
<html>

<head>
  <title>@yield('titolo')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <!-- Fogli di stile -->
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap4/bootstrap-grid.css">
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap4/bootstrap.css">
  <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap4/bootstrap-reboot.css">
  <link rel="stylesheet" href="{{ url('/') }}/css/myStyle.css">

  <!-- jQuery e plugin JavaScript  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
  @yield('script')
  <!--
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" class="init">
        $(document).ready(function () {
        $('#example').DataTable();
    });
  </script> -->
</head>

<body>
  <!--Parte relativa alla navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mb-0 h1 accent" href="{{ route('goHome') }}">SOCCER HUB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Top 10
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('attaccantiTop.index') }}">{{ trans('labels.attaccantiLabel') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('centrocampistiTop.index') }}">{{ trans('labels.centrocampistiLabel') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('difensoriTop.index') }}">{{ trans('labels.difensoriLabel') }}</a>
          </div>
        </li>
        @if($logged)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('goToDashboard') }}">Dashboard</a>
        @endif
      </ul>
      <a href="{{ route('setLang', ['lang' => 'en']) }}" class="nav-link"><img src="{{ url('/') }}/img/flags/en.png" width="30" class="img-rounded"/></a>
      <a href="{{ route('setLang', ['lang' => 'it']) }}" class="nav-link"><img src="{{ url('/') }}/img/flags/it.png" width="24" class="img-rounded"/></a>
      <!--Parte relativa ai tasti di login e logout -->
       @if($logged)
           <li class="nav-item"><a class="nav-link login_label" href="{{ route('logout') }}"> {{ trans('labels.logoutLabel') }} </a></li>
       @else
            <li class="nav-item"><a class="nav-link login_label" href="{{ route('auth') }}"> {{ trans('labels.loginLabel') }}</a></li>
            <li class="nav-item"><a class="nav-link login_label" href="{{ route('registr') }}"> {{ trans('labels.registerLabel') }} </a></li>
       @endif
      
       <!-- 
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 accent" type="submit">Search</button>
      </form>
      -->
    </div>
  </nav>

  @yield('copertina_pagina')

  <!--Parte relativa alla breadcrumb-->
  <nav aria-label="breadcrumb ">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
  </nav>

  @yield('contenuto_pagina')

  <!--Sezione dedicata al footer della pagina-->
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">Copyright &copy; Soccer Hub Company 2022</div>
        </div>
        <div class="col-auto">
          <a class="link-light small" href="https://laravel.com">Documentation</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="https://github.com/edoofra">Contact</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
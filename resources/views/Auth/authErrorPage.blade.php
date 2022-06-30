<!DOCTYPE html>
<html>

<head>
  <title>Authentication error</title>
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
</head>

<body>
    <div class="container text-center">
        <div class="row-fluid text-center" style="margin-top:3em">
            <div class="card">
                <div class="card-body">
                    <h1> {{ trans('labels.authErrorLabel1') }}</h1>
                    </br>
                    <p class="paragraph_home">{{ trans('labels.authErrorLabel2') }} </p>
                    <p class="paragraph_home"> {{ trans('labels.authErrorLabel3') }} <a href="{{route('registr')}}">{{ trans('labels.authErrorLabel4') }}</a></p>
                    <a class="btn btn-danger" href="{{route('goHome')}}"> {{ trans('labels.authErrorLabel5') }} </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
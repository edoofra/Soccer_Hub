<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    @yield('authScript')
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 4em">
            <div class="col-md-6 col-md-offset-3">
                <div class="tab-content">
                    <div class="row text-center" style="margin-top: 1em">
                        <a href="{{ route('goHome') }}">
                        <img src="{{ url('/') }}/img/LOGO.png" class="img-fluid">
                        </a> 
                    </div>
                    <div class="row text-center" style="margin-top: 1em">
                        <h1 class="h1">@yield('titolo_sezione')</h1>
                    </div>
                    @yield('action_bottone')
                        @csrf
                        @yield('campi_form')
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="login-submit" class="form-control btn btn-primary" value="@yield('label_bottone')">
                                </div>
                            </div>
                        </div>
                        @yield('question1')
                        @yield('question2')
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
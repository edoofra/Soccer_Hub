<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 4em">
            <div class="col-md-6 col-md-offset-3">
                <div class="tab-content">
                    <div class="row text-center" style="margin-top: 1em">
                        <h1 class="h1">@yield('titolo_sezione')</h1>
                    </div>
                    <form action="@yield('action_bottone')" method="post" style="margin-top: 2em">
                        @csrf
                        @yield('campi_form')
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="login-submit" class="form-control btn btn-primary" value="@yield('label_bottone')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <a href="@yield('action_question1')">@yield('question1')</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <a href="@yield('action_question2')">@yield('question2')</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.css">
<link rel="stylesheet" href="{{ url('/') }}/css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!--MODIFICA -->

<body>
        <div class="container">
            <div class="row" style="margin-top: 4em">
                <div class="col-md-6 col-md-offset-3">
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="attive"><a class="btn-primary" href="#login-form" data-toggle="tab">{{ trans('labels.login') }}</a></li>
                            <li><a href="#register-form" data-toggle="tab">{{ trans('labels.register') }}</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="login-form">
                            <form id="login-form" action="#" method="post" style="margin-top: 2em">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                                </div>

                                <div class="form-group text-center">
                                    <input type="checkbox" name="remember">
                                    <label for="remember">{{ trans('labels.remember') }}</label>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" class="form-control btn btn-primary" value="{{ trans('labels.login') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="#">{{ trans('labels.forgotPassword') }}</a>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="tab-pane" id="register-form">
                            <form id="register-form" action="#" method="post" style="margin-top: 2em">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username" value=""/>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="{{ trans('labels.email') }}" value=""/>
                                </div>

                                <div class="form-group text-center">
                                    <input type="password" name="password" class="form-control" placeholder="Password" value=""/>
                                </div>

                                <div class="form-group text-center">
                                    <input type="password" name="confirm-password" class="form-control" placeholder="{{ trans('labels.confirmPassword') }}" value=""/>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" class="form-control btn btn-primary" value="{{ trans('labels.registerNow') }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</htm>
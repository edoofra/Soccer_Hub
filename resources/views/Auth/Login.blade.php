@extends('layouts.AuthLayout')
@section('authScript')
<script type="text/javascript" src="{{ asset('js/controlloCampi.js') }}"></script>
@endsection
@section('titolo_sezione')
{{ trans('labels.loginLabel1') }}
@section('action_bottone')
<form action="{{ route('login') }}" id ="login-form" method="post" style="margin-top: 2em" onsubmit="event.preventDefault(); controlloCampiLogin()">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" id="username" name="username" class="form-control" placeholder="Username"/>
    <span class="invalid-input" id="invalid-username"></span>
</div>

<div class="form-group">
     <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
     <span class="invalid-input" id="invalid-password"></span>
</div>

<div class="form-group text-center">
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
</div>
@endsection
@section('label_bottone')
{{ trans('labels.loginLabel2') }}
@endsection
@section('question2')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('registr') }}">{{ trans('labels.loginLabel3') }}</a>
    </div>
</div>
@endsection
@section('action_question2',"{{ route('registr') }}")
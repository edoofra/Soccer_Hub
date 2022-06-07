@extends('layouts.AuthLayout')
@section('authScript')
<script type="text/javascript" src="{{ url('/') }}/js/controlloCampi.js"> </script>
@endsection
@section('titolo_sezione','WELCOME BACK')
@section('action_bottone')
<form action="{{ route('login') }}" id ="login-form" method="post" style="margin-top: 2em" onsubmit="event.preventDefault(); controlloCampiLogin()">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" id="username" name="username" class="form-control" placeholder="Username"/>
</div>

<div class="form-group">
     <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
</div>

<div class="form-group text-center">
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
</div>
@endsection
@section('label_bottone','LOGIN')
@section('question1')
<div class="form-group">
    <div class="text-center">
        <a href="#">Forgot Password?</a>
    </div>
</div>
@endsection
@section('question2')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('registr') }}">Don't have an account?</a>
    </div>
</div>
@endsection
@section('action_question2',"{{ route('registr') }}")
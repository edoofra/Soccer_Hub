@extends('layouts.AuthLayout')
@section('titolo_sezione','WELCOME BACK')
@section('action_bottone')
<form action="{{ route('login') }}" method="post" style="margin-top: 2em">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Username"/>
</div>

<div class="form-group">
     <input type="password" name="password" class="form-control" placeholder="Password"/>
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
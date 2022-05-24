@extends('layouts.AuthLayout')
@section('titolo_sezione','WELCOME BACK')
@section('action_bottone','#')
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
@section('question1','Forgot Password?')
@section('action_question1',"#")
@section('question2','Need to register?')
@section('action_question2',"{{ route('registr') }}")
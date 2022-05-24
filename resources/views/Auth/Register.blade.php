@extends('layouts.AuthLayout')
@section('titolo_sezione','WELCOME TO SOCCER HUB!')
@section('action_bottone','#')
@section('campi_form')
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
@endsection
@section('label_bottone','REGISTER')
@section('question1','Have you read our FAQ?')
@section('action_question1','#')
@section('question2','Already Registered?')
@section('action_question2',"{{ route('auth') }}")

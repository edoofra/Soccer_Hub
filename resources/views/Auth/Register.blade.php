@extends('layouts.AuthLayout')
@section('titolo_sezione','WELCOME TO SOCCER HUB!')
@section('action_bottone')
<form action="{{ route('registration') }}" method="post" style="margin-top: 2em">
@endsection
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
@section('question1')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('goHome') }}">Have you read our FAQ?</a>
    </div>
</div>
@endsection
@section('question2')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('auth') }}">Already Registered?</a>
    </div>
</div>
@endsection


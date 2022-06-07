@extends('layouts.AuthLayout')
@section('authScript')
<script type="text/javascript" src="{{ asset('js/controlloCampi.js') }}"></script>
@endsection
@section('titolo_sezione','WELCOME TO SOCCER HUB!')
@section('action_bottone')
<form action="{{ route('registration') }}" id="registration-form" method="post" style="margin-top: 2em" onsubmit="event.preventDefault(); controlloCampiRegistrazione()">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value=""/>
</div>

<div class="form-group">
    <input type="text" name="email" id="mail" class="form-control" placeholder="{{ trans('labels.email') }}" value=""/>
</div>

<div class="form-group text-center">
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value=""/>
</div>

<div class="form-group text-center">
    <input type="password" name="confirm-password" id="passwordConfirm" class="form-control" placeholder="{{ trans('labels.confirmPassword') }}" value=""/>
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


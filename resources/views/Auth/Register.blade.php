@extends('layouts.AuthLayout')
@section('authScript')
<script type="text/javascript" src="{{ asset('js/controlloCampi.js') }}"></script>
@endsection
@section('titolo_sezione')
{{ trans('labels.registrazioneLabel1') }}
@endsection
@section('action_bottone')
<form action="{{ route('registration') }}" id="registration-form" method="post" style="margin-top: 2em" onsubmit="event.preventDefault(); controlloCampiRegistrazione()">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value=""/>
    <span class="invalid-input" id="invalid-username"></span>
</div>

<div class="form-group">
    <input type="text" name="email" id="mail" class="form-control" placeholder="email" value=""/>
    <span class="invalid-input" id="invalid-mail"></span>
</div>

<div class="form-group text-center">
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value=""/>
    <span class="invalid-input" id="invalid-password"></span>
</div>

<div class="form-group text-center">
    <input type="password" name="confirm-password" id="passwordConfirm" class="form-control" placeholder="confirm password" value=""/>
    <span class="invalid-input" id="invalid-passwordConfirm"></span>
</div>
@endsection
@section('label_bottone')
{{ trans('labels.registrazioneLabel2') }}
@endsection
@section('question1')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('goHome') }}">{{ trans('labels.registrazioneLabel3') }}</a>
    </div>
</div>
@endsection
@section('question2')
<div class="form-group">
    <div class="text-center">
        <a href="{{ route('auth') }}">{{ trans('labels.registrazioneLabel4') }}</a>
    </div>
</div>
@endsection


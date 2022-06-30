@extends('layouts.playerLayout')
@section('titolo_sezione')
{{ trans('labels.aggiungiGiocatoreLabel') }}
@endsection
@section('immagine')
<img src="{{ url('/') }}/img/add.jpg" class="img-fluid">
@endsection
@section('action_bottone')
<form action="{{ route('addPlayer') }}" id ="login-form" method="post" style="margin-top: 2em">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" name="nome" id="nome" class="form-control" placeholder="{{ trans('labels.nomeLabel') }}"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="cognome" id="cognome" class="form-control" placeholder="{{ trans('labels.cognomeLabel') }}"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="età" id="età" class="form-control" placeholder="{{ trans('labels.etàLabel') }}"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="squadra" id="squadra" class="form-control" placeholder="{{ trans('labels.squadraLabel') }}"/>
</div>

<div class="form-group">
     <input type="text" name="ruolo" id="ruolo" class="form-control" placeholder="{{ trans('labels.ruoloLabel') }} (A, C, D)"/>
</div>
@endsection
@section('bottone_submit')
<div class="col-sm-12 col-sm-offset-3">
     <input type="submit" name="login-submit" class="form-control btn btn-primary" value="{{ trans('labels.aggiungiLabel') }}">
</div>
@endsection
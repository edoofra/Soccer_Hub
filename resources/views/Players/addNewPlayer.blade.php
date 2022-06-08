@extends('layouts.playerLayout')
@section('titolo_sezione','ADD NEW PLAYER')
@section('action_bottone')
<form action="{{ route('addPlayer') }}" id ="login-form" method="post" style="margin-top: 2em">
@endsection
@section('campi_form')
<div class="form-group">
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="cognome" id="cognome" class="form-control" placeholder="Cognome"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="età" id="età" class="form-control" placeholder="Età"/>
</div>
<span id='Invalid title'></span>

<div class="form-group">
     <input type="text" name="squadra" id="squadra" class="form-control" placeholder="Squadra"/>
</div>

<div class="form-group">
     <input type="text" name="ruolo" id="ruolo" class="form-control" placeholder="Ruolo (A, C, D)"/>
</div>
@endsection
@section('bottone_submit')
<div class="col-sm-12 col-sm-offset-3">
     <input type="submit" name="login-submit" class="form-control btn btn-primary" value="AGGIUNGI">
</div>
@endsection
@extends('layouts.AuthLayout')
@section('titolo_sezione','ADD NEW PLAYER')
@section('action_bottone','#')
@section('campi_form')
<div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Nome"/>
</div>

<div class="form-group">
     <input type="text" name="cognome" class="form-control" placeholder="Cognome"/>
</div>

<div class="form-group">
     <input type="text" name="squadra" class="form-control" placeholder="Squadra"/>
</div>

<div class="form-group">
     <input type="text" name="ruolo" class="form-control" placeholder="Ruolo"/>
</div>
@endsection
@section('label_bottone','AGGIUNGI')

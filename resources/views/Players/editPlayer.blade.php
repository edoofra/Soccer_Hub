@extends('layouts.playerLayout')
@section('titolo_sezione')
{{ trans('labels.modificaGiocatoreLabel') }}: {{$giocatore->nome}} {{$giocatore->cognome}}
@endsection
@section('immagine')
<img src="{{ url('/') }}/img/edit.jpg" class="img-fluid">
@endsection
@section('action_bottone')
<form action="{{ route('editPlayer',['id' => $giocatore->id]) }}" id ="edit-form" method="post" style="margin-top: 2em" onsubmit="event.preventDefault(); controlloCampiEditGiocatore()">
@endsection
@section('campi_form')
<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.squadraLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="squadra" id="squadra" class="form-control" value="{{ $giocatore->squadra }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.ruoloLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="ruolo" id="ruolo" class="form-control" value="{{ $giocatore->ruolo }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.partiteLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="partite" id="partite" class="form-control" value="{{ $giocatore->partite_giocate }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.golLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="gol" id="gol" class="form-control" value="{{ $giocatore->gol }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.assistLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="assist" id="assist" class="form-control" value="{{ $giocatore->assist }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.cleansheetLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="cleansheet" id="cl" class="form-control" value="{{ $giocatore->clean_sheet }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.tiriTentatiLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="tiriTentati" id="tiri_tentati" class="form-control" value="{{ $giocatore->tiri_tentati }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.tiriPortaLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="tiriPorta" id="tiriPorta" class="form-control" value="{{ $giocatore->tiri_in_porta }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.passaggiTentatiLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="passaggiTentati" id="passaggi_tentati" class="form-control" value="{{ $giocatore->passaggi_tentati }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.passaggiCompletatiLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="passaggiCompletati" id="passaggi_completati" class="form-control" value="{{ $giocatore->passaggi_completati }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.contrastiTentatiLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="contrastiTentati" id="contrasti_tentati" class="form-control" value="{{ $giocatore->contrasti_tentati }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.contrastiLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="contrastiCompletati" id="contrasti_vinti" class="form-control" value="{{ $giocatore->contrasti_vinti }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.ammonizioniLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="ammonizioni" id="ammonizioni" class="form-control" value="{{ $giocatore->ammonizioni }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.espulsioniLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="espulsioni" id="espulsioni" class="form-control" value="{{ $giocatore->espulsioni }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.stipendioLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="stipendio" id="stipendio" class="form-control" value="{{ $giocatore->stipendio }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.valoreMercatoLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="valore" id="valore_mercato" class="form-control" value="{{ $giocatore->valore_mercato }}"/>
</div>

<div class="text-left">
    <span class="invalid-input text-left">{{ trans('labels.scadenzaLabel') }}</span>
</div>
<div class="form-group">
     <input type="text" name="scadenza" id="scadenza" class="form-control" value="{{ $giocatore->scadenza_contratto }}"/>
</div>
@endsection
@section('bottone_submit')
<div class="col-sm-12 col-sm-offset-3">
     <input type="submit" name="login-submit" class="form-control btn btn-primary" value="{{ trans('labels.modificaGiocatoreLabel1') }}">
</div>
@endsection
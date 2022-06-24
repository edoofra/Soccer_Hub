@extends('layouts.master')
@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('contenuto_pagina')

<!--Breadcrumb  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('goHome')}}">Home</a></li>
    <li class="breadcrumb-item"><a href= "{{route('goToDashboard')}}">User Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page">Cancella Giocatore</li>
  </ol>

  

<div class="container text-center">
    <div class="row-fluid text-center" style="margin-top: 1em">
        <a href="{{ route('goHome') }}">
            <img src="{{ url('/') }}/imgLoghi.jpeg" class="img-fluid">
        </a> 
    </div>
    <div class="row">
        <div class="col-md-12">
           <h1> Cancellare giocatore "{{$giocatore->cognome}}" </h1>
           <p class="paragraph_home"> stai per cancellare il giocatore "{{$giocatore->cognome}}", confermi? </p>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="card">
                <div class='card-body'>
                    <h5 class="card-title">ANNULLA</h5>
                    <p>il giocatore <strong> NON sarà rimosso permanentemente dal database</strong>,confermi?</p>
                    <p><a class="btn btn-secondary" href="{{route('goToDashboard')}}">Torna alla Dashboard</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class='card-body'>
                    <h5 class="card-title">CONFERMA</h5>
                    <p>il giocatore <strong>sarà rimosso permanentemente dal database</strong>,confermi?</p>
                    <p><a class="btn btn-danger" href="{{route('deletePlayer', ['id' => $giocatore->id])}}">Elimina</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
@endsection
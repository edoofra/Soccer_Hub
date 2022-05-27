@extends('layouts.master')
@section('contenuto_pagina')

<!--Breadcrumb  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('goHome')}}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">Top 10</li>
    @yield('breadcrumb')
    )
  </ol>

<div class="container">
    <div class="row">
        <h1 class="h1">TOP 10 @yield('titolo_top_10') </h1>
    </div>
    <div class="row">
        <p class="paragraph_home" style="padding:1em">@yield('presentazione_sezione')</p>
    </div>
    <div class="row blocco_evidenza" style="padding:1em">
        <blockquote class="blockquote">
            <p class="lead">@yield('citazione')</p>
            <footer class="blockquote-footer">@yield('citazione_autore')</footer>
        </blockquote>
    </div>
    <div class="row">
        <div class="col-md-offset-10 col-xs-6">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='20%'>
                <col width='20%'>
                <col width='20%'>
                <col width='20%'>
                <col width='10%'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Squadra</th>
                        <th>@yield('caratteristica')</th>
                        <th>Rank</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach($listaGiocatori as $giocatore_top)
                     <tr>
                        <td> {{ $giocatore_top->nome }} </td>
                        <td> {{ $giocatore_top->cognome }} </td>
                        <td> {{ $giocatore_top->squadra}} </td>
                        <td> {{ $giocatore_top->valore_principale }} </td>
                        <td> {{ $giocatore_top->rank }} </td>
                        <td><a class="btn btn-primary">Contatta</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
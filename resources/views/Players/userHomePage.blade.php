@extends('layouts.master')
@section('script')
@endsection
@section('contenuto_pagina')

<!--Breadcrumb  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('goHome')}}">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">User Dashboard</li>
  </ol>

<div class="container">
    <div class="row">
        <h1 class="h1">DASHBOARD </h1>
    </div>
    <div class="row">
        <p class="paragraph_home">Here you can find the list of all the players you are currently following!</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">ATTACCANTI</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Squadra</th>
                        <th>Età</th>
                        <th>Partite</th>
                        <th>Gol</th>
                        <th>Assist</th>
                        <th>More</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach($listaAttaccanti as $attaccante)
                     <tr>
                        <td> {{ $attaccante->nome }} </td>
                        <td> {{ $attaccante->cognome }} </td>
                        <td> {{ $attaccante->squadra}} </td>
                        <td> {{ $attaccante->età }} </td>
                        <td> {{ $attaccante->partite_giocate }} </td>
                        <td> {{ $attaccante->gol }} </td>
                        <td> {{ $attaccante->assist }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">CENTROCAMPISTI</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Squadra</th>
                        <th>Età</th>
                        <th>Partite</th>
                        <th>Gol</th>
                        <th>Assist</th>
                        <th>More</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach($listaCentrocampisti as $centrocampista)
                     <tr>
                        <td> {{ $centrocampista->nome }} </td>
                        <td> {{ $centrocampista->cognome }} </td>
                        <td> {{ $centrocampista->squadra}} </td>
                        <td> {{ $centrocampista->età }} </td>
                        <td> {{ $centrocampista->partite_giocate }} </td>
                        <td> {{ $centrocampista->gol }} </td>
                        <td> {{ $centrocampista->assist }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">DIFENSORI</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Squadra</th>
                        <th>Età</th>
                        <th>Partite</th>
                        <th>Clean Sheets</th>
                        <th>Contrasti Vinti</th>
                        <th>More</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach($listaDifensori as $difensore)
                     <tr>
                        <td> {{ $difensore->nome }} </td>
                        <td> {{ $difensore->cognome }} </td>
                        <td> {{ $difensore->squadra}} </td>
                        <td> {{ $difensore->età }} </td>
                        <td> {{ $difensore->partite_giocate }} </td>
                        <td> {{ $difensore->clean_sheet }} </td>
                        <td> {{ $difensore->contrasti_vinti }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>

</div>
@endsection
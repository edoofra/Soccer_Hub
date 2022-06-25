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
    <li class="breadcrumb-item" aria-current="page">{{$giocatore->nome}} {{$giocatore->cognome}}</li>
  </ol>

<div class="container">
    <div class="row">
        <h1 class="h1">PLAYER ANALYSIS: {{$giocatore->nome}} {{$giocatore->cognome}}</h1>
    </div>
    </br>
     <div class= "row">
        <h5> RUOLO: {{$giocatore->ruolo}} </h5>
    </div>   
    <div class="row">
        <div class="col-md-5">
          <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='70%'>
                <col width='30%'>
                <thead>
                    <tr>
                        <th>Dato</th>
                        <th>Valore</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td> Partite </td>
                        <td> {{ $giocatore->partite_giocate }} </td>
                    </tr>
                    <tr>
                        <td> Gol </td>
                        <td> {{ $giocatore->gol }} </td>
                    </tr>
                    <tr>
                        <td> Assist </td>
                        <td> {{ $giocatore->assist }} </td>
                    </tr>
                    <tr>
                        <td> Clean Sheet </td>
                        <td> @if("{{$giocatore->ruolo}}" == 'D')
                              {{$giocatore->clean_sheet}} 
                              @else
                              - 
                              @endif </td>
                    </tr>
                    <tr>
                        <td> Tiri tentati </td>
                        <td> {{ $giocatore->tiri_tentati }} </td>
                    </tr>
                    <tr>
                        <td> Tiri in Porta </td>
                        <td> {{ $giocatore->tiri_in_porta}} </td>
                    </tr>
                    <tr>
                        <td> Passaggi Tentati </td>
                        <td> {{ $giocatore->passaggi_tentati }} </td>
                    </tr>
                    <tr>
                        <td> Passaggi Completati </td>
                        <td> {{ $giocatore->passaggi_completati }} </td>
                    </tr>
                    <tr>
                        <td> Contrasti Tentati </td>
                        <td> {{ $giocatore->contrasti_tentati}} </td>
                    </tr>
                    <tr>
                        <td> Contrasti Vinti </td>
                        <td> {{ $giocatore->contrasti_vinti }} </td>
                    </tr>
                    <tr>
                        <td> Ammonizioni </td>
                        <td> {{ $giocatore->ammonizioni }} </td>
                    </tr>
                    <tr>
                        <td> Espulsioni </td>
                        <td> {{ $giocatore->espulsioni }} </td>
                    </tr>
                    <tr>
                        <td> Stipendio </td>
                        <td> {{ $giocatore->stipendio }} </td>
                    </tr>
                    <tr>
                        <td> Valore Mercato </td>
                        <td> {{ $giocatore->valore_mercato }} </td>
                    </tr>
                    <tr>
                        <td> Scadenza Contratto </td>
                        <td> {{ $giocatore->scadenza_contratto }} </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-7">
        <canvas id="myChart"></canvas>
            <script>

                var valori=<?php echo json_encode($valori); ?>;
                attacco = valori['attacco'];
                creatività = valori['creatività'];
                difesa = valori['difesa'];

                const data = {
                      labels: [
                          'Attacco',
                          'Creatività',
                          'Difesa',
                      ],
                      datasets: [{
                          label: 'Valori',
                          data: [attacco,creatività,difesa],
                          fill: true,
                          backgroundColor: 'rgba(255, 99, 132, 0.2)',
                          borderColor: 'rgb(255, 99, 132)',
                          pointBackgroundColor: 'rgb(255, 99, 132)',
                      }]
                    };

                const config = {
                    type: 'radar',
                    data: data,
                    options: {}
                };
            </script>
            <script>
                const myChart = new Chart(
                document.getElementById('myChart'),
                config
             );
            </script>
        </div>  
    </div>
</div>

@endsection
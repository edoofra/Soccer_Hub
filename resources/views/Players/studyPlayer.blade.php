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
        <h1 class="h1">{{ trans('labels.analisiGiocatoreLabel') }}: {{$giocatore->nome}} {{$giocatore->cognome}}</h1>
    </div>
    </br>
     <div class= "row">
        <h5>{{ trans('labels.ruoloLabel') }}: {{$giocatore->ruolo}} </h5>
    </div>   
    <div class="row">
        <div class="col-md-5">
          <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='70%'>
                <col width='30%'>
                <thead>
                    <tr>
                        <th>{{ trans('labels.datoLabel') }}</th>
                        <th>{{ trans('labels.valoreLabel') }}</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td> {{ trans('labels.partiteLabel') }} </td>
                        <td> {{ $giocatore->partite_giocate }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.golLabel') }} </td>
                        <td> {{ $giocatore->gol }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.assistLabel') }} </td>
                        <td> {{ $giocatore->assist }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.cleansheetLabel') }}</td>
                        <td> @if("{{$giocatore->ruolo}}" == 'D')
                              {{$giocatore->clean_sheet}} 
                              @else
                              - 
                              @endif </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.tiriTentatiLabel') }} </td>
                        <td> {{ $giocatore->tiri_tentati }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.tiriPortaLabel') }} </td>
                        <td> {{ $giocatore->tiri_in_porta}} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.passaggiTentatiLabel') }} </td>
                        <td> {{ $giocatore->passaggi_tentati }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.passaggiCompletatiLabel') }} </td>
                        <td> {{ $giocatore->passaggi_completati }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.contrastiTentatiLabel') }} </td>
                        <td> {{ $giocatore->contrasti_tentati}} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.contrastiLabel') }} </td>
                        <td> {{ $giocatore->contrasti_vinti }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.ammonizioniLabel') }} </td>
                        <td> {{ $giocatore->ammonizioni }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.espulsioniLabel') }} </td>
                        <td> {{ $giocatore->espulsioni }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.stipendioLabel') }} </td>
                        <td> {{ $giocatore->stipendio }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.valoreMercatoLabel') }} </td>
                        <td> {{ $giocatore->valore_mercato }} </td>
                    </tr>
                    <tr>
                        <td> {{ trans('labels.scadenzaLabel') }} </td>
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
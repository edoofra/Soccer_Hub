@extends('layouts.master')
@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        <div class="col-md-8">
            <p class="paragraph_home">{{ trans('labels.dashboardLabel') }}</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-success" href="addPlayerForm">{{ trans('labels.aggiungiGiocatoreLabel') }}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">{{ trans('labels.attaccantiLabelM') }}</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='10%'>
                <col width='10%'>
                <col width='20%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <thead>
                    <tr>
                        <th>{{ trans('labels.nomeLabel') }}</th>
                        <th>{{ trans('labels.cognomeLabel') }}</th>
                        <th>{{ trans('labels.squadraLabel') }}</th>
                        <th>{{ trans('labels.etàLabel') }}</th>
                        <th>{{ trans('labels.partiteLabel') }}</th>
                        <th>{{ trans('labels.golLabel') }}</th>
                        <th>{{ trans('labels.assistLabel') }}</th>
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
                        <td> <a class="btn btn-primary" href="{{ route('studyPlayer', ['id' => $attaccante->id]) }}">..see more..</a> </td>
                        <td> <a class="btn btn-danger" href="{{ route('goToDeletePlayerPage', ['id' => $attaccante->id]) }}">{{ trans('labels.eliminaLabel') }}</a> </td>
                        <td> <a class="btn btn-info" href="{{ route('editPlayerForm', ['id' => $attaccante->id]) }}">{{ trans('labels.modificaGiocatoreLabel3') }}</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <canvas id="myChart"></canvas>
            <script>
                const labels = [
                    @foreach($listaAttaccanti as $attaccante)
                    '{{ $attaccante->cognome }}',
                    @endforeach
                ];

                gol = [
                    @foreach($listaAttaccanti as $attaccante)
                    {{ $attaccante->gol }},
                    @endforeach
                ];

                const data = {
                    labels: labels,
                    datasets: [{
                        label: 'GOALS',
                        backgroundColor: 'rgb(255,127,80)',
                        data: gol,
                    }]
                };

                const config = {
                    type: 'bar',
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
    </br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">{{ trans('labels.centrocampistiLabelM') }}</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='10%'>
                <col width='10%'>
                <col width='20%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <thead>
                    <tr>
                        <th>{{ trans('labels.nomeLabel') }}</th>
                        <th>{{ trans('labels.cognomeLabel') }}</th>
                        <th>{{ trans('labels.squadraLabel') }}</th>
                        <th>{{ trans('labels.etàLabel') }}</th>
                        <th>{{ trans('labels.partiteLabel') }}</th>
                        <th>{{ trans('labels.golLabel') }}</th>
                        <th>{{ trans('labels.assistLabel') }}</th>
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
                        <td> <a class="btn btn-primary" href="{{ route('studyPlayer', ['id' => $centrocampista->id]) }}">..see more..</a> </td>
                        <td> <a class="btn btn-danger" href="{{ route('goToDeletePlayerPage', ['id' => $centrocampista->id]) }}">{{ trans('labels.eliminaLabel') }}</a></td>
                        <td> <a class="btn btn-info" href="{{ route('editPlayerForm', ['id' => $centrocampista->id]) }}">{{ trans('labels.modificaGiocatoreLabel3') }}</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <canvas id="myChart1"></canvas>
            <script>
                const labels1 = [
                    @foreach($listaCentrocampisti as $centrocampista)
                    '{{ $centrocampista->cognome }}',
                    @endforeach
                ];

                assist = [
                    @foreach($listaCentrocampisti as $centrocampista)
                    {{ $centrocampista->assist }},
                    @endforeach
                ];

                const data1 = {
                    labels: labels1,
                    datasets: [{
                        label: 'ASSIST',
                        backgroundColor: 'rgb(255,127,80)',
                        data: assist,
                    }]
                };

                const config1 = {
                    type: 'bar',
                    data: data1,
                    options: {}
                };
            </script>
            <script>
                const myChart1 = new Chart(
                document.getElementById('myChart1'),
                config1
             );
            </script>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1" style="font-size:1.5em">{{ trans('labels.difensoriLabelM') }}</h1>
            <table class="table table-striped table-hover table-responsive" style="width:100%">
                <col width='10%'>
                <col width='10%'>
                <col width='20%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <thead>
                    <tr>
                        <th>{{ trans('labels.nomeLabel') }}</th>
                        <th>{{ trans('labels.cognomeLabel') }}</th>
                        <th>{{ trans('labels.squadraLabel') }}</th>
                        <th>{{ trans('labels.etàLabel') }}</th>
                        <th>{{ trans('labels.partiteLabel') }}</th>
                        <th>{{ trans('labels.cleansheetLabel') }}</th>
                        <th>{{ trans('labels.contrastiLabel') }}</th>
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
                        <td> <a class="btn btn-primary" href="{{ route('studyPlayer', ['id' => $difensore->id]) }}">..see more..</a> </td>
                        <td> <a class="btn btn-danger" href="{{ route('goToDeletePlayerPage', ['id' => $difensore->id]) }}">{{ trans('labels.eliminaLabel') }}</a></td>
                        <td> <a class="btn btn-info" href="{{ route('editPlayerForm', ['id' => $difensore->id]) }}">{{ trans('labels.modificaGiocatoreLabel3') }}</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-12">
            <canvas id="myChart2"></canvas>
            <script>
                const labels2 = [
                    @foreach($listaDifensori as $difensore)
                    '{{ $difensore->cognome }}',
                    @endforeach
                ];

                cl = [
                    @foreach($listaDifensori as $difensore)
                    {{ $difensore->clean_sheet }},
                    @endforeach
                ];

                const data2 = {
                    labels: labels2,
                    datasets: [{
                        label: 'CLEAN SHEETS',
                        backgroundColor: 'rgb(255,127,80)',
                        data: cl,
                    }]
                };

                const config2 = {
                    type: 'bar',
                    data: data2,
                    options: {}
                };
            </script>
            <script>
                const myChart2 = new Chart(
                document.getElementById('myChart2'),
                config2
             );
            </script>
        </div>
    </div>
    </br>

</div>
@endsection
@extends('layouts.master')
@section('contenuto_pagina')



<div class="container">
    <div class="row">
        <h1 class="h1">TOP 10 @yield('titolo_top_10') </h1>
    </div>
    <div class="row">
        <p class="paragraph_home">@yield('presentazione_sezione')</p>
    </div>
    <div class="row blocco_evidenza">
        <blockquote class="blockquote">
            <p class="lead">@yield('citazione')</p>
            <footer class="blockquote-footer">Thierry Henry</footer>
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
                        <th>Caratteristica</th>
                        <th>Rank</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Cristiano</td>
                        <td>Ronaldo</td>  
                        <td>Manchester United</td>  
                        <td>30</td>  
                        <td>1</td>  
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
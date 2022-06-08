@extends('layouts.master')
@section('contenuto_pagina')
<div class="container">
        <div class="row text-center" style="margin-top: 4em">
            <div class="col-md-12 ">
                <div class="tab-content">
                    <div class="row-fluid text-center" style="margin-top: 1em">
                        <a href="{{ route('goHome') }}">
                        <img src="{{ url('/') }}/imgLoghi.jpeg" class="img-fluid">
                        </a> 
                    </div>
                    <div class="row-fluid text-center" style="margin-top: 1em">
                        <h1 class=" text-center">@yield('titolo_sezione')</h1>
                    </div>
                        @yield('action_bottone')
                        @csrf
                        @yield('campi_form')
                        <div class="form-group">
                            <div class="row">
                                @yield('bottone_submit')
                            </div>
                            <div class="row">
                            <div class="col-sm-12 col-sm-offset-3">
                                <button name="annulla-submit" class="form-control btn btn-primary btn-annullamento" style="margin-top: 1em">ANNULLA</button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
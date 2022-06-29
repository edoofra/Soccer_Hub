@extends('layouts/top10_layout')
@section('titolo_top_10')
{{ trans('labels.difensoriLabelM') }}
@endsection
@section('presentazione_sezione')
{{ trans('labels.top10LabelD') }}
@endsection
@section('citazione',"In my teams, the goalie is the first attacker, and the striker the first defender.")
@section('citazione_autore','Johan Cruijff')
@section('caratteristica','Contrasti')
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Difensori</li>
@endsection
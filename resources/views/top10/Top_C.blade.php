@extends('layouts/top10_layout')
@section('titolo_top_10')
{{ trans('labels.centrocampistiLabelM') }}
@endsection
@section('presentazione_sezione')
{{ trans('labels.top10LabelC') }}
@endsection
@section('citazione',"The midfield is the hearthbeat of a football team, it's the centre of the action, so you can't just do one thing.")
@section('citazione_autore','Casemiro')
@section('caratteristica','Assist')
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Centrocampisti</li>
@endsection
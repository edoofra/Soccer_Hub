@extends('layouts/top10_layout')
@section('titolo_top_10')
{{ trans('labels.attaccantiLabelM') }}
@endsection
@section('presentazione_sezione')
{{ trans('labels.top10LabelA') }}
@endsection
@section('citazione','People always see the goals, and for me, strikers are not only about scoring goals.')
@section('citazione_autore','Thierry Henry')
@section('caratteristica','Goal')
@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">{{ trans('labels.attaccantiLabel') }}</li>
@endsection
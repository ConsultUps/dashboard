@extends('template')

@section('title', 'Estadísticas de Dolibarr')
@section('heading', 'Estadísticas de Dolibarr')

@section('content')
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiOGFjNTkwYmMtY2U2MC00OTcxLTg4NzQtMGI2MGJhMTVlOTlmIiwidCI6IjdjOWM3MWQ3LTAwZjktNDc2ZC04ZDA1LWY1MWFiZDRlYzIyYSIsImMiOjh9" allowfullscreen></iframe>
    </div>
@endsection
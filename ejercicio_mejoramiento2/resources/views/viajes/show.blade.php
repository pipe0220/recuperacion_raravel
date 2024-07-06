@extends('layouts.app')

@section('content')
    <h1>Detalles del Viaje</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $viaje->id }}</h5>
            <p class="card-text"><strong>Número de Plazas:</strong> {{ $viaje->num_plazas }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $viaje->fecha }}</p>
            <p class="card-text"><strong>Viajero:</strong> {{ $viaje->viajero->nombre }}</p>
            <p class="card-text"><strong>Origen:</strong> {{ $viaje->origen->nombre }}</p>
            <p class="card-text"><strong>Destino:</strong> {{ $viaje->destino->nombre }}</p>
            <p class="card-text"><strong>Otros Datos:</strong> {{ $viaje->otros_datos }}</p>
            <a href="{{ route('viajes.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
@endsection

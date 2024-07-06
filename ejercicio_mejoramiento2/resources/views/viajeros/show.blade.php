@extends('layouts.app')

@section('content')
    <h1>Detalles del Viajero</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $viajero->nombre }}</h5>
            <p class="card-text"><strong>id:</strong> {{ $viajero->id }}</p>
            <p class="card-text"><strong>Dirección:</strong> {{ $viajero->direccion }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $viajero->telefono }}</p>
            <a href="{{ route('viajeros.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
@endsection

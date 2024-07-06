@extends('layouts.app')

@section('content')
    <h1>Crear Viaje</h1>
    <form action="{{ route('viajes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="number" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="num_plazas">Número de Plazas:</label>
            <input type="number" class="form-control" id="num_plazas" name="num_plazas" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="otros_datos">Otros Datos:</label>
            <textarea class="form-control" id="otros_datos" name="otros_datos"></textarea>
        </div>
        <div class="form-group">
            <label for="viajero_id">Viajero:</label>
            <select class="form-control" id="viajero_id" name="viajero_id" required>
                @foreach($viajeros as $viajero)
                    <option value="{{ $viajero->id }}">{{ $viajero->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="origen_id">Origen:</label>
            <select class="form-control" id="origen_id" name="origen_id" required>
                @foreach($origenes as $origen)
                    <option value="{{ $origen->id }}">{{ $origen->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="destino_id">Destino:</label>
            <select class="form-control" id="destino_id" name="destino_id" required>
                @foreach($destinos as $destino)
                    <option value="{{ $destino->id }}">{{ $destino->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection

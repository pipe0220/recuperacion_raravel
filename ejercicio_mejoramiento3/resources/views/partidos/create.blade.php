@extends('layouts.app')

@section('content')
    <h1>Crear Partido</h1>
    <form action="{{ route('partidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="goles_fuera">Goles Fuera:</label>
            <input type="number" name="goles_fuera" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="goles_casa">Goles Casa:</label>
            <input type="number" name="goles_casa" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection

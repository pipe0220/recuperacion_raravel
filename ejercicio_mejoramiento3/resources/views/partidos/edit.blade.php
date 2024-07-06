@extends('layouts.app')

@section('content')
    <h1>Editar Partido</h1>
    <form action="{{ route('partidos.update', $partido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="goles_fuera">Goles Fuera:</label>
            <input type="number" name="goles_fuera" class="form-control" value="{{ $partido->goles_fuera }}" required>
        </div>
        <div class="form-group">
            <label for="goles_casa">Goles Casa:</label>
            <input type="number" name="goles_casa" class="form-control" value="{{ $partido->goles_casa }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ $partido->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection

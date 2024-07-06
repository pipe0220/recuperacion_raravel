@extends('layouts.app')

@section('content')
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" required>
        </div>
        <div>
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        </div>
        <div>
            <label for="fecha_fin">Fecha Fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin">
        </div>
        <div>
            <label for="cuantia">Cuantía:</label>
            <input type="number" step="0.01" name="cuantia" id="cuantia" required>
        </div>
        <div>
            <label for="cliente_id">Cliente:</label>
            <input type="number" name="cliente_id" id="cliente_id" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection

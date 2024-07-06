@extends('layouts.app')

@section('content')
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}" required>
        </div>
        <div>
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $proyecto->fecha_inicio }}" required>
        </div>
        <div>
            <label for="fecha_fin">Fecha Fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $proyecto->fecha_fin }}">
        </div>
        <div>
            <label for="cuantia">Cuantía:</label>
            <input type="number" step="0.01" name="cuantia" id="cuantia" value="{{ $proyecto->cuantia }}" required>
        </div>
        <div>
            <label for="cliente_id">Cliente:</label>
            <input type="number" name="cliente_id" id="cliente_id" value="{{ $proyecto->cliente_id }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection

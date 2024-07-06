@extends('layouts.app')

@section('content')
    <h1>Detalle del Proyecto</h1>
    <p>Descripción: {{ $proyecto->descripcion }}</p>
    <p>Fecha Inicio: {{ $proyecto->fecha_inicio }}</p>
    <p>Fecha Fin: {{ $proyecto->fecha_fin }}</p>
    <p>Cuantía: {{ $proyecto->cuantia }}</p>
    <p>Cliente: {{ $proyecto->cliente_id }}</p>
    <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection

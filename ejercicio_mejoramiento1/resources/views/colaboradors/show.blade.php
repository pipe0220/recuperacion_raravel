@extends('layouts.app')

@section('content')
    <h1>Detalle del Colaborador</h1>
    <p>Nombre: {{ $colaborador->nombre }}</p>
    <p>Domicilio: {{ $colaborador->domicilio }}</p>
    <p>Banco: {{ $colaborador->banco }}</p>
    <p>Número de Cuenta: {{ $colaborador->numero_cuenta }}</p>
    <p>Teléfono: {{ $colaborador->telefono }}</p>
    <a href="{{ route('colaboradors.edit', $colaborador->id) }}">Editar</a>
    <form action="{{ route('colaboradors.destroy', $colaborador->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection

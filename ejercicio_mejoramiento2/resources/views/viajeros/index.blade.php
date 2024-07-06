@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Viajeros</h1>

    <div class="mb-3">
        <a href="{{ route('viajeros.create') }}" class="btn btn-primary">Crear Viajero</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="list-group">
        @forelse($viajeros as $viajero)
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $viajero->nombre }}</h5>
                    <small>ID: {{ $viajero->id }}</small>
                </div>
                <p class="mb-1">Dirección: {{ $viajero->direccion }}</p>
                <p class="mb-1">Teléfono: {{ $viajero->telefono }}</p>
                <div class="mt-2">
                    <a href="{{ route('viajeros.show', $viajero->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('viajeros.edit', $viajero->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('viajeros.destroy', $viajero->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este viajero?')">Eliminar</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="list-group-item">
                No hay viajeros registrados.
            </div>
        @endforelse
    </div>
</div>
@endsection

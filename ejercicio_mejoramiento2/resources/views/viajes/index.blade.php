@extends('layouts.app')

@section('content')
    <h1>Listado de Viajes</h1>

    <a href="{{ route('viajes.create') }}" class="btn btn-primary mb-3">Crear Nuevo Viaje</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número de Plazas</th>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viajes as $viaje)
                <tr>
                    <td>{{ $viaje->id }}</td>
                    <td>{{ $viaje->num_plazas }}</td>
                    <td>{{ $viaje->fecha }}</td>
                    <td>{{ $viaje->origen->nombre }}</td>
                    <td>{{ $viaje->destino->nombre }}</td>
                    <td>
                        <a href="{{ route('viajes.show', $viaje->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('viajes.edit', $viaje->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar este viaje?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

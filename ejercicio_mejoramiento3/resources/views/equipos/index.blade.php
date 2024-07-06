@extends('layouts.app')

@section('content')
    <h1>Lista de Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear Equipo</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estadio</th>
            <th>Aforo</th>
            <th>Año</th>
            <th>Ciudad</th>
            <th>Presidente</th>
            <th>Acciones</th>
        </tr>
        @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->estadio }}</td>
                <td>{{ $equipo->aforo }}</td>
                <td>{{ $equipo->año }}</td>
                <td>{{ $equipo->ciudad }}</td>
                <td>{{ $equipo->presidente->nombre }}</td>
                <td>
                    <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">Mostrar</a>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

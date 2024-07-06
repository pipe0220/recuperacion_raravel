@extends('layouts.app')

@section('content')
    <h1>Lista de Partidos</h1>
    <a href="{{ route('partidos.create') }}" class="btn btn-primary">Crear Partido</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Goles Fuera</th>
            <th>Goles Casa</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        @foreach ($partidos as $partido)
            <tr>
                <td>{{ $partido->id }}</td>
                <td>{{ $partido->goles_fuera }}</td>
                <td>{{ $partido->goles_casa }}</td>
                <td>{{ $partido->fecha }}</td>
                <td>
                    <a href="{{ route('partidos.show', $partido->id) }}" class="btn btn-info">Mostrar</a>
                    <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('partidos.destroy', $partido->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

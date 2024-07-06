@extends('layouts.app')

@section('content')
    <h1>Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Crear Proyecto</a>
    <ul>
        @foreach($proyectos as $proyecto)
            <li>
                <a href="{{ route('proyectos.show', $proyecto->id) }}">{{ $proyecto->descripcion }}</a>
                <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

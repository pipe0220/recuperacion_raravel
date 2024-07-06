@extends('layouts.app')

@section('content')
    <h1>Colaboradores</h1>
    <a href="{{ route('colaboradors.create') }}">Crear Colaborador</a>
    <ul>
        @foreach($colaboradors as $colaborador)
            <li>
                <a href="{{ route('colaboradors.show', $colaborador->id) }}">{{ $colaborador->nombre }}</a>
                <a href="{{ route('colaboradors.edit', $colaborador->id) }}">Editar</a>
                <form action="{{ route('colaboradors.destroy', $colaborador->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

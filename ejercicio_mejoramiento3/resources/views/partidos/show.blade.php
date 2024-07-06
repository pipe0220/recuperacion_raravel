@extends('layouts.app')

@section('content')
    <h1>Detalle del Partido</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $partido->id }}</td>
        </tr>
        <tr>
            <th>Goles Fuera</th>
            <td>{{ $partido->goles_fuera }}</td>
        </tr>
        <tr>
            <th>Goles Casa</th>
            <td>{{ $partido->goles_casa }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{ $partido->fecha }}</td>
        </tr>
    </table>
    <a href="{{ route('partidos.index') }}" class="btn btn-primary">Volver</a>
@endsection

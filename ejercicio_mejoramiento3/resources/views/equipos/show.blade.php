@extends('layouts.app')

@section('content')
    <h1>Detalle del Equipo</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $equipo->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $equipo->nombre }}</td>
        </tr>
        <tr>
            <th>Estadio</th>
            <td>{{ $equipo->estadio }}</td>
        </tr>
        <tr>
            <th>Aforo</th>
            <td>{{ $equipo->aforo }}</td>
        </tr>
        <tr>
            <th>Año</th>
            <td>{{ $equipo->año }}</td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td>{{ $equipo->ciudad }}</td>
        </tr>
        <tr>
            <th>Presidente</th>
            <td>{{ $equipo->presidente->nombre }}</td>
        </tr>
    </table>
    <a href="{{ route('equipos.index') }}" class="btn btn-primary">Volver</a>
@endsection

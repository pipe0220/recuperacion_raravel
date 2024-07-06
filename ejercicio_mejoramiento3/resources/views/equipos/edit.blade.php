@extends('layouts.app')

@section('content')
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $equipo->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="estadio">Estadio:</label>
            <input type="text" name="estadio" class="form-control" value="{{ $equipo->estadio }}" required>
        </div>
        <div class="form-group">
            <label for="aforo">Aforo:</label>
            <input type="number" name="aforo" class="form-control" value="{{ $equipo->aforo }}" required>
        </div>
        <div class="form-group">
            <label for="año">Año:</label>
            <input type="number" name="año" class="form-control" value="{{ $equipo->año }}" required>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" value="{{ $equipo->ciudad }}" required>
        </div>
        <div class="form-group">
            <label for="presidente_id">Presidente:</label>
            <select name="presidente_id" class="form-control" required>
                @foreach ($presidentes as $presidente)
                    <option value="{{ $presidente->id }}" {{ $equipo->presidente_id == $presidente->id ? 'selected' : '' }}>
                        {{ $presidente->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection

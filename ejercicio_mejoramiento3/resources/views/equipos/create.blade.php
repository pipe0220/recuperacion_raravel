@extends('layouts.app')

@section('content')
    <h1>Crear Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estadio">Estadio:</label>
            <input type="text" name="estadio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="aforo">Aforo:</label>
            <input type="number" name="aforo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="año">Año:</label>
            <input type="number" name="año" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="presidente_id">Presidente:</label>
            <select name="presidente_id" class="form-control" required>
                @foreach ($presidentes as $presidente)
                    <option value="{{ $presidente->id }}">{{ $presidente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection

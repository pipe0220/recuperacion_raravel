@extends('layouts.app')

@section('content')
    <h1>Crear Colaborador</h1>
    <form action="{{ route('colaboradors.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="domicilio">Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio" required>
        </div>
        <div>
            <label for="banco">Banco:</label>
            <input type="text" name="banco" id="banco" required>
        </div>
        <div>
            <label for="numero_cuenta">Número de Cuenta:</label>
            <input type="text" name="numero_cuenta" id="numero_cuenta" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection

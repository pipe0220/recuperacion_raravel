@extends('layouts.app')

@section('content')
    <h1>Editar Colaborador</h1>
    <form action="{{ route('colaboradors.update', $colaborador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $colaborador->nombre }}" required>
        </div>
        <div>
            <label for="domicilio">Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio" value="{{ $colaborador->domicilio }}" required>
        </div>
        <div>
            <label for="banco">Banco:</label>
            <input type="text" name="banco" id="banco" value="{{ $colaborador->banco }}" required>
        </div>
        <div>
            <label for="numero_cuenta">Número de Cuenta:</label>
            <input type="text" name="numero_cuenta" id="numero_cuenta" value="{{ $colaborador->numero_cuenta }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="{{ $colaborador->telefono }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection

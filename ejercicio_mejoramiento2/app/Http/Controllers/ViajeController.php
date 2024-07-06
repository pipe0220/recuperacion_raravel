<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Origen;
use App\Models\Viaje;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        $viajeros = Viajero::all();
        $origenes = Origen::all();
        $destinos = Destino::all();

        return view('viajes.create', compact('viajeros', 'origenes', 'destinos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|unique:viajes|max:255',
            'num_plazas' => 'required',
            'fecha' => 'required',
            'otros_datos' => 'nullable',
            'viajero_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
        ]);

        Viaje::create($validated);

        return redirect()->route('viajes.index')->with('success', 'Viaje creado exitosamente');
    }

    public function show($id)
    {
        $viaje = Viaje::findOrFail($id);
        return view('viajes.show', compact('viaje'));
    }

    public function edit(Viaje $viaje)
    {
        $viajeros = Viajero::all();
        $origenes = Origen::all();
        $destinos = Destino::all();

        return view('viajes.edit', compact('viaje', 'viajeros', 'origenes', 'destinos'));
    }

    public function update(Request $request, Viaje $viaje)
    {
        $validated = $request->validate([
            'id' => 'required|max:255|unique:viajes,id,'.$viaje->id,
            'num_plazas' => 'required',
            'fecha' => 'required',
            'otros_datos' => 'nullable',
            'viajero_id' => 'required',
            'origen_id' => 'required',
            'destino_id' => 'required',
        ]);

        $viaje->update($validated);

        return redirect()->route('viajes.index')->with('success', 'Viaje actualizado exitosamente');
    }

    public function destroy(Viaje $viaje)
    {
        $viaje->delete();

        return redirect()->route('viajes.index')->with('success', 'Viaje eliminado exitosamente');
    }
}

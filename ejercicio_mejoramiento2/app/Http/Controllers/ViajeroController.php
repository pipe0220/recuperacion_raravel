<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function index()
    {
        $viajeros = Viajero::all();
        return view('viajeros.index', compact('viajeros'));
    }

    public function create()
    {
        return view('viajeros.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|unique:viajeros|max:255',
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        Viajero::create($validated);

        return redirect()->route('viajeros.index')->with('success', 'Viajero creado exitosamente');
    }

    public function show($id)
    {
        $viajero = Viajero::findOrFail($id);
        return view('viajeros.show', compact('viajero'));
    }

    public function edit(Viajero $viajero)
    {
        return view('viajeros.edit', compact('viajero'));
    }

    public function update(Request $request, Viajero $viajero)
    {
        $validated = $request->validate([
            'id' => 'required|max:255|unique:viajeros,id,'.$viajero->id,
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $viajero->update($validated);

        return redirect()->route('viajeros.index')->with('success', 'Viajero actualizado exitosamente');
    }

    public function destroy(Viajero $viajero)
    {
        $viajero->delete();

        return redirect()->route('viajeros.index')->with('success', 'Viajero eliminado exitosamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Presidente;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        $presidentes = Presidente::all();
        return view('equipos.create', compact('presidentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'estadio' => 'required',
            'aforo' => 'required|integer',
            'año' => 'required|integer',
            'ciudad' => 'required',
            'presidente_id' => 'required|exists:presidentes,id',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo creado exitosamente.');
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        $presidentes = Presidente::all();
        return view('equipos.edit', compact('equipo', 'presidentes'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required',
            'estadio' => 'required',
            'aforo' => 'required|integer',
            'año' => 'required|integer',
            'ciudad' => 'required',
            'presidente_id' => 'required|exists:presidentes,id',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }
}

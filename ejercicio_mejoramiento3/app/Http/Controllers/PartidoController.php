<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index()
    {
        $partidos = Partido::all();
        return view('partidos.index', compact('partidos'));
    }

    public function create()
    {
        return view('partidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'goles_fuera' => 'required|integer',
            'goles_casa' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        Partido::create($request->all());

        return redirect()->route('partidos.index')
                        ->with('success', 'Partido creado exitosamente.');
    }

    public function show(Partido $partido)
    {
        return view('partidos.show', compact('partido'));
    }

    public function edit(Partido $partido)
    {
        return view('partidos.edit', compact('partido'));
    }

    public function update(Request $request, Partido $partido)
    {
        $request->validate([
            'goles_fuera' => 'required|integer',
            'goles_casa' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        $partido->update($request->all());

        return redirect()->route('partidos.index')->with('success', 'Partido actualizado exitosamente.');
    }

    public function destroy(Partido $partido)
    {
        $partido->delete();

        return redirect()->route('partidos.index')->with('success', 'Partido eliminado exitosamente.');
    }
}

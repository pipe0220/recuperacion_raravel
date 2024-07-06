<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradors = Colaborador::all();
        return view('colaboradors.index', compact('colaboradors'));
    }

    public function create()
    {
        return view('colaboradors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'domicilio' => 'required',
            'banco' => 'required',
            'numero_cuenta' => 'required',
            'telefono' => 'required',
        ]);

        Colaborador::create($request->all());
        return redirect()->route('colaboradors.index')->with('success', 'Colaborador creado correctamente');
    }

    public function show(Colaborador $colaborador)
    {
        return view('colaboradors.show', compact('colaborador'));
    }

    public function edit(Colaborador $colaborador)
    {
        return view('colaboradors.edit', compact('colaborador'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        $request->validate([
            'nombre' => 'required',
            'domicilio' => 'required',
            'banco' => 'required',
            'numero_cuenta' => 'required',
            'telefono' => 'required',
        ]);

        $colaborador->update($request->all());
        return redirect()->route('colaboradors.index')->with('success', 'Colaborador actualizado correctamente');
    }

    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaboradors.index')->with('success', 'Colaborador eliminado correctamente');
    }
}

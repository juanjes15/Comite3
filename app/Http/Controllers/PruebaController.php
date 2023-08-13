<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba; 
use App\Models\SolicitudComite;


class PruebaController extends Controller
{
    public function index()
    {
        $pruebas = Prueba::with('solicitudComite')->get();

        return view('pruebas.index', compact('pruebas'));
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación
        return view('pruebas.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'pru_tipo' => 'required',
            'pru_descripcion' => 'required',
            'pru_fecha' => 'required|date',
            'pru_url' => 'required|url',
            'sol_id' => 'required|exists:solicitud_comite,id',
        ]);

        Prueba::create([
            'pru_tipo' => $request->pru_tipo,
            'pru_descripcion' => $request->pru_descripcion,
            'pru_fecha' => $request->pru_fecha,
            'pru_url' => $request->pru_url,
            'sol_id' => $request->sol_id,
        ]);

        return redirect()->route('pruebas.index')->with('success', 'Prueba creada correctamente.');
    }

    public function show($id)
    {
        $prueba = Prueba::findOrFail($id);

        return view('pruebas.show', compact('prueba'));
    }

    public function edit($id)
    {
        $prueba = Prueba::findOrFail($id);

        return view('pruebas.edit', compact('prueba'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pru_tipo' => 'required',
            'pru_descripcion' => 'required',
            'pru_fecha' => 'required|date',
            'pru_url' => 'required|url',
            'sol_id' => 'required|exists:solicitud_comite,id',
        ]);

        $prueba = Prueba::findOrFail($id);

        $prueba->update([
            'pru_tipo' => $request->pru_tipo,
            'pru_descripcion' => $request->pru_descripcion,
            'pru_fecha' => $request->pru_fecha,
            'pru_url' => $request->pru_url,
            'sol_id' => $request->sol_id,
        ]);

        return redirect()->route('pruebas.index')->with('success', 'Prueba actualizada correctamente.');
    }

    public function destroy($id)
    {
        $prueba = Prueba::findOrFail($id);
        $prueba->delete();

        return redirect()->route('pruebas.index')->with('success', 'Prueba eliminada correctamente.');
    }
}

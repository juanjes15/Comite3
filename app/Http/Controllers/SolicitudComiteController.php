<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudComite;

class SolicitudComiteController extends Controller
{
    public function index()
    {
        $solicitudes = SolicitudComite::all();

        return view('solicitud_comites.index', compact('solicitudes'));
    }

    public function create()
    {
        return view('solicitud_comites.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'sol_fecha' => 'required|date',
            'sol_lugar' => 'required|string',
            'sol_asunto' => 'required|string',
            'sol_motivo' => 'required|string',
            'sol_estado' => 'required|string',
            'ins_id' => 'required|exists:instructors,id',
        ]);

        // Crear la nueva solicitud
        SolicitudComite::create($request->all());

        return redirect()->route('solicitud_comites.index')->with('success', 'Solicitud creada correctamente.');
    }

    public function show($id)
    {
        $solicitud = SolicitudComite::findOrFail($id);

        return view('solicitud_comites.show', compact('solicitud'));
    }

    public function edit($id)
    {
        $solicitud = SolicitudComite::findOrFail($id);

        return view('solicitud_comites.edit', compact('solicitud'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'sol_fecha' => 'required|date',
            'sol_lugar' => 'required|string',
            'sol_asunto' => 'required|string',
            'sol_motivo' => 'required|string',
            'sol_estado' => 'required|string',
            'ins_id' => 'required|exists:instructors,id',
        ]);

        // Actualizar la solicitud
        $solicitud = SolicitudComite::findOrFail($id);
        $solicitud->update($request->all());

        return redirect()->route('solicitud_comites.index')->with('success', 'Solicitud actualizada correctamente.');
    }

    public function destroy($id)
    {
        $solicitud = SolicitudComite::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('solicitud_comites.index')->with('success', 'Solicitud eliminada correctamente.');
    }
}

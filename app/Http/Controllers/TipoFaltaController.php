<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReglamentoRequest;
use App\Http\Requests\StoreTipoFaltaRequest;
use App\Http\Requests\UpdateReglamentoRequest;
use App\Http\Requests\UpdateTipoFaltaRequest;
use App\Models\tipoFalta;

class TipoFaltaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipofaltas = tipoFalta::all();
        return view('tipofaltas.index', compact('tipofaltas'));
    }


     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('administrar tipo faltas');

        return view('tipofaltas.create');
    }


     /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoFaltaRequest $request)
    {
        $this->authorize('administrar tipo faltas');

        tipoFalta::create($request->validated());
        return redirect()->route('tipofaltas.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(tipoFalta $tipoFalta)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipoFalta $tipoFalta)
    {
        $this->authorize('administrar tipo falta');

        return view('tipofaltas.edit', compact('tipofaltas'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoFaltaRequest $request, tipoFalta $tipoFalta)
    {
        $this->authorize('administrar tipo falta');

        $tipoFalta->update($request->validated());
        return redirect()->route('tipofaltas.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tipoFalta $tipoFalta)
    {
        $this->authorize('administrar tipo falta');

        $tipoFalta->delete();
        return redirect()->route('tipofaltas.index');
    }

}

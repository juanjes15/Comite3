<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAprendizRequest;
use App\Http\Requests\UpdateAprendizRequest;
use App\Models\Aprendiz;
use App\Models\Ficha;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendizs = Aprendiz::all();
        $fichas = Ficha::all();
        return view('aprendizs.index', compact('aprendizs', 'programas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('administrar fichas');

        $programas = Programa::all();
        return view('fichas.create', compact('programas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFichaRequest $request)
    {
        $this->authorize('administrar fichas');

        Ficha::create($request->validated());
        return redirect()->route('fichas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ficha $ficha)
    {
        $this->authorize('administrar fichas');

        $programas = Programa::all();
        return view('fichas.edit', compact('ficha', 'programas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFichaRequest $request, Ficha $ficha)
    {
        $this->authorize('administrar fichas');

        $ficha->update($request->validated());
        return redirect()->route('fichas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ficha $ficha)
    {
        $this->authorize('administrar fichas');

        $ficha->delete();
        return redirect()->route('fichas.index');
    }
}

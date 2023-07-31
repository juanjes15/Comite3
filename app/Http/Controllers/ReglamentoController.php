<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReglamentoRequest;
use App\Http\Requests\UpdateReglamentoRequest;
use App\Models\Reglamento;

class ReglamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reglamentos = Reglamento::all();
        return view('reglamentos.index', compact('reglamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('administrar reglamentos');

        return view('reglamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReglamentoRequest $request)
    {
        $this->authorize('administrar reglamentos');

        Reglamento::create($request->validated());
        return redirect()->route('reglamentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reglamento $reglamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reglamento $reglamento)
    {
        $this->authorize('administrar reglamentos');

        return view('reglamentos.edit', compact('reglamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReglamentoRequest $request, Reglamento $reglamento)
    {
        $this->authorize('administrar reglamentos');

        $reglamento->update($request->validated());
        return redirect()->route('reglamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reglamento $reglamento)
    {
        $this->authorize('administrar reglamentos');

        $reglamento->delete();
        return redirect()->route('reglamentos.index');
    }
}
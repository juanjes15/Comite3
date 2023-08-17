<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComiteRequest;
use App\Http\Requests\UpdateComiteRequest;
use App\Models\Comite;
use App\Models\Instructor;
use Illuminate\Http\Request;


class ComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda= $request->busqueda;
        $comites = Comite::where('com_recomendacion','LIKE','%'.$busqueda.'%')
        ->paginate(2);
        $instructors = Instructor::all();
        return view('comites.index', compact('comites', 'instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('administrar comites');

        $instructors = Instructor::all();
        return view('comites.create', compact('instructors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComiteRequest $request)
    {
        $this->authorize('administrar comites');

        Comite::create($request->validated());
        return redirect()->route('comites.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comite $comite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comite $comite)
    {
        $this->authorize('administrar comites');

        $instructors = Instructor::all();
        return view('comites.edit', compact('comite', 'instructors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComiteRequest $request, Comite $comite)
    {
        $this->authorize('administrar comites');

        $comite->update($request->validated());
        return redirect()->route('comites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comite $comite)
    {
        $this->authorize('administrar comites');

        $comite->delete();
        return redirect()->route('comites.index');
    }
}
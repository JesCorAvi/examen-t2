<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use App\Models\Elemplo;

class ElemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("elemplos.index", ["elemplos"=>Elemplo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("elemplos.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:150|min:1',
        ]);
        Elemplo::create([
            "nombre" => $request->nombre
        ]);
        return redirect()->route("elemplos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Elemplo $elemplo)
    {
        return view("elemplos.show", ["elemplo"=>$elemplo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elemplo $elemplo)
    {
        return view("elemplos.edit", ["elemplo"=>$elemplo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Elemplo $elemplo)
    {
        $elemplo->update([
            "nombre" => $request->nombre
        ]);
        return redirect()->route("elemplos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elemplo $elemplo)
    {
        $elemplo->delete();
        return redirect()->route("elemplos.index");
    }
}

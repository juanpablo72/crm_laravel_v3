<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientes\validacionClientes;
use App\Http\Requests\propiedades\validacionPropiedades;
use App\Models\propiedades;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return propiedades::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //Registrar Propiedad
    public function store(validacionPropiedades $request)
    {
        $validated = $request->validated();
        propiedades::create($validated);

        return redirect()->route('propiedades.index')->with('success', 'Propiedad creada correctamente');
    }

    //Ver propiedad por ID
    public function show($propiedades)
    {
        try {

            return propiedades::findOrFail($propiedades);
        } catch (ModelNotFoundException $e) {

            return response()->json(['error' => 'propiedad no existe'], 404);
        }
    }


    public function edit(propiedades $propiedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, propiedades $propiedades)
    {
        //
    }


    //Anular una propiedad
    public function destroy($propiedades)
    {
        $agente = propiedades::findOrFail($propiedades);
        $agente->estado_operacion = 'anular';
        $agente->save();
        return response()->json(['message' => 'Propiedad anulada'], 200);
    }
}

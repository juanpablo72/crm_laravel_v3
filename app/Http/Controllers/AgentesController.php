<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgentesRequest;
use App\Models\agentes;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AgentesController extends Controller
{
    //ver todos los agentes activos
    public function index()
    {
        return agentes::where('estado', 'activo')->get();
    }



    public function create()
    {
        //
    }

    //Registrar
    public function store(StoreAgentesRequest $request)
    {
        //validaciones estan Request/StoreAgentesRequest.php
        //todo agente nuevo ingreso entra en estado revision

        $producto = agentes::create($request->validated());
        return response()->json($producto, 201);
    }


    //Buscar Agente por cedula
    public function show($cedula)
    {
        try {
            // Intenta encontrar el agente por cédula
            return agentes::where('cedula', $cedula)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            // Si no se encuentra el agente, retorna un mensaje personalizado
            return response()->json(['error' => 'Agente no existe'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(agentes $agentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */



    public function update(StoreAgentesRequest $request, agentes $agentes)
    {
        try {

            $validatedData = $request->validated();
            $agentes->update($validatedData);
            if ($request->hasFile('foto_perfil')) {
                $path = $request->file('foto_perfil')->store('public/fotos_perfil');
                $agentes->foto_perfil = $path;
                $agentes->save();
            }
            if ($request->hasFile('img_cumpleaños')) {
                $birthdayImagePath = $request->file('img_cumpleaños')->store('public/birthday_images');
                $agentes->img_cumpleaños = $birthdayImagePath;
                $agentes->save();
            }

            return redirect()->route('agentes.index')->with('success', 'Agente actualizado correctamente');
        } catch (\Exception $e) {
            return
                response()->json(['error' => 'Error al Editar'], 404);
        }
    }


    //$id que se usa es el de la tabla agentes para borrar el agente
    //NOTA NO SE BORRA SOLO SE INACTIVAN LOS DATOS
    public function destroy(agentes $id)
    {
        $agente = agentes::findOrFail($id);
        $agente->estado = 'inactivo';
        $agente->save();
        return response()->json(['message' => 'Agente  inactivo'], 200);
    }
}

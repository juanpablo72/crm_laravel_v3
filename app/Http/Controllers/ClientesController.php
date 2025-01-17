<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientes\validacionClientes;
use App\Models\clientes;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ClientesController extends Controller
{
    //traer todos los clientes
    public function index()
    {
        return clientes::all();
    }

    //Crear cliente
    public function store(validacionClientes $request)
    {

        $data = clientes::create($request->validated());
        return response()->json($data, 201);
    }

    //busca cliente por columna id de la tabla de clientes 
    public function show($clientes_id)
    {
        try {

            return clientes::findOrFail($clientes_id);
        } catch (ModelNotFoundException $e) {

            return response()->json(['error' => 'cliente  no existe'], 404);
        }
    }

    //buscador de clientes  por nombre ,apellido ,cedula etc

    public function buscar(Request $request)
    {
        if (!$request->filled('buscar')) {
            return response()->json(['error' => 'El campo de búsqueda es obligatorio.'], 400);
        }

        $clientes = clientes::buscar($request->input('buscar'));

        if ($clientes->isEmpty()) {
            return response()->json(['message' => 'No se encontraron resultados.'], 404);
        }

        return response()->json($clientes);
    }
}

<?php

namespace App\Http\Requests\clientes;

use Illuminate\Foundation\Http\FormRequest;

class validacionClientes extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|integer|unique:agentes,cedula',
            'email' => 'required|email|max:255|unique:agentes,email',
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|in:masculino,femenino,otro',


        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            //
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|integer|unique:agentes,cedula',
            'email' => 'required|email|max:255|unique:agentes,email',
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'edad' => 'required|integer|min:0',
            'sexo' => 'required|in:masculino,femenino,otro',
            'direccion_residencia' => 'required|string|max:255',
            'id_asociado' => 'required|integer|exists:agentes,id',
            'fecha_contrato' => 'required|date',
            'fecha_vencimiento_contrato' => 'required|date|after:fecha_contrato'
        ];
    }
}

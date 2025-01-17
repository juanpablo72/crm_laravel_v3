<?php

namespace App\Http\Requests\propiedades;

use Illuminate\Foundation\Http\FormRequest;

class validacionPropiedades extends FormRequest
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
            'id_remax' => 'required|integer|unique:propiedades,id_remax',
            'id_novus' => 'required|integer|unique:propiedades,id_novus',
            'tipo_negocio_id' => 'required|exists:tipo_negocios,id',
            'agente_id' => 'required|exists:agentes,id',
            'cliente_id' => 'required|exists:clientes,id',
            'clasificacion_operacion_id' => 'required|exists:clasificaciones_operacion,id',
            'categoria_propiedad_id' => 'required|exists:categorias,id',
            'nombre_conjunto_residencial' => 'nullable|string|max:255',
            'ubicacion_mapa' => 'nullable|string|max:255',
            'valla' => 'nullable|string|max:255',
            'tipo_contrato_id' => 'required|exists:tipos_contrato,id',
            'fecha_inicio' => 'required|date',
            'fecha_inicio_contrato' => 'required|date',
            'fecha_vencimiento' => 'required|date|after:fecha_inicio_contrato',
            'pais' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:255',
            'municipio' => 'nullable|string|max:255',
            'parroquia' => 'nullable|string|max:255',
            'ciudad' => 'nullable|string|max:255',
            'metros_terreno' => 'nullable|numeric',
            'metros_construccion' => 'nullable|numeric',
            'descripcion' => 'nullable|string',
            'imagen1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen8' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen9' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen10' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|url',
            'estado_operacion' => 'nullable|string',
            'moneda_id' => 'required|exists:monedas,id',
            'monto' => 'nullable|numeric',
            'zona_id' => 'required|exists:zonas,id',
            'latitud' => 'nullable|numeric',
            'longitud' => 'nullable|numeric',
            'numero_catastral' => 'nullable|string|max:255',
            'gastos_cierre' => 'nullable|numeric',
            'impuestos_anuales' => 'nullable|numeric',
            'condominio' => 'nullable|numeric',
            'porcentaje_desocupacion' => 'nullable|numeric|min:0|max:100',
            'porcentaje_revalorizacion' => 'nullable|numeric|min:0|max:100',
            'duracion_propiedad' => 'nullable|integer',
            'comision_venta' => 'nullable|numeric',
            'direccion' => 'nullable|string|max:255',
            'edificio' => 'nullable|string|max:255',
            'piso' => 'nullable|string|max:255',
            'numero_apartamento' => 'nullable|string|max:255',
            'punto_referencia' => 'nullable|string|max:255',
            'comision_pagada_id' => 'nullable|exists:porcentaje_comision,id',
            'puestos_estacionamiento' => 'nullable|integer',
            'habitaciones' => 'nullable|integer',
            'banos' => 'nullable|integer',
            'medio_banos' => 'nullable|integer',
            'vestidores' => 'nullable|integer',
            'year_construccion' => 'nullable|integer',
            'financiamiento' => 'nullable|boolean',
            'recibe_vehiculo' => 'nullable|boolean',
            'precio_renta_mensual' => 'nullable|numeric',
            'fecha' => 'nullable|date',
            'pendiente_reportar_segunda_punta' => 'nullable|boolean',
            'cap_externa' => 'nullable|boolean',
            'express' => 'nullable|boolean',
            'seg_punta_express' => 'nullable|boolean',
            'is_referido' => 'nullable|boolean',
            'agente_externo_id' => 'nullable|exists:agentes,id',
            'agencia_inmobiliaria_id' => 'nullable|exists:agencias_inmobiliarias,id',
            'marcada_administracion' => 'nullable|boolean',
            'of_team' => 'nullable|boolean',
            'reg_administracion' => 'nullable|boolean',
            'verificada_registro' => 'nullable|boolean',
            'firma_registro' => 'nullable|boolean',
            'pago_completado' => 'nullable|boolean',
            'saldo_pendiente' => 'nullable|numeric',
            'es_un_solo_nivel' => 'nullable|boolean',
            'neg_juridico_marcada_adm' => 'nullable|boolean',
            'reg_neg_juridico' => 'nullable|boolean',
            'pago_compl_neg_juridico' => 'nullable|boolean',
        ];
    }
}

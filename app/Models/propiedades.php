<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades extends Model
{
    use HasFactory;

    protected $table = 'propiedades';

    protected $fillable = [
        'id_remax',
        'id_novus',
        'tipo_negocio_id',
        'agente_id',
        'cliente_id',
        'clasificacion_operacion_id',
        'categoria_propiedad_id',
        'nombre_conjunto_residencial',
        'ubicacion_mapa',
        'valla',
        'tipo_contrato_id',
        'fecha_inicio',
        'fecha_inicio_contrato',
        'fecha_vencimiento',
        'pais',
        'estado',
        'municipio',
        'parroquia',
        'ciudad',
        'metros_terreno',
        'metros_construccion',
        'descripcion',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6',
        'imagen7',
        'imagen8',
        'imagen9',
        'imagen10',
        'video',
        'estado_operacion',
        'moneda_id',
        'monto',
        'zona_id',
        'latitud',
        'longitud',
        'numero_catastral',
        'gastos_cierre',
        'impuestos_anuales',
        'condominio',
        'porcentaje_desocupacion',
        'porcentaje_revalorizacion',
        'duracion_propiedad',
        'comision_venta',
        'direccion',
        'edificio',
        'piso',
        'numero_apartamento',
        'punto_referencia',
        'comision_pagada_id',
        'puestos_estacionamiento',
        'habitaciones',
        'banos',
        'medio_banos',
        'vestidores',
        'year_construccion',
        'financiamiento',
        'recibe_vehiculo',
        'precio_renta_mensual',
        'fecha',
        'pendiente_reportar_segunda_punta',
        'cap_externa',
        'express',
        'seg_punta_express',
        'is_referido',
        'agente_externo_id',
        'agencia_inmobiliaria_id',
        'marcada_administracion',
        'of_team',
        'reg_administracion',
        'verificada_registro',
        'firma_registro',
        'pago_completado',
        'saldo_pendiente',
        'es_un_solo_nivel',
        'neg_juridico_marcada_adm',
        'reg_neg_juridico',
        'pago_compl_neg_juridico'
    ];

    // Relaciones
    public function tipoNegocio()
    {
        return $this->belongsTo(TipoNegocio::class);
    }

    public function agente()
    {
        return $this->belongsTo(agentes::class);
    }

    public function cliente()
    {
        return $this->belongsTo(clientes::class);
    }

    public function categoriaPropiedad()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tipoContrato()
    {
        return $this->belongsTo(TipoContrato::class);
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class);
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }

    public function comisionPagada()
    {
        return $this->belongsTo(PorcentajeComision::class);
    }



    public function agenciaInmobiliaria()
    {
        return $this->belongsTo(AgenciaInmobiliaria::class);
    }
}

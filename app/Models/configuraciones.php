<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoNegocio extends Model
{
    protected $table = 'tipos_de_negocios';
    protected $fillable = ['nombre_negocio', 'tipo', 'fecha_creacion'];
    public $timestamps = false;
}

class FormaDePago extends Model
{
    protected $table = 'formas_de_pago';
    protected $fillable = ['formasdepago', 'fecha_creacion'];
    public $timestamps = false;
}

class PorcentajeComision extends Model
{
    protected $table = 'porcentaje_comision';
    protected $fillable = ['porcentaje_comision', 'fecha_creacion'];
    public $timestamps = false;
}

class TiempoContrato extends Model
{
    protected $table = 'tiempo_contrato';
    protected $fillable = ['tiempo_contrato', 'fecha_creacion'];
    public $timestamps = false;
}

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['nombre_departamento', 'fecha_creacion'];
    public $timestamps = false;
}

class Moneda extends Model
{
    protected $table = 'monedas';
    protected $fillable = ['nombre_moneda', 'simbolo_moneda', 'fecha_creacion'];
    public $timestamps = false;
}

class FlatDocumentoAbogado extends Model
{
    protected $table = 'flatdocumentosabogados';
    protected $fillable = ['flat', 'fecha_creacion'];
    public $timestamps = false;
}

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['nombre_categoria', 'fecha_creacion'];
    public $timestamps = false;
}

class AgenciaInmobiliaria extends Model
{
    protected $table = 'agencia_inmobiliaria';
    protected $fillable = ['nombreempresa', 'ubicacion', 'estado', 'ciudad', 'rif', 'municipio', 'telefono', 'email', 'perfil', 'fecha_creacion'];
    public $timestamps = false;
}

class FormatoDistribucion extends Model
{
    protected $table = 'formato_distribucion';
    protected $fillable = ['formato_distribucion', 'formato', 'formato_oficina', 'fecha_creacion'];
    public $timestamps = false;
}

class Zona extends Model
{
    protected $table = 'zonas';
    protected $fillable = ['zona', 'fecha_creacion'];
    public $timestamps = false;
}

class MensajeMarcaAgua extends Model
{
    protected $table = 'marca_agua';
    protected $fillable = ['msg_marca_agua', 'fecha_creacion'];
    public $timestamps = false;
}

class Estado extends Model
{
    protected $table = 'estados';
    protected $fillable = ['estado', 'id_estado'];
    public $timestamps = false;
}

class Ciudad extends Model
{
    protected $table = 'ciudades';
    protected $fillable = ['id_ciudad', 'id_estado', 'ciudad'];
    public $timestamps = false;
}

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $fillable = ['id_municipio', 'id_estado', 'municipio'];
    public $timestamps = false;
}

class Parroquia extends Model
{
    protected $table = 'parroquias';
    protected $fillable = ['id_parroquia', 'id_municipio', 'parroquia'];
    public $timestamps = false;
}

class ClasificacionOperacion extends Model
{
    protected $table = 'clasiicacion_operacion';
    protected $fillable = ['tipo_clasificacion'];
    public $timestamps = false;
}

class TipoContrato extends Model
{
    protected $table = 'tipo_contrato';
    protected $fillable = ['tipo_contrato'];
    public $timestamps = false;
}

class ZonaDefecto extends Model
{
    protected $table = 'zona_por_defecto';
    protected $fillable = ['estado', 'pais', 'municipio', 'ciudad', 'parroquias', 'lat', 'long', 'fecha_creacion'];
    public $timestamps = false;
}

class FuenteProspecto extends Model
{
    protected $table = 'fuentes_propectos';
    protected $fillable = ['fuentes_propectos', 'fecha_creacion'];
    public $timestamps = false;
}

class EstadoDivisa extends Model
{
    protected $table = 'estadodivisa';
    protected $fillable = ['estado', 'fecha_creacion'];
    public $timestamps = false;
}

class MedioPagoTesoreria extends Model
{
    protected $table = 'mediopagotesoreria';
    protected $fillable = ['nombre', 'moneda_id', 'estado_id', 'fecha_creacion'];
    public $timestamps = false;

    public function moneda()
    {
        return $this->belongsTo(Moneda::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoDivisa::class);
    }
}

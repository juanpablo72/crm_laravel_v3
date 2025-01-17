<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agentes extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'email',
        'telefono',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'posee_vehiculo',
        'direccion_residencia',
        'foto_perfil',
        'id_asociado',
        'fecha_contrato',
        'fecha_vencimiento_contrato',
        'nota',
        'estado',
        'pertenece_team',
        'team_leader',
        'fecha_creacion',
        'fecha_inactivacion',
        'email_slack',
        'id_slack',
        'img_cumpleaños',
        'instagram',
        'is_exonerado'
    ];
}

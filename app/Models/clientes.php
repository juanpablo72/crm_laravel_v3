<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class clientes extends Model
{
    use HasFactory;


    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'email',
        'telefono',
        'fecha_nacimiento',
        'sexo',
        'nacionalidad',
        'es_prospecto',
        'domicilio'
    ];

    protected $casts = [
        'es_prospecto' => 'boolean',
        'fecha_nacimiento' => 'date',
    ];
}

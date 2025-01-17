<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->string('email');
            $table->string('telefono');
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('sexo', ['masculino', 'femenino', 'otro']);
            $table->string('nacionalidad')->nullable();
            $table->boolean('es_prospecto')->default(false);
            $table->string('domicilio')->nullable();
            $table->timestamps();
        });
    }
};

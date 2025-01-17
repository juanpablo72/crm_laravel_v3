<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('id_remax')->nullable();
            $table->string('id_novus')->nullable();
            $table->foreignId('tipo_negocio_id')->nullable()->constrained('tipos_de_negocios')->nullOnDelete();
            $table->foreignId('agente_id')->nullable()->constrained('agentes')->nullOnDelete();
            $table->foreignId('cliente_id')->nullable()->constrained('clientes')->nullOnDelete();
            $table->foreignId('clasificacion_operacion_id')->nullable()->constrained('clasificacion_operacion')->nullOnDelete();
            $table->foreignId('categoria_propiedad_id')->nullable()->constrained('categorias')->nullOnDelete();
            $table->string('nombre_conjunto_residencial')->nullable();
            $table->string('ubicacion_mapa');
            $table->string('valla');
            $table->foreignId('tipo_contrato_id')->nullable()->constrained('tipos_contrato')->nullOnDelete();
            $table->date('fecha_inicio');
            $table->date('fecha_inicio_contrato')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('pais')->nullable();
            $table->unsignedTinyInteger('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('ciudad')->nullable();
            $table->decimal('metros_terreno', 10, 2)->nullable();
            $table->decimal('metros_construccion', 10, 2)->nullable();
            $table->text('descripcion')->nullable();
            $table->json('imagenes')->nullable();
            $table->string('video')->nullable();
            $table->string('estado_operacion')->nullable();
            $table->foreignId('moneda_id')->nullable()->constrained('monedas')->nullOnDelete();
            $table->decimal('monto', 15, 2)->nullable();
            $table->foreignId('zona_id')->nullable()->constrained('zonas')->nullOnDelete();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('numero_catastral')->nullable();
            $table->decimal('gastos_cierre', 15, 2)->nullable();
            $table->decimal('impuestos_anuales', 15, 2)->nullable();
            $table->decimal('condominio', 15, 2)->nullable();
            $table->decimal('porcentaje_desocupacion', 5, 2)->nullable();
            $table->decimal('porcentaje_revalorizacion', 5, 2)->nullable();
            $table->integer('duracion_propiedad')->nullable();
            $table->decimal('comision_venta', 5, 2)->nullable();
            $table->string('direccion')->nullable();
            $table->string('edificio')->nullable();
            $table->string('piso')->nullable();
            $table->string('numero_apartamento')->nullable();
            $table->string('punto_referencia')->nullable();
            $table->foreignId('comision_pagada_id')->nullable()->constrained('porcentaje_comision')->nullOnDelete();
            $table->integer('puestos_estacionamiento')->nullable();
            $table->integer('habitaciones')->nullable();
            $table->integer('banos')->nullable();
            $table->integer('medio_banos')->nullable();
            $table->integer('vestidores')->nullable();
            $table->year('year_construccion')->nullable();
            $table->boolean('financiamiento')->default(false);
            $table->boolean('recibe_vehiculo')->default(false);
            $table->decimal('renta_mensual', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};

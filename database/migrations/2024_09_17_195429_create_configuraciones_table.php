<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tipos_de_negocios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_negocio', 100);
            $table->string('tipo', 100)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('formas_de_pago', function (Blueprint $table) {
            $table->id();
            $table->string('formas_de_pago', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('porcentaje_comision', function (Blueprint $table) {
            $table->id();
            $table->string('porcentaje_comision', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('tiempo_contrato', function (Blueprint $table) {
            $table->id();
            $table->string('tiempo_contrato', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_departamento', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('monedas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_moneda', 100);
            $table->string('simbolo_moneda', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('flat_documentos_abogados', function (Blueprint $table) {
            $table->id();
            $table->integer('flat');
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_categoria', 100);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('agencia_inmobiliaria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa', 80);
            $table->string('ubicacion', 50);
            $table->string('estado', 50);
            $table->string('ciudad', 50)->nullable();
            $table->string('rif', 50)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->string('telefono', 17)->nullable();
            $table->string('email', 75)->nullable();
            $table->string('perfil', 2)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('formato_distribucion', function (Blueprint $table) {
            $table->id();
            $table->string('formato_distribucion', 100);
            $table->string('formato', 100)->nullable();
            $table->string('formato_oficina', 100)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('zonas', function (Blueprint $table) {
            $table->id();
            $table->string('zona', 100)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('marca_agua', function (Blueprint $table) {
            $table->id();
            $table->string('msg_marca_agua', 50);
            $table->timestamp('fecha_creacion')->useCurrent();
        });

        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado', 100);
            $table->integer('id_estado')->unsigned();
        });

        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('id_ciudad', 100);
            $table->integer('id_estado')->unsigned();
            $table->string('ciudad', 100);
        });

        Schema::create('municipio', function (Blueprint $table) {
            $table->id();
            $table->string('id_municipio', 100);
            $table->integer('id_estado')->unsigned();
            $table->string('municipio', 100);
        });

        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
            $table->string('id_parroquia', 100);
            $table->integer('id_municipio')->unsigned();
            $table->string('parroquia', 100);
        });

        Schema::create('clasificacion_operacion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_clasificacion', 100);
        });

        Schema::create('tipo_contrato', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_contrato', 100);
        });

        Schema::create('zona_por_defecto', function (Blueprint $table) {
            $table->id();
            $table->string('estado', 100);
            $table->string('pais', 100);
            $table->string('municipio', 100)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('parroquias', 100)->nullable();
            $table->string('lat', 100)->nullable();
            $table->string('long', 100)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipos_de_negocios');
        Schema::dropIfExists('formas_de_pago');
        Schema::dropIfExists('porcentaje_comision');
        Schema::dropIfExists('tiempo_contrato');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('monedas');
        Schema::dropIfExists('flat_documentos_abogados');
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('agencia_inmobiliaria');
        Schema::dropIfExists('formato_distribucion');
        Schema::dropIfExists('zonas');
        Schema::dropIfExists('marca_agua');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('ciudades');
        Schema::dropIfExists('municipio');
        Schema::dropIfExists('parroquias');
        Schema::dropIfExists('clasificacion_operacion');
        Schema::dropIfExists('tipo_contrato');
        Schema::dropIfExists('zona_por_defecto');
    }
};

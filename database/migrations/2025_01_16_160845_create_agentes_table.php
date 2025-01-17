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
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->string('email');
            $table->string('telefono');
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->enum('sexo', ['masculino', 'femenino', 'otro'])->nullable();
            $table->boolean('posee_vehiculo')->default(false);
            $table->string('direccion_residencia')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->unsignedBigInteger('id_asociado')->nullable();
            $table->date('fecha_contrato')->nullable();
            $table->date('fecha_vencimiento_contrato')->nullable();
            $table->text('nota')->nullable();
            $table->string('estado')->default('EN REVISION'); // Estado predeterminado INICIAL
            $table->boolean('pertenece_team')->default(false);
            $table->boolean('team_leader')->default(false);
            $table->date('fecha_creacion')->nullable();
            $table->date('fecha_inactivacion')->nullable();
            $table->string('email_slack')->nullable();
            $table->string('id_slack')->nullable();
            $table->string('img_cumpleaños')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('is_exonerado')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agentes');
    }
};

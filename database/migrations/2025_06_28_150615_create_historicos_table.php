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
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('nomina_id');
            $table->double('prima_servicio');
            $table->double('servicios_cesantias');
            $table->double('interes_cesantias');
            $table->double('vacaciones');
            $table->double('salario_proporcional');
            $table->double('auxilio_transporte');
            $table->double('horas_extras');
            $table->double('total_devengado');
            $table->double('salud');
            $table->double('pension');
            $table->double('otros_descuentos');
            $table->double('total_deducciones');
            $table->double('salario_neto');
            $table->timestamps();

            $table ->foreign('user_id')->references('id')->on('users');
            $table->foreign('nomina_id')->references('id')->on('nominas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicos');
    }
};

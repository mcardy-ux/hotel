<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companias', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->nullable();
            $table->integer('digitoVerificacion')->nullable();
            $table->string('razonSocial');
            $table->string('tipoRegimen');
            $table->string('ciiuActividad');
            $table->string('direccion')->nullable();
            
            $table->unsignedBigInteger('pais')->nullable();
            $table->foreign('pais')->references('id')->on('country');
            $table->unsignedBigInteger('ciudad')->nullable();
            $table->foreign('ciudad')->references('id')->on('city');

            $table->string('telefono');
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->string('paginaWeb')->nullable();

            $table->unsignedBigInteger('tarifa')->nullable();
            $table->foreign('tarifa')->references('id')->on('regimens');
            $table->unsignedBigInteger('forma_pago')->nullable();
            $table->foreign('forma_pago')->references('id')->on('formas_pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companias');
    }
}

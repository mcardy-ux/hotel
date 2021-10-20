<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit');
            $table->char('digitoVerificacion');
            $table->string('nombre');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('paginaWeb')->nullable();
            $table->string('email')->nullable();
            $table->integer('potencial')->nullable();
            $table->integer('comision')->nullable();

            $table->boolean('aplicaCredito')->nullable();
            $table->integer('montoCredito')->nullable();
            $table->integer('diasCredito')->nullable();
            $table->integer('diasCorte')->nullable();


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
        Schema::dropIfExists('agencias');
    }
}

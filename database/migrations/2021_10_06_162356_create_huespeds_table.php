<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuespedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespeds', function (Blueprint $table) {
            $table->id();
            $table->boolean('validacion_registro');
            $table->integer('id_registro')->nullable();
            $table->unsignedBigInteger('tipo_doc')->nullable();
            $table->foreign('tipo_doc')->references('id')->on('tipo_documentos');
            $table->string('numero_doc')->nullable();
            $table->unsignedBigInteger('lugar_exp')->nullable();
            $table->foreign('lugar_exp')->references('id')->on('country');
            $table->unsignedBigInteger('ciudad_exp')->nullable();
            $table->foreign('ciudad_exp')->references('id')->on('city');

            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->enum('genero',['masculino','femenino']);
            $table->string('direccion');
            
            $table->unsignedBigInteger('nacionalidad')->nullable();
            $table->foreign('nacionalidad')->references('id')->on('country');
            $table->unsignedBigInteger('ciudad')->nullable();
            $table->foreign('ciudad')->references('id')->on('city');

            $table->string('telefono');
            $table->string('celular')->nullable();
            $table->string('email');
            $table->dateTime('fecha_nacimiento')->nullable();
            
            $table->unsignedBigInteger('tipo_huesped')->nullable();
            $table->foreign('tipo_huesped')->references('id')->on('tipo_clientes');
            $table->unsignedBigInteger('tarifa')->nullable();
            $table->foreign('tarifa')->references('id')->on('regimens');
            $table->unsignedBigInteger('forma_pago')->nullable();
            $table->foreign('forma_pago')->references('id')->on('formas_pagos');
            $table->unsignedBigInteger('rel_hotel')->nullable();
            $table->foreign('rel_hotel')->references('id')->on('data_hotels');
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
        Schema::dropIfExists('huespeds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('razon_comercial');
            $table->integer('nit');
            $table->integer('nit_digito_verificacion');
            $table->enum('tipo_regimen',['Persona Natural','Persona Juridica']);
            $table->string('regimen_contributivo');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('telefono_alterno');
            $table->string('CIIU_Actividad_economica');
            $table->string('Logo');
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
        Schema::dropIfExists('data_hotels');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataHotels extends Migration
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
            $table->string('razonSocial');
            $table->string('razonComercial');
            $table->integer('nit');
            $table->char('digitoVerificacion');
            $table->string('tipoRegimen');
            $table->string('regimenTributario');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('telefonoAlterno');
            $table->string('ciiuActividad');
            $table->string('logo');

            $table->unsignedBigInteger('relUbicacion');
            $table->foreign('relUbicacion')->references('id')->on('city');

            $table->unsignedBigInteger('relBankAcc');
            $table->foreign('relBankAcc')->references('id')->on('bank_accounts');

            $table->unsignedBigInteger('relBillingResolution');
            $table->foreign('relBillingResolution')->references('id')->on('billing_resolutions');
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

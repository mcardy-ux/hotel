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
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('relUbicacion');
            $table->foreign('relUbicacion')->references('id')->on('city');

            $table->unsignedBigInteger('relBillingResolution');
            $table->foreign('relBillingResolution')->references('id')->on('billing_resolutions');
            $table->timestamps();
        });
        Schema::create('hotel_has_bank_accounts', function (Blueprint $table) {
            $table->integer('bank_account_id');
            $table->integer('data_hotels_id');
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
        Schema::dropIfExists('hotel_has_bank_accounts');
    }
}

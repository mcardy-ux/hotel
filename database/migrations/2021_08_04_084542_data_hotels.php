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
            $table->bigInteger('nit');
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
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');
            $table->unsignedBigInteger('relUbicacion');
            $table->foreign('relUbicacion')->references('id')->on('city');

            $table->unsignedBigInteger('relBillingResolution');
            $table->foreign('relBillingResolution')->references('id')->on('billing_resolutions');
            $table->timestamps();
        });
        Schema::create('hotel_has_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_account_id')->nullable();
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts')->onDelete('cascade');
            $table->unsignedBigInteger('data_hotel_id')->nullable();
            $table->foreign('data_hotel_id')->references('id')->on('data_hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('hotel_has_bank_accounts');
        Schema::dropIfExists('data_hotels');
    }
}

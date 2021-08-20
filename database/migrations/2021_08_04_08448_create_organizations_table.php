<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial');
            $table->bigInteger('nit');
            $table->char('digitoVerificacion');
            $table->string('direccion_contacto');
            $table->string('telefono_contacto');
            $table->string('email_contacto');
            $table->string('logo');
            $table->tinyInteger('Is_independiente');
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
        Schema::dropIfExists('organizations');
    }
}

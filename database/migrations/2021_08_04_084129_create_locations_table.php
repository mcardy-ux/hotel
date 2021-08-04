<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('pais');
        });
        Schema::create('departament', function (Blueprint $table) {
            $table->id();
            $table->string('departamento');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('country');
        });
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->string('municipio');
            $table->boolean('estado');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departament');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
        Schema::dropIfExists('departament');
        Schema::dropIfExists('country');
    }
}

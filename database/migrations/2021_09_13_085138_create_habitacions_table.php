<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();
            $table->string('num_habitacion');
            $table->integer('capacidad_huespedes');
            $table->enum('estado',['habilitada','deshabilitada']);

            //Info Usuario
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');


            //relaciones
            $table->unsignedBigInteger('sector_hab_id')->nullable();
            $table->foreign('sector_hab_id')->references('id')->on('sectores_habitaciones')->onDelete('cascade');
            $table->unsignedBigInteger('tipo_hab_id')->nullable();
            $table->foreign('tipo_hab_id')->references('id')->on('tipo_habitaciones')->onDelete('cascade');
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->foreign('hotel_id')->references('id')->on('data_hotels')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('habitacion_has_clases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('habitacions_id')->nullable();
            $table->foreign('habitacions_id')->references('id')->on('habitacions')->onDelete('cascade');
            $table->unsignedBigInteger('clase_hab_id')->nullable();
            $table->foreign('clase_hab_id')->references('id')->on('clase_habitaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacion_has_clases');
        Schema::dropIfExists('habitacions');
    }
}

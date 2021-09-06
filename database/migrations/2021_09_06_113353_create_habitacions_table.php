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
            $table->string('cap_huespedes');
            $table->string('estado');
            //Relaciones foraneas de creacion o actualizacion
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');
            //Relacion foraneas
            $table->unsignedBigInteger('relSectorHabitacion');
            $table->foreign('relSectorHabitacion')->references('id')->on('sectores_habitaciones');
            $table->unsignedBigInteger('relTipoHabitacion');
            $table->foreign('relTipoHabitacion')->references('id')->on('tipo_habitaciones');
            $table->unsignedBigInteger('relClaseHabitacion');
            $table->foreign('relClaseHabitacion')->references('id')->on('clase_habitaciones');

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
        Schema::dropIfExists('habitacions');
    }
}

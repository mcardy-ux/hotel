<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->double("valorAlojamiento");
            $table->enum("estado",['habilitada','deshabilitada']);
            $table->enum("temporada",['Baja','Media','Alta','Especial']);
            //Inicio de codigo foraneo
            $table->unsignedBigInteger('relRegimen');
            $table->foreign('relRegimen')->references('id')->on('regimens');

            $table->unsignedBigInteger('relHabitacion');
            $table->foreign('relHabitacion')->references('id')->on('habitacions');

          
            //Info de modificacion o creacion 
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');

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
        Schema::dropIfExists('tarifas');
    }
}

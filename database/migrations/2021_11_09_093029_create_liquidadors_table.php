<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiquidadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidadors', function (Blueprint $table) {
            $table->id();
            $table->integer("num_liquidacion");
            $table->integer("rel_plan");
            $table->string("numero_reserva");
            $table->integer("encargado_reserva");
            $table->json("habitaciones");
            $table->json("huespedes");
            $table->json("cargos");
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
        Schema::dropIfExists('liquidadors');
    }
}

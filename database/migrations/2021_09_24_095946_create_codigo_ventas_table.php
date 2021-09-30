<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('descripcionContable');
            $table->enum('estado',['activo','inactivo','bloqueado']);
            
            //Relaciones
            $table->unsignedBigInteger('rel_puc')->nullable();
            $table->foreign('rel_puc')->references('id')->on('plan_cuentas');
            $table->unsignedBigInteger('rel_impuesto')->nullable();
            $table->foreign('rel_impuesto')->references('id')->on('impuestos');
            $table->unsignedBigInteger('rel_agrupacion')->nullable();
            $table->foreign('rel_agrupacion')->references('id')->on('agrupacion_ventas');
            $table->unsignedBigInteger('rel_centro')->nullable();
            $table->foreign('rel_centro')->references('id')->on('codigo_ventas');

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
        Schema::dropIfExists('codigo_ventas');
    }
}

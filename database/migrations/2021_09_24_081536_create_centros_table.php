<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->unsignedBigInteger('rel_departaments')->nullable();
            $table->foreign('rel_departaments')->references('id')->on('departaments');
        
            
            $table->enum('tipo',['inventario','costo','ingreso']);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');
            $table->timestamps();
        });


        Schema::create('planCuenta_has_centros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('planCuenta_id')->nullable();
            $table->foreign('planCuenta_id')->references('id')->on('plan_cuentas')->onDelete('cascade');
            $table->unsignedBigInteger('centro_id')->nullable();
            $table->foreign('centro_id')->references('id')->on('centros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planCuenta_has_centros');
        Schema::dropIfExists('centros');
    }
}

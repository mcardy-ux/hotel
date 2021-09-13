<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimens', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('regimen_has_components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regimens_id')->nullable();
            $table->foreign('regimens_id')->references('id')->on('regimens')->onDelete('cascade');
            $table->unsignedBigInteger('component_id')->nullable();
            $table->foreign('component_id')->references('id')->on('componente_regimens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regimen_has_components');
        Schema::dropIfExists('regimens');
    }
}

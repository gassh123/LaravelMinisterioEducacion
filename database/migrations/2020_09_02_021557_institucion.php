<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Institucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion', function (Blueprint $table) {
            $table->id();
            $table->text('nombre')->nullable();
            $table->text('categoria')->nullable();
            $table->text('turno')->nullable();
            $table->text('domicilio')->nullable();
            $table->integer('telefono')->nullable();
            $table->text('localidad')->nullable();
            $table->text('departamento')->nullable();
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_docentes', function (Blueprint $table) {
            $table->id();
            $table->integer('dni')->nullable();
            $table->text('nombre_apellido')->nullable();
            $table->text('cargo')->nullable();
            $table->text('caracter')->nullable();
            $table->text('grado_seccion')->nullable();
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

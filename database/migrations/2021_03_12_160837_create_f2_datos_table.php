<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateF2DatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f2_datos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('f2_id');
            $table->integer('user_id');
            $table->integer('id_datos');
            $table->string('establecimiento', 50);
            $table->date('fecha_ingreso')->nullable();
            $table->string('cod_cargo', 30)->nullable();
            $table->string('ag', 30)->nullable();
            $table->string('cr', 30)->nullable();
            $table->string('ant', 30)->nullable();
            $table->string('asignatura', 50)->nullable();
            $table->string('h', 30)->nullable();
            $table->string('n', 30)->nullable();
            $table->string('c', 30)->nullable();
            $table->string('d', 30)->nullable();
            $table->string('t', 30)->nullable();
            $table->char('lunes', 4)->nullable();
            $table->char('martes', 4)->nullable();
            $table->char('miercoles', 4)->nullable();
            $table->char('jueves', 4)->nullable();
            $table->char('viernes', 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f2_datos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePofTablaDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pof_tabla_datos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pof_id');
            $table->string('documento_tipo', 45);
            $table->string('cuil', 45);
            $table->string('apellido_nombre', 45);
            $table->string('cargo', 20)->nullable();
            $table->string('nomenclador', 45)->nullable();
            $table->integer('horas')->nullable();
            $table->integer('antes')->nullable();
            $table->integer('dias')->nullable();
            $table->string('celular', 45)->nullable();
            $table->string('formacion', 45)->nullable();
            $table->string('observaciones')->nullable();
            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pof_tabla_datos');
    }
}

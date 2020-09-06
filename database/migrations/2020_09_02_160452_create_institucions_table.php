<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucions', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_escuela')->unique();
            $table->text('Institucion')->unique();
            $table->text('ctg')->nullable();
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
        Schema::dropIfExists('institucions');
    }
}

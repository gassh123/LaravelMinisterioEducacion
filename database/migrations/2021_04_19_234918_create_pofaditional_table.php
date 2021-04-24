<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePofaditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pofaditional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pof_tabla_datos_id')->references('id')->on('pof_tabla_datos');
            $table->string('dni', 30);
            $table->string('domicilio', 45)->nullable();
            $table->string('turno', 30)->nullable();
            $table->string('licencia', 10)->nullable();
            $table->string('virtualidad', 10)->nullable();
            $table->date('reincorporacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pofaditional');
    }
}

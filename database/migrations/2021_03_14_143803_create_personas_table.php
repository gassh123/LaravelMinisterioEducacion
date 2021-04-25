<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('documento', 45);
            $table->string('tipo_doc', 45);
            $table->string('apellido', 45);
            $table->string('nombre', 45);
            $table->date('fnac')->nullable();
            $table->string('cuil', 45)->nullable();
            $table->string('est_civil', 45)->nullable();
            $table->string('anti_doc', 45)->nullable();
            $table->string('anti_adm', 45);
            $table->date('fec_i_doc')->nullable();
            $table->date('fec_i_adm')->nullable();
            $table->string('numero_telefono', 25)->nullable();
            $table->string('ultimo_nivel_formación_Concluido', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}

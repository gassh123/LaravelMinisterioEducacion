<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomenclatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenclators', function (Blueprint $table) {
            $table->id();
            $table->string('agru', 60);
            $table->string('cod', 45);
            $table->string('descripcion', 45);
            $table->string('tipo_nomenclador', 45);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomenclators');
    }
}

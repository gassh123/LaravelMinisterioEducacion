<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateF2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->string('tipo_documento', 10);
            $table->string('numero_documento', 20);
            $table->string('numero_cuil', 20);
            $table->string('nombre_apellido', 50);
            $table->char('jubilado', 4)->nullable();
            $table->date('fecha_jubilacion')->nullable();
            $table->string('resolucion_numero_uno', 50);
            $table->string('resolucion_numero_dos', 50);

            $table->string('name', 100)->nullable();
            $table->string('URL', 100)->nullable();
            $table->string('info', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f2s');
    }
}

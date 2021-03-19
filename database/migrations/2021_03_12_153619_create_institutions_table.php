<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 60)->nullable();
			$table->string('categoria', 2)->nullable();
			$table->string('cue', 7)->nullable();
			$table->string('nombre', 47)->nullable();
			$table->string('domicilio', 55)->nullable();
			$table->string('turno', 5)->nullable();
			$table->string('localidad', 23)->nullable();
			$table->string('porcentaje_zona', 5)->nullable();
			$table->string('zona', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}

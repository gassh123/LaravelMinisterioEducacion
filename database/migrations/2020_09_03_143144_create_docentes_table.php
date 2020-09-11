<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
           // $table->text('institucion_id');
            $table->unsignedBigInteger('institucion_id')->unsigned();
            $table->integer('Dni')->nullable();
            $table->text('ApellidoNombre')->nullable();
            $table->text('Cargo')->nullable();
            $table->text('Caracter')->nullable();
            $table->text('GradoSeccion')->nullable();
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
        Schema::dropIfExists('docentes');
       
    }
}

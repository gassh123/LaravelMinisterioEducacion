<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaveForaneaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clave_foranea', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('institucion_id')->nullable();
            $table->unsignedBigInteger('docente_id')->nullable();
          //  $table->unsignedBigInteger('altabaja_id');
            /*$table->unsignedBigInteger('novedad_id');
            $table->unsignedBigInteger('otranovedad_id');*/
          $table->timestamps();
 
             $table->foreign('institucion_id')->references('id')->on('institucions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
             $table->foreign('docente_id')->references('id')->on('docentes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
           /*  $table->foreign('altabaja_id')->references('id')->on('altabajas');
             $table->foreign('novedad_id')->references('id')->on('novedads');
             $table->foreign('otranovedad_id')->references('id')->on('otranovedads');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clave_foranea');
    }
}

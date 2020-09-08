<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltabajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altabajas', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('docente_id')->unsigned();
            $table->unsignedBigInteger('institucion_id')->unsigned();
           // $table->text('tipoAB')->nullable();
            $table->date('desdeAB')->nullable();
            $table->date('hastaAB')->nullable();
            $table->integer('totalAB')->nullable();
            $table->text('motivo')->nullable();
            $table->text('observacionesAB')->nullable();
            $table->timestamps();

            $table->foreign('docente_id')->references('id')->on('docentes');       
            $table->foreign('institucion_id')->references('id')->on('institucions');      

           
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altabajas');
    }
}

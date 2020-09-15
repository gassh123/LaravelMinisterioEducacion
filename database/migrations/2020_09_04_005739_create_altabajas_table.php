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
            
           // $table->text('tipoAB')->nullable();
           
           $table->integer('NumeroInst')->nullable();
           $table->text('NombreInst')->nullable();
           $table->text('TurnoInst')->nullable();
           $table->text('DomicilioInst')->nullable();
           $table->integer('TelefonoInst')->nullable();
           $table->text('LocalidadInst')->nullable();
           $table->text('DepartamentoInst')->nullable();
           $table->integer('num')->nullable();
           $table->integer('dni')->nullable();
           $table->text('ApellidoNombre')->nullable();
           $table->text('cargo')->nullable();
           $table->text('caracter')->nullable();
           $table->text('GradoSeccion')->nullable();
            $table->date('Desde')->nullable();
            $table->date('Hasta')->nullable();
            $table->integer('Total')->nullable();
            $table->text('Motivo')->nullable();
            $table->text('Observaciones')->nullable();
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
        Schema::dropIfExists('altabajas');
    }
}

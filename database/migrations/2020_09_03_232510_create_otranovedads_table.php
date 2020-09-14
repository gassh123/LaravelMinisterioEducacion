<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtranovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otranovedads', function (Blueprint $table) {
            $table->id();
            $table->date('desdeON')->nullable();
            $table->date('hastaON')->nullable();
            $table->integer('totalON')->nullable();
            $table->text('tiponovedad')->nullable();
            $table->text('observacionesON')->nullable();
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
        Schema::dropIfExists('otranovedads');
    }
}

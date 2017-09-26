<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChequecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chequecompra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compraid')->unsigned();
            $table->foreign('compraid')->references('id')->on('compra');
            $table->integer('chequeid')->unsigned();
            $table->foreign('chequeid')->references('id')->on('cheque');
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
        Schema::dropIfExists('chequecompra');
    }
}

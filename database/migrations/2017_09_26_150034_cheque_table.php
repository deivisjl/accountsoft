<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChequeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nocheque');
            $table->string('tenedor');
            $table->decimal('monto',9,2);
            $table->integer('cuentaid')->unsigned();
            $table->foreign('cuentaid')->references('id')->on('cuentabancaria');
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
        Schema::dropIfExists('cheque');
    }
}

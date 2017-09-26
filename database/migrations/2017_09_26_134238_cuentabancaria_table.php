<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentabancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentabancaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nocuenta');
            $table->string('titular');
            $table->decimal('debe',9,2);
            $table->decimal('haber',9,2);
            $table->integer('bancoid')->unsigned();
            $table->foreign('bancoid')->references('id')->on('banco');
            $table->integer('tipoid')->unsigned();
            $table->foreign('tipoid')->references('id')->on('tipocuenta');
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
        Schema::dropIfExists('cuentabancaria');
    }
}

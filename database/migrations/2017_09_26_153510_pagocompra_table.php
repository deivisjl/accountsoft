<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PagocompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagocompra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cuentaid')->unsigned();
            $table->foreign('cuentaid')->references('id')->on('cuentaporpagar');
            $table->decimal('monto',9,2);
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
        Schema::dropIfExists('pagocompra');
    }
}

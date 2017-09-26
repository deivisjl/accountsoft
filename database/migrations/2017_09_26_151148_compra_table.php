<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('novoucher');
            $table->string('acreedor');
            $table->decimal('iva',5,2);
            $table->decimal('monto',9,2);
            $table->integer('tipocompraid')->unsigned();
            $table->foreign('tipocompraid')->references('id')->on('tipocompra');
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
        Schema::dropIfExists('compra');
    }
}

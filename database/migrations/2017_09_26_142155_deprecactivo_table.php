<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeprecactivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deprecactivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activoid')->unsigned();
            $table->foreign('activoid')->references('id')->on('activofijo');
            $table->decimal('montodepreciado',5,2);
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
        Schema::dropIfExists('deprecactivo');
    }
}

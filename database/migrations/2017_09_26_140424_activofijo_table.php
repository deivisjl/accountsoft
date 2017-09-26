<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivofijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activofijo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->decimal('costo',9,2);
            $table->integer('categoriaid')->unsigned();
            $table->foreign('categoriaid')->references('id')->on('categoriaactivo');
            $table->integer('metodoid')->unsigned();
            $table->foreign('metodoid')->references('id')->on('metododeprec');
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
        Schema::dropIfExists('activofijo');
    }
}

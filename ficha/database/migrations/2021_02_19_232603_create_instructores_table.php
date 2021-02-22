<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('documento',30);
            $table->binary('foto');
            $table->enum('estado',['Activo','Inactivo']);

            $table->bigInteger('idFicha')->unsigned();
            $table->foreign('idFicha')->references('id')->on('fichas');

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
        Schema::dropIfExists('instructores');
    }
}

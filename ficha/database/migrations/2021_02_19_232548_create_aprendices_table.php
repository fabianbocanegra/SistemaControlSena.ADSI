<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('documento',15);
            $table->string('nombre',30);
            $table->string('apellidos',30);
            $table->string('correo',30);
            $table->dateTime('fechadeNacimiento');
            $table->enum('sexo',['Masculino','Femenino','No-Binario']);
            $table->enum('tipoDoc',['TI','CC','CE','PS']);

            $table->bigInteger('idFicha')->unsigned()->nullable();
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
        Schema::dropIfExists('aprendices');
    }
}

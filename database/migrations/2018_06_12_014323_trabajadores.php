<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabajadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->integer('identificacion');
            $table->string('Pnombre');
            $table->string('Papellido');
            $table->string('Sapellido');
            $table->string('sexo');
            $table->string('nacimiento');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('telefonoF');
            $table->string('telefonoC');
            $table->string('correo');
            $table->string('cargo');
            $table->string('inicio');
            $table->integer('Hdiarias');
            $table->integer('mes');
            $table->integer('salario');
            $table->integer('comisiones');

            $table->timestamps();
        });    
     

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
               Schema::dropIfExists('final');
    }
}

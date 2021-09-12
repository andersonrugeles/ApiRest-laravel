<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonTable extends Migration
{
 
    public function up()
    {
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo');
            $table->timestamps();
        });

        Schema::create('nivel_educativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nivel');
            $table->timestamps();
        });

        Schema::create('profesions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->integer('identificacion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email');
            $table->unsignedBigInteger('nivel_educativo_id');
            $table->foreign('nivel_educativo_id')->references('id')->on('nivel_educativos');
            $table->unsignedBigInteger('profesion_id');
            $table->foreign('profesion_id')->references('id')->on('profesions');
            $table->integer('estado');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('person');
        Schema::dropIfExists('profesion');
        Schema::dropIfExists('nivel_educativo');
        Schema::dropIfExists('tipo_documento');
    }
}

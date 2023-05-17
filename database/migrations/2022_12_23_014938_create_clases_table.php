<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->bigInteger('departamento')->unsigned();
            $table->string('codigo');
            $table->string('UV');
            $table->string('dificultad')->nullable();

            // proteger el campo departamento con llave foranea
            $table->foreign('departamento')->references('id')->on('departamentos');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('clases');
    }
};

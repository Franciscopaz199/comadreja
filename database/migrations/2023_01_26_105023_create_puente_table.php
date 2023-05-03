<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puente', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clases_id');
         
            $table->foreignId('career_id');
            $table->bigInteger('prioridad')->unsigned()->default(0);
            // proteger el campo university_id con llave foranea
            $table->foreign('clases_id')->references('id')->on('clases')->onDelete('cascade');
            // proteger el campo career_id con llave foranea
            $table->foreign('career_id')->references('id')->on('carreras')->onDelete('cascade');
           
            $table->unique(['clases_id', 'career_id']);
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
        Schema::dropIfExists('puente');
    }
};

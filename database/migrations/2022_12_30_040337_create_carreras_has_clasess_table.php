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
        Schema::create('carreras_has_clasess', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('clases_id')->unsigned();
            $table->bigInteger('career_id')->unsigned();
            $table->bigInteger('requisito_id')->unsigned()->nullable();
            $table->bigInteger('requisito2_id')->unsigned()->nullable();
            $table->bigInteger('prioridad')->unsigned()->default(0);
            // proteger el campo university_id con llave foranea

            $table->foreign('clases_id')->references('id')->on('clases')->onDelete('cascade');
            $table->foreign('requisito_id')->references('id')->on('clases')->onDelete('cascade');
            $table->foreign('requisito2_id')->references('id')->on('clases')->onDelete('cascade');
            
            // proteger el campo career_id con llave foranea
            $table->foreign('career_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->unique(['clases_id', 'career_id', 'requisito_id']);
            
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
        Schema::dropIfExists('carreras_has_clasess');
    }
};

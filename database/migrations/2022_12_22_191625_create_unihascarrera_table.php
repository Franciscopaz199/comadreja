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
        Schema::create('unihascarreras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('university_id')->unsigned();
            $table->bigInteger('career_id')->unsigned();
            // proteger el campo university_id con llave foranea
            $table->foreign('university_id')->references('id')->on('unis')->onDelete('cascade');
            // proteger el campo career_id con llave foranea
            $table->foreign('career_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->unique(['university_id', 'career_id']);
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
        Schema::dropIfExists('unihascarreras');
    }
};

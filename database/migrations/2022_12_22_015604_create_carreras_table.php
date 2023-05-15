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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shortname');
            $table->string('status');
            $table->string('logo');
            $table->string('description');
            $table->string('periodos');
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->bigInteger('facultad')->unsigned();
            // proteger el campo facultad con llave foranea
            $table->foreign('facultad')->references('id')->on('facultades');
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
        Schema::dropIfExists('carreras');
    }
};

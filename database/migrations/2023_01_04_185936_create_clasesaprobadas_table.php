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
        Schema::create('clasesaprobadas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('clase_id');

            $table->unique(['student_id', 'clase_id']);

            // protejer student_id y clase_id con una llave foranea
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete('cascade');


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
        Schema::dropIfExists('clasesaprobadas');
    }
};

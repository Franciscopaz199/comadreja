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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->nullable()->unsigned();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->string('accountnumber')->unique()->nullable();
            $table->bigInteger('uni')->nullable()->unsigned();
            $table->foreign('uni')->references('id')->on('unis')->onDelete('cascade');
            $table->bigInteger('carrera')->nullable()->unsigned();
            $table->foreign('carrera')->references('id')->on('carreras')->onDelete('cascade');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
};

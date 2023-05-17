<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('jefesDepartamento', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('depto_id')->nullable()->unsigned();
            $table->foreign('depto_id')->references('id')->on('departamentos');
            $table->bigInteger('uni_id')->nullable()->unsigned();
            $table->foreign('uni_id')->references('id')->on('unis');
            $table->string('accountnumber')->unique()->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('jefes_departamento');
    }
};

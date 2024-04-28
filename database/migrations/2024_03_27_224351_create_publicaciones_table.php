<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->integer('id');
            $table->string('titulo', 350)->nullable();
            $table->string('revision', 350)->nullable();
            $table->year('fecha')->nullable();
            $table->string('acceso', 350)->nullable();
            $table->integer('id_academico');
            $table->string('img_path', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}

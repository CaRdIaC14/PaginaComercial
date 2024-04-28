<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->integer('id');
            $table->string('Nombre', 250);
            $table->string('correo', 30);
            $table->string('fono', 20)->nullable();
            $table->string('cargo', 250)->nullable();
            $table->text('descripcion')->nullable();
            $table->text('grado_academico')->nullable();
            $table->text('area_interes')->nullable();
            $table->boolean('es_academico')->default(0);
            $table->string('img_path', 250)->nullable();
            $table->string('linkedin', 250)->nullable();
            $table->string('google_scholar', 250)->nullable();
            $table->string('researchgate', 250)->nullable();
            $table->string('web', 250)->nullable();
            $table->integer('jerarquia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}

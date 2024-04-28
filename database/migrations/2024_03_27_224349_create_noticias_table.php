<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('titulo', 250);
            $table->timestamp('fecha')->useCurrent()->useCurrentOnUpdate()->comment("current_timestamp()");
            $table->text('descripcion');
            $table->string('img_path', 250);
            $table->string('correo', 45);
            $table->string('link', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}

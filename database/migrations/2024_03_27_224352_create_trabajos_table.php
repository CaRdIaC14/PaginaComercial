<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->integer('id');
            $table->string('cargo', 300);
            $table->string('empresa', 300);
            $table->text('descripcion');
            $table->timestamp('fecha')->useCurrent();
            $table->string('ciudad', 300)->nullable();
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
        Schema::dropIfExists('trabajos');
    }
}

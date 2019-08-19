<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deaths', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('libro', 50);
            $table->string('acta', 50);
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('dni', 8)->nullable();
            $table->date('fecha_de_registro');
            $table->string('partida', 250)->nullable();

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
        Schema::dropIfExists('deaths');
    }
}

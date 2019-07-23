<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('births', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('libro', 50);
            $table->string('acta', 50);
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('dni', 8)->nullable();
            $table->date('fecha_de_registro');
            $table->string('partida', 250);
            
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
        Schema::dropIfExists('births');
    }
}

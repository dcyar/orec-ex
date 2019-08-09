<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinglenessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singlenesses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->string('dni', 8);
            $table->string('domicilio', 150);
            $table->date('fecha_de_expedicion');
            $table->string('libro', 5);
            $table->string('acta', 5);
            
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
        Schema::dropIfExists('singlenesses');
    }
}

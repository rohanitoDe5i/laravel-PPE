<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
	    $table->datetime('horairedebut');
	    $table->datetime('horairefin');
            $table->timestamps();
	    $table->primary(array('horairedebut','horairefin'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaire');
    }
}

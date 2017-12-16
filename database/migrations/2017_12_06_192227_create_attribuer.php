<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttribuer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribuer', function (Blueprint $table) {
            $table->datetime('horairedebut');
    	    $table->datetime('horairefin');
    	    $table->integer('numplace');
    	    $table->integer('iduser')->unsigned();
            $table->timestamps();
    	    $table->primary(array('horairedebut','horairefin','numplace','iduser'));
    	    $table->foreign(array('horairedebut','horairefin'))->references(array('horairedebut','horairefin'))->on('horaire');
    	    $table->foreign('numplace')->references('numplace')->on('place');
    	    $table->foreign('iduser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribuer');
    }
}

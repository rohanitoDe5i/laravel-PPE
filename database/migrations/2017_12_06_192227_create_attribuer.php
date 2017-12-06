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
            $table->datetime('horairedebut')->primary();
	    $table->datetime('horairefin')->primary();
	    $table->integer('numplace')->primary();
	    $table->integer('iduser')->primary();
            $table->timestamps();
	    $table->foreign('horairedebut')->references('horairedebut')->on('horaire')->onDelete('cascade');
	    $table->foreign('horairefin')->references('horairefin')->on('horaire')->onDelete('cascade');
	    $table->foreign('numplace')->references('numplace')->on('place')->onDelete('cascade');
	    $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade');
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

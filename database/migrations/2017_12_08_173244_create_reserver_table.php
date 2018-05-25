<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserver', function (Blueprint $table) {
            $table->date('finperiode');
            $table->integer('id')->unsigned()->foreign('idmembres')->references('id')->on('membres');
            $table->integer('idplace')->unsigned()->foreign('idplace')->references('idplace')->on('places');
            $table->date('debutperiode')->foreign('debutperiode')->references('debutperiode')->on('periodes');
            $table->primary(array('id', 'idplace', 'debutperiode'));
            $table->boolean('valider')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserver');
    }
}

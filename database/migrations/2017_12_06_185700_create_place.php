<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place', function (Blueprint $table) {
	    $table->integer('numplace')->primary();
        });

        DB::table('place')->insert([
        ['numplace' => '1'],
        ['numplace' => '2'],
        ['numplace' => '3'],
        ['numplace' => '4'],
        ['numplace' => '5'],
        ['numplace' => '6'],
        ['numplace' => '7'],
        ['numplace' => '8'],
        ['numplace' => '9'],
        ['numplace' => '10']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('place', function (Blueprint $table) {
            //
        });
    }
}

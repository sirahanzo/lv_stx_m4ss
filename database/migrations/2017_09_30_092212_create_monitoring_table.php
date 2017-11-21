<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring', function (Blueprint $table) {
            $table->increments('id');
            $table->double('value');
            $table->smallInteger('alarm');
            //$table->double('min');
            //$table->double('max');

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
        Schema::drop('monitoring');
    }
}

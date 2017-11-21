<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlarmTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarm_temp', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('node_id');
            $table->integer('parameter_id');
            $table->double('value');
            $table->double('treshold');
            $table->smallInteger('alarm');
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
        Schema::drop('alarm_temp');
    }
}

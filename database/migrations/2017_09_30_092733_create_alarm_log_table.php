<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlarmLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarm_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parameter_id');
            $table->double('value');
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
        Schema::drop('alarm_log');
    }
}

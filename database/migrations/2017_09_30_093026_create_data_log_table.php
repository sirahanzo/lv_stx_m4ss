<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parameter_id');
            $table->double('value');
            $table->smallInteger('alarm');
            $table->double('min');
            $table->double('max');

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
        Schema::drop('data_log');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParameterAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_all', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',255);
            $table->char('unit',50)->default('&nbsp;');
            $table->smallInteger('node_id')->default(1);

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
        Schema::drop('parameter_all');
    }
}

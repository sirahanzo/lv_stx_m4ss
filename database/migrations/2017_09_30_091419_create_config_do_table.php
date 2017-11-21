<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigDoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_do', function (Blueprint $table) {
            $table->increments('id');
            $table->char('parameter',255);
            $table->enum('state',['enable','disable']);
            $table->enum('trigger',['0','1']);
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
        Schema::drop('config_do');
    }
}

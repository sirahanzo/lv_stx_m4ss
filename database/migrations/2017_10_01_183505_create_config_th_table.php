<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigThTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_th', function (Blueprint $table) {
            $table->increments('id');
            $table->char('parameter',255);
            $table->double('min');
            $table->double('max');
            $table->double('scale');
            $table->enum('state',['enable','disable']);
            $table->char('unit',50);
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
        Schema::dropIfExists('config_th');
    }
}

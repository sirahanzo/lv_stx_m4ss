<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_info', function (Blueprint $table) {
            $table->increments('id');
            $table->char('site_id',20);
            $table->char('device_id',20);
            $table->char('name',255);
            $table->text('address');
            $table->char('sn',25);
            $table->char('pn',25);
            $table->char('model',25);
            $table->char('hardware',25);
            $table->char('software',25);
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
        Schema::drop('site_info');
    }
}

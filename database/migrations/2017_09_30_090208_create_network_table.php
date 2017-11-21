<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ipaddress',15);
            $table->char('netmask',15);
            $table->char('gateway',15);
            $table->char('snmp1',15);
            $table->char('snmp2',15);
            $table->char('ip_server',15);
            $table->enum('active_repeat',['enable','disable']);
            $table->smallInteger('repeat_times');
            $table->smallInteger('repeat_rate');
            $table->char('poll_path',255);
            $table->char('alarm_path',255);
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
        Schema::drop('network');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerAlarmLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('alarm_log_trigger', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->timestamps();
        //});
        DB::unprepared('
        CREATE TRIGGER insert_alarm_log BEFORE UPDATE ON monitoring
            FOR EACH ROW
            BEGIN
                IF NEW.alarm != OLD.alarm 
                THEN
                INSERT INTO alarm_log (parameter_id,updated_at,value,alarm) VALUES(NEW.id,NEW.updated_at,NEW.value,NEW.alarm);
                END IF;
             END   
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('alarm_log_trigger');
        DB::unprepared('DROP TRIGGER `insert_alarm_log` ');
    }
}

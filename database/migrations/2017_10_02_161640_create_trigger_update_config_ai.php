<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateConfigAi extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insert_parameter_config_ai AFTER INSERT on config_ai
  FOR EACH ROW
  BEGIN
    INSERT INTO parameter_all(id,name,unit) VALUES (NEW.id,NEW.parameter,NEW.unit);
  END;
        ');

        DB::unprepared('
        CREATE TRIGGER update_parameter_config_ai BEFORE UPDATE on config_ai
  FOR EACH ROW
  BEGIN
    UPDATE parameter_all SET id=NEW.id,name=NEW.parameter WHERE id=OLD.id; 
  END;
        ');

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('trigger_config_ai');
        DB::unprepared('DROP TRIGGER insert_parameter_config_ai');
        DB::unprepared('DROP TRIGGER update_parameter_config_ai');

    }
}

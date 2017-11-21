<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateConfigSps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insert_parameter_config_sps AFTER INSERT on config_sps
  FOR EACH ROW
  BEGIN
    INSERT INTO parameter_all(id,name,unit) VALUES (NEW.id,NEW.parameter,NEW.unit);
  END;
        ');
        DB::unprepared('
        CREATE TRIGGER update_parameter_config_sps BEFORE UPDATE on config_sps
  FOR EACH ROW
  BEGIN
      UPDATE parameter_all set id=NEW.ID,name=NEW.parameter,unit=NEW.unit WHERE id=OLD.id;
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
        DB::unprepared('DROP TRIGGER insert_parameter_config_sps');
        DB::unprepared('DROP TRIGGER update_parameter_config_sps');
    }
}

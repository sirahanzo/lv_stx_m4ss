<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateConfigTh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insert_parameter_config_th AFTER INSERT on config_th
  FOR EACH ROW
  BEGIN
    INSERT INTO parameter_all(id,name,unit) VALUES (NEW.id,NEW.parameter,NEW.unit);
  END;
        ');
        DB::unprepared('
        CREATE TRIGGER update_parameter_config_th BEFORE UPDATE on config_th
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
        DB::unprepared('DROP TRIGGER insert_parameter_config_th');
        DB::unprepared('DROP TRIGGER update_parameter_config_th');
    }
}

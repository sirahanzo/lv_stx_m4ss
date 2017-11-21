<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUpdateConfigDo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER insert_parameter_config_do AFTER INSERT on config_do
  FOR EACH ROW
  BEGIN
    INSERT INTO parameter_all(id,name) VALUES (NEW.id,NEW.parameter);
  END;
        ');
        DB::unprepared('
        CREATE TRIGGER update_parameter_config_do BEFORE UPDATE on config_do
  FOR EACH ROW
  BEGIN
         UPDATE parameter_all set id=NEW.id,name=NEW.parameter WHERE id=OLD.id;

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
        DB::unprepared('DROP TRIGGER insert_parameter_config_do');
        DB::unprepared('DROP TRIGGER update_parameter_config_do');
    }
}

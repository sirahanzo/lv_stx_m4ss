<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model {


    protected $table = 'monitoring';


    public function configAi()
    {
        return $this->hasOne(ConfigAi::class, 'id', 'id');
    }


    public function configDi()
    {
        return $this->hasOne(ConfigDi::class, 'id', 'id');
    }


    public function configTh()
    {
        return $this->hasOne(ConfigTh::class, 'id', 'id');
    }


    public function configSPS()
    {
        return $this->hasOne(ConfigSPS::class, 'id', 'id');
    }

}

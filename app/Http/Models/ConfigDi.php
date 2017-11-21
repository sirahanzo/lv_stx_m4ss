<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigDi extends Model {


    protected $table = 'config_di';

    protected $fillable = ['parameter', 'state', 'trigger'];


    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class, 'id', 'id');
    }

}

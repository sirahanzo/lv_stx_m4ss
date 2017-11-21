<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigTh extends Model {


    protected $table = 'config_th';

    protected $fillable = ['parameter', 'min', 'max', 'scale', 'state', 'unit'];


    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class, 'id', 'id');
    }

}

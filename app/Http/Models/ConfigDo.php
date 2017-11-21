<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigDo extends Model
{
    //
    protected $table = 'config_di';

    protected $fillable =['parameter','state','trigger'];

}

<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    //
    protected $table = 'site_info';

    protected $fillable = ['site_id','device_ic','name','sn','pn','model','hardware','software'];

}

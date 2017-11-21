<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $table = 'network';

    protected $fillable = ['ipaddress', 'netmask', 'gateway', 'snmp_1', 'snmp_2', 'ip_server', 'active_repeat', 'repeat_time',
        'repeat_rate', 'poll_path', 'alarm_path'];

}

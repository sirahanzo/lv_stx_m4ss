<?php

namespace App\Http\Controllers;

use App\Http\Requests\DtimeRequest;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function dateTime()
    {
        return view('stx.setting_date_time');
    }


    public function saveDateTime(DtimeRequest $request)
    {
        $time = $request->get('time');
        $new_date = date("d M Y", strtotime($request->get('date')));
        $char = '"';

        shell_exec(" echo > /var/www/change_time.sh ");
        shell_exec(" echo '#!/bin/bash -e' >> /var/www/change_time.sh ");
        shell_exec(" echo 'sudo date -s $char $new_date $time $char ' >> /var/www/change_time.sh ");
        shell_exec(" echo 'sudo hwclock --set --date $char $new_date $time $char ' >> /var/www/change_time.sh ");

        //execute changetime script
        shell_exec("sh /var/www/change_time.sh");
        shell_exec("sudo  hwclock -w");

        return response('OK',200);
    }

    public function siteInformation()
    {
        return view('stx.settings_siteinfo');
    }


    public function saveSiteInformation()
    {

        return response ('OK',200);
    }

    public function network()
    {
        //echo 'Network';
        return view('stx.settings_networks');
    }

    public function analogInput()
    {
        //echo 'AnalogInput';
        return view('stx.settings_ai');
    }

    public function digitalInput()
    {
        //echo 'DigitalInput';
        return view('stx.settings_di');
    }

    public function temperatureHumidity()
    {
        //echo 'Temperature';
        return view('stx.settings_th');
    }

    public function solarPanel()
    {
        //echo 'SolarPanel';
        return view('stx.settings_sps');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Models\ConfigAi;
use App\Http\Models\Monitoring;
use App\Http\Traits\StxTraits;
use Illuminate\Http\Request;

class MonitoringController extends Controller {


    use StxTraits;


    public function analogInput()
    {
        $data['ai'] = $this->getAnalogInput();

        return view('stx.monitoring_ai', $data);
    }


    public function ajaxAnalogInput()
    {
        $data['ai'] = $this->getAnalogInput();

        return view('stx._ajax_ai', $data);
    }


    public function digitalInput()
    {
        $data['di'] = $this->getDigitalInput();

        return view('stx.monitoring_di', $data);
    }


    public function ajaxDigitalInput()
    {
        $data['di'] = $this->getDigitalInput();

        return view('stx._ajax_di', $data);
    }


    public function temperatureHumidity()
    {
        $data['th'] = $this->getTemperature();

        return view('stx.monitoring_th', $data);
    }


    public function ajaxTemperatureHumidity()
    {
        $data['th'] = $this->getTemperature();

        return view('stx._ajax_th', $data);
    }


    public function solarPanel()
    {
        $data['sps1'] = $this->getSPS([901, 902, 903, 904, 905, 907, 908, 909, 910]);
        $data['sps2'] = $this->getSPS( [921, 922, 923, 924, 925, 927, 928, 929, 930]);
        $data['chg1'] = $this->getSPS([906]);
        $data['chg2'] = $this->getSPS([926]);
        $data['sett'] = $this->getSPS([911,931]);
        //$data['sett2'] = $this->getSPS([931]);

        //dd($data['sps1']);
        return view('stx.monitoring_sps', $data);
    }


    public function ajaxSolarPanel()
    {
        $data['sps1'] = $this->getSPS([901, 902, 903, 904, 905, 907, 908, 909, 910]);
        $data['sps2'] = $this->getSPS( [921, 922, 923, 924, 925, 927, 928, 929, 930]);
        $data['chg1'] = $this->getSPS([906]);
        $data['chg2'] = $this->getSPS([926]);
        $data['sett'] = $this->getSPS([911,931]);
        //$data['sett2'] = $this->getSPS([931]);

        //dd($data['sps1']);
        return view('stx._ajax_sps', $data);
    }


}

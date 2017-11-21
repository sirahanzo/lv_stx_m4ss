<?php
/**
 * Created by PhpStorm.
 * User: UNIX
 * Date: 10/3/2017
 * Time: 4:43 PM
 */

namespace App\Http\Traits;


use App\Http\Models\ConfigAi;
use App\Http\Models\ConfigDi;
use App\Http\Models\ConfigSPS;
use App\Http\Models\ConfigTh;

trait StxTraits {


    public function getAnalogInput()
    {
        return ConfigAi::with('monitoring')->whereBetween('id', [1, 3])->get();
    }


    public function getDigitalInput()
    {
        return ConfigDi::with('monitoring')->whereBetween('id', [401, 402])->orderBy('id', 'dsc')->get();
    }


    public function getTemperature()
    {
        return ConfigTh::with('monitoring')->whereIn('id', [201, 203])->get();
    }


    public function getSPS($id)
    {
        return ConfigSPS::with('monitoring')->whereIn('id',$id)->get();
    }


}
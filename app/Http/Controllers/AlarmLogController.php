<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlarmLogController extends Controller
{
    //
    public function index()
    {
        //echo 'AlarmLog';
        return view('stx.log_alarm');
    }
}

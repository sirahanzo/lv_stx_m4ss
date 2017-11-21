<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataLogController extends Controller
{
    //
    public function index()
    {
        //echo 'datalog';
        return view('stx.log_monitoring');
    }
}

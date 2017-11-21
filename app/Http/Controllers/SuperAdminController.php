<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    //
    public function index()
    {
        echo 'SuperAdmin';
    }


    public function factoryReset()
    {
        echo 'FactoryReset';
    }

    public function userAdministration()
    {
        echo 'UserAdministration';
    }
}

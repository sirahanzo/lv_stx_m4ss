<?php

namespace App\Http\Controllers;

use App\Http\Models\Network;
use App\Http\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller {


    public function index()
    {
        $data['site_info'] = SiteInfo::first();
        $data['network'] = Network::first();

        return view('stx.siteinfo', $data);

    }
}

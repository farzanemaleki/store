<?php

namespace App\Http\Controllers\site;

use App\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteInfoController extends Controller
{
    public function index()
    {
        $Info = SiteInfo::whereId(1)->first();
        return view('site.contactUs.contactUs' , compact('Info'));
    }
}

<?php

namespace App\Http\Controllers\site;

use App\Partner;
use App\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutUsController extends Controller
{
    public function index(){
        $info = SiteInfo::whereId(1)->first();
        $allPartners = Partner::all();
        return view('site.aboutUs.aboutUs', compact(['info' , 'allPartners']));
    }
}

<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QAndAController extends Controller
{
    public function index(){
        return view('site.Q&A.Q&A');
    }
}

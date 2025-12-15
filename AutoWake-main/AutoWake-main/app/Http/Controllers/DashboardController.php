<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function exibe_Dashboard (Request $resquest){
        return view('Dashboard');
    }
}

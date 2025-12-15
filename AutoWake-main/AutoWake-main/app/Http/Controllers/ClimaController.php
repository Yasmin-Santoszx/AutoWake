<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimaController extends Controller
{
    public function exibe_clima (Request $resquest){
        return view('Clima_API');
    }
}

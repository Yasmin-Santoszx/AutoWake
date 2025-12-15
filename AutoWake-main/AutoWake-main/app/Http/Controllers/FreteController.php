<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreteController extends Controller
{
    public function exibe_Fretes (Request $resquest){
        return view('Cadastro_Fretes');
    }
}

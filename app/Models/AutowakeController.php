<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class AutowakeController extends Model

{
      public function exibe_inicial (Request $resquest){
        return view('AutoWake');
    }
    
}
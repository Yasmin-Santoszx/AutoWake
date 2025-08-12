<?php

namespace App\Models;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class TabelasController extends Model
{
     public function exibe_Tabelas (Request $request){
        return view('Tabelas_Funcionario');
    }
}

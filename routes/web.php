<?php

use Illuminate\Support\Facades\Route;
use App\Models\AutowakeController;
use App\Models\TabelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AutoWake', [AutowakeController::class, 'exibe_inicial']);

Route::get('/Tabelas', [TabelasController::class, 'exibe_tabelas'])->name ('#');

Route::get('/Pagina', [AutowakeController::class, 'pagina_homem'])->name ('pagina_homem');
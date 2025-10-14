<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutowakeController;
use App\Http\Controllers\TabelasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\PrincipalConttroller;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\DatableController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RotasController;
use App\Http\Middleware\Auth_API as MiddlewareAuth_API;



Route::get('/', function () {
    return view('welcome');
});



Route::get('Auth_API', [MiddlewareAuth_API::class]);

Route::get('/AutoWake', [AutowakeController::class, 'exibe_inicial'])->name ('exibe_pricipal');

Route::get('/Tabelas', [TabelasController::class, 'exibe_tabelas'])->name ('exibe_todas_as_telas');

Route::get('/Cadastros', [CadastrosController::class, 'exibe_cadastros'])->name ('exibe_cadastros');

Route::get('/Principal', [PrincipalConttroller::class, 'exibe_principal'])->name ('exibe_principal');

Route::get('/Cadastro_Caminhao', [CaminhaoController::class, 'exibe_caminhao'])->name ('exibe_caminhao');

Route::get('/Cadastro_Fretes', [FreteController::class, 'exibe_Fretes'])->name('exibe_Fretes');

Route::get('/Dashboard', [DashboardController::class, 'exibe_Dashboard'])->name('exibe_Dashboard');

Route::get('/Datatble', [DatableController::class, 'exibe_Datable'])->name('exibe_Datable');

Route::get('/Listagroup', [ListaController::class, 'exibe_listas'])->name('exibe_listas');

Route::get('Datable', [DatableController::class, 'exibe_Datable'])->name('exibe_Datable');

Route::get('Perfil', [PerfilController::class, 'exibe_Perfil'])->name('exibe_meu_perfil');

Route::get('Editar_Perfil', [EditarController::class, 'exibe_editarperfil'])->name('exibe_editarperfil');

Route::get('Iniciar_Rotas', [RotasController::class, 'exibe_rotas'])->name('exibe_rotas');

Route::resource('relatorios', RelatorioController::class);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\Auth_API;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Mail;


Route::get('/user', function (Request $request) {
    return $request->user();

})->middleware('auth:sanctum');

Route::middleware([Auth_API::class])->group(function () {



Route::post('PrimeiroPdf', [AuthController::class, 'mostrar_pdf']);

Route::post('/relatorio/salvar', [RelatorioController::class, 'salvar_relatorio']);
Route::post('/relatorio/salvar', [RelatorioController::class, 'salvar_relatorio']);
Route::get('/relatorio/listar', [RelatorioController::class, 'listar_relatorios']);
Route::get('/relatorio/exibir/{id}', [RelatorioController::class, 'exibir_relatorio']);
Route::put('/relatorio/editar/{id}', [RelatorioController::class, 'editar_relatorio']);
Route::delete('/relatorio/deletar/{id}', [RelatorioController::class, 'deletar_relatorio']);
Route::get('/relatorios-filtrar', [RelatorioController::class, 'filtrar_relatorios']);


});

Route::post('/login',[AuthController::class,'login']);



Route::post('/register', function(Request $request) {
    $request->validate([
        "email" => "required|string|email|unique:users",
        "name" => "required|string",
        "password" => "required|string|min:6",
    ]);

    $numericCode = rand(100000, 999999);

    $user = User::create([
        "email" => $request->email,
        "name" => $request->name,
        "password" => Hash::make($request->password),
        "codigo" => $numericCode
    ]);

    // Envia o e-mail com o código
    Mail::to($user->email)->send(new VerificationCodeMail($user));

    return response()->json([
        "message" => "Cadastro realizado com sucesso. Verifique seu e-mail.",
    ]);
});
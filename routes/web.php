<?php

use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reservaController;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/projetos', [ProjetosController::class, 'projetos'])->name('projetos');
Route::get('/home', [HomeController::class, 'home'])->name('home');
 Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');
Route::resource('clientes', ClientesController::class);
Route::get('/reserva', [reservaController::class, 'reserva'])->name('reserva');
  
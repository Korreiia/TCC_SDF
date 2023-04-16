<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\solicitacaoController;
use App\Http\Controllers\inventarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [usuarioController::class, 'loginView']);

//
Route::get('/criar_conta', [usuarioController::class, 'criarView']);
Route::post('/criar_conta', [usuarioController::class, 'criarUsuario']);
//

Route::get('/home', [usuarioController::class, 'homeView']);

//
Route::get('/inventario', [inventarioController::class, 'inventarioView']);
Route::get('/criar_inventario', [inventarioController::class, 'criarinventarioView']);
Route::post('/criar_inventario', [inventarioController::class, 'criarInventario']);

//

//
Route::get('/solicitacao', [solicitacaoController::class, 'soliciView']);
Route::get('/criar_solicitacao', [solicitacaoController::class, 'criar_soliciView']);
Route::post('/criar_solicitacao', [solicitacaoController::class, 'criarSolicitacao']);
//
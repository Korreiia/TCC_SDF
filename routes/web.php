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
Route::get('/{id}/editar_inventario', [inventarioController::class, 'editarInventario'])->where('id', '[0-9]+')->name('editarInventario');
Route::put('/{id}/atualizar_inventario', [inventarioController::class, 'atualizarInventario'])->where('id', '[0-9]+')->name('atualizarInventario');
Route::delete('/{id}/deletar_inventario', [inventarioController::class, 'deletarInventario'])->where('id', '[0-9]+')->name('deletarInventario');

//

//
Route::get('/solicitacao', [solicitacaoController::class, 'soliciView']);
Route::get('/criar_solicitacao', [solicitacaoController::class, 'criar_soliciView']);
Route::post('/criar_solicitacao', [solicitacaoController::class, 'criarSolicitacao']);
Route::get('/{id}/editar_solicitacao', [solicitacaoController::class, 'editarSolicitacao'])->where('id', '[0-9]+')->name('editarSolicitacao');
Route::put('/{id}/atualizar_solicitacao', [solicitacaoController::class, 'atualizarSolicitacao'])->where('id', '[0-9]+')->name('atualizarSolicitacao');
Route::delete('/{id}/deletar_solicitacao', [solicitacaoController::class, 'deletarSolicitacao'])->where('id', '[0-9]+')->name('deletarSolicitacao');

//
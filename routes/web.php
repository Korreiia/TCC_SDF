<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
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

Route::get('/solicitacao', [usuarioController::class, 'soliciView']);
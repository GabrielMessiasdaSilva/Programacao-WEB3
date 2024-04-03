<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContatoController::class, "index"]); 


Route::post("/adicionar", [ContatoController::class, "adicionar"]);
Route::get("/editar/{id}", [ContatoController::class, "editar"]);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);
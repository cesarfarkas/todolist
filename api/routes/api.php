<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List artigos
Route::get('tarefas', [TarefaController::class, 'index']);

// List single artigo
Route::get('tarefa/{id}', [TarefaController::class, 'show']);

// Create new tarefa
Route::post('tarefa', [TarefaController::class, 'store']);

// Update tarefa
Route::put('tarefa/{id}', [TarefaController::class, 'update']);

// Delete tarefa
Route::delete('tarefa/{id}', [TarefaController::class,'destroy']);
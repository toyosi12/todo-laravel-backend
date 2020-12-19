<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::post('/create', [TodoController::class, 'create']);
Route::get('/todos', [TodoController::class, 'index']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::delete('/delete/{todo}', [TodoController::class, 'delete']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/tasks', [TaskController::class, 'create']);
Route::get('/tasks', [TaskController::class, 'getAll']);
Route::delete('/tasks/{id}', [TaskController::class, 'delete']);
Route::get('/tasks/{id}', [TaskController::class, 'getOne']);
Route::put('/tasks/{id}', [TaskController::class, 'change']);

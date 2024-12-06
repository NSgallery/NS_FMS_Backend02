<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request -> user();
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::get('tasks', [TasksController::class, 'tasks']);

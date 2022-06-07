<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



Route::get('/getUsers', [UserController::class, 'getUsers']);
Route::post('/getUser', [UserController::class, 'getUserById']);
Route::post('/logIn', [UserController::class, 'logIn']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

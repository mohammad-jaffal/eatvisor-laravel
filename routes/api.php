<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;



Route::get('/getUsers', [UserController::class, 'getUsers']);
Route::post('/getUser', [UserController::class, 'getUserById']);
Route::post('/logIn', [UserController::class, 'logIn']);
Route::post('/signUp', [UserController::class, 'signUp']);


Route::get('/getRestaurants', [RestaurantController::class, 'getRestaurants']);
Route::post('/getResto', [RestaurantController::class, 'getRestoById']);
// Route::post('/signUp', [UserController::class, 'signUp']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

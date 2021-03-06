<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;



Route::get('/getUsers', [UserController::class, 'getUsers']);
Route::post('/getUser', [UserController::class, 'getUserById']);
Route::post('/logIn', [UserController::class, 'logIn']);
Route::post('/signUp', [UserController::class, 'signUp']);
Route::post('/editProfile', [UserController::class, 'editProfile']);



Route::get('/getRestos', [RestaurantController::class, 'getRestaurants']);
Route::post('/getResto', [RestaurantController::class, 'getRestoById']);
Route::post('/addResto', [RestaurantController::class, 'addRestaurant']);



Route::get('/getReviews', [ReviewController::class, 'getReviews']);
Route::post('/getUserReviews', [ReviewController::class, 'getUserReviews']);
Route::post('/getRestoReviews', [ReviewController::class, 'getRestoReviews']);
Route::post('/addReview', [ReviewController::class, 'addReview']);
Route::post('/acceptReview', [ReviewController::class, 'acceptReview']);
Route::post('/declineReview', [ReviewController::class, 'declineReview']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

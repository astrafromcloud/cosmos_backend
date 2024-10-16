<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cities',[\App\Http\Controllers\API\CityController::class,'index']);
Route::post('/cities',[\App\Http\Controllers\API\CityController::class,'store']);
Route::get('/cities/{id}',[\App\Http\Controllers\API\CityController::class,'show']);
Route::patch('/cities/{id}',[\App\Http\Controllers\API\CityController::class,'update']);
Route::delete('/cities/{id}',[\App\Http\Controllers\API\CityController::class,'destroy']);

Route::get('/genres',[\App\Http\Controllers\API\GenreController::class,'index']);
Route::post('/genres',[\App\Http\Controllers\API\GenreController::class,'store']);
Route::get('/genres/{id}',[\App\Http\Controllers\API\GenreController::class,'show']);
Route::patch('/genres/{id}',[\App\Http\Controllers\API\GenreController::class,'update']);
Route::delete('/genres/{id}',[\App\Http\Controllers\API\GenreController::class,'destroy']);

Route::get('/orders',[\App\Http\Controllers\API\OrderController::class,'index']);
Route::post('/orders',[\App\Http\Controllers\API\OrderController::class,'store']);
Route::get('/orders/{id}',[\App\Http\Controllers\API\OrderController::class,'show']);
Route::patch('/orders/{id}',[\App\Http\Controllers\API\OrderController::class,'update']);
Route::delete('/orders/{id}',[\App\Http\Controllers\API\OrderController::class,'destroy']);

Route::get('/promotions',[\App\Http\Controllers\API\PromotionController::class,'index']);
Route::get('/promotions/code',[\App\Http\Controllers\API\PromotionController::class,'isValid']);
Route::post('/promotions',[\App\Http\Controllers\API\PromotionController::class,'store']);
Route::get('/promotions/{id}',[\App\Http\Controllers\API\PromotionController::class,'show']);
Route::patch('/promotions/{id}',[\App\Http\Controllers\API\PromotionController::class,'update']);
Route::delete('/promotions/{id}',[\App\Http\Controllers\API\PromotionController::class,'destroy']);

Route::get('/games',[\App\Http\Controllers\API\GameController::class,'index']);
Route::post('/games',[\App\Http\Controllers\API\GameController::class,'store']);
Route::get('/games/{id}',[\App\Http\Controllers\API\GameController::class,'show']);
Route::patch('/games/{id}',[\App\Http\Controllers\API\GameController::class,'update']);
Route::delete('/games/{id}',[\App\Http\Controllers\API\GameController::class,'destroy']);

Route::get('/consoles',[\App\Http\Controllers\API\ConsoleController::class,'index']);
Route::post('/consoles',[\App\Http\Controllers\API\ConsoleController::class,'store']);
Route::get('/consoles/{id}',[\App\Http\Controllers\API\ConsoleController::class,'show']);
Route::patch('/consoles/{id}',[\App\Http\Controllers\API\ConsoleController::class,'update']);
Route::delete('/consoles/{id}',[\App\Http\Controllers\API\ConsoleController::class,'destroy']);

Route::get('/users',[\App\Http\Controllers\API\UserController::class,'index']);
Route::post('/users',[\App\Http\Controllers\API\UserController::class,'store']);
Route::get('/users/{id}',[\App\Http\Controllers\API\UserController::class,'show']);
Route::patch('/users/{id}',[\App\Http\Controllers\API\UserController::class,'update']);
Route::delete('/users/{id}',[\App\Http\Controllers\API\UserController::class,'destroy']);

Route::get('/banners',[\App\Http\Controllers\API\BannerController::class,'index']);
//Route::post('/banners',[\App\Http\Controllers\API\UserController::class,'store']);
//Route::get('/banners/{id}',[\App\Http\Controllers\API\UserController::class,'show']);
//Route::patch('/banners/{id}',[\App\Http\Controllers\API\UserController::class,'update']);
//Route::delete('/banners/{id}',[\App\Http\Controllers\API\UserController::class,'destroy']);

Route::get('/carts',[\App\Http\Controllers\API\CartController::class,'index']);
Route::post('/carts',[\App\Http\Controllers\API\CartController::class,'store']);
Route::get('/carts/{id}',[\App\Http\Controllers\API\CartController::class,'show']);
Route::patch('/carts/{id}',[\App\Http\Controllers\API\CartController::class,'update']);
Route::delete('/carts/{id}',[\App\Http\Controllers\API\CartController::class,'destroy']);
Route::delete('/carts',[\App\Http\Controllers\API\CartController::class,'destroyAll']);

Route::get('/addresses',[\App\Http\Controllers\API\AddressController::class,'index']);
Route::post('/addresses',[\App\Http\Controllers\API\AddressController::class,'store']);
Route::get('/addresses/{id}',[\App\Http\Controllers\API\AddressController::class,'show']);
Route::patch('/addresses/{id}',[\App\Http\Controllers\API\AddressController::class,'update']);
Route::delete('/addresses/{id}',[\App\Http\Controllers\API\AddressController::class,'destroy']);

Route::post('/register', [\App\Http\Controllers\API\UserController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\API\UserController::class, 'login']);

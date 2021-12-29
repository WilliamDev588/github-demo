<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('/home',[\App\Http\Controllers\UserController::class, 'home']);
Route::post('/registSubmit',[\App\Http\Controllers\UserController::class, 'registerData']);
Route::get('/register',[\App\Http\Controllers\UserController::class, 'register'])->middleware('guest');
Route::view('/cart1', 'cart');


Route::get('/login',[\App\Http\Controllers\UserController::class, 'login'])->middleware('guest');
Route::post('/loginSubmit',[\App\Http\Controllers\UserController::class, 'loginData']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

Route::get('/food/all', [FoodController::class, 'AllFood'])->name('all.food');
Route::post('/food/add', [FoodController::class, 'AddFood'])->name('store.food');

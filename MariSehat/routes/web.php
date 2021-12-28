<?php

use App\Http\Controllers\UserController;
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

Route::get('/',[\App\Http\Controllers\UserController::class, 'home']);
Route::post('/registSubmit',[\App\Http\Controllers\UserController::class, 'registerData']);
Route::get('/register',[\App\Http\Controllers\UserController::class, 'register'])->middleware('guest');

Route::get('/login',[\App\Http\Controllers\UserController::class, 'login'])->middleware('guest');
Route::post('/loginSubmit',[\App\Http\Controllers\UserController::class, 'loginData']);

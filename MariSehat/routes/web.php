<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\WorkoutController;

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


// Home
Route::get('/home', [\App\Http\Controllers\UserController::class, 'home']);

// About us
Route::get('/about', [\App\Http\Controllers\UserController::class, 'about']);

// Login Register
Route::post('/registSubmit', [\App\Http\Controllers\UserController::class, 'registerData']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->middleware('guest');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->middleware('guest');
Route::post('/loginSubmit', [\App\Http\Controllers\UserController::class, 'loginData']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

// Cart
Route::view('/mycart', 'user.cart');

// Product
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'productPage']);
Route::get('/productDetail', [\App\Http\Controllers\UserController::class, 'productDetail']);


//  Calorie Calculator
Route::view('/caloriesCalculator', 'caloriesCalculator');
Route::get('/caloriesCalculator', [FoodController::class, 'AllFood2'])->name('all.food');

// Workout Calculator
Route::view('/workoutCalculator', 'workoutCalculator');
Route::get('/workoutCalculator', [WorkoutController::class, 'AllWorkout2'])->name('all.workout');


// Admin
Route::get('/admin', [\App\Http\Controllers\UserController::class, 'admin']);

// Admin Food
Route::get('/food/all', [FoodController::class, 'AllFood'])->name('all.food');
Route::post('/food/add', [FoodController::class, 'AddFood'])->name('store.food');
Route::get('/food/edit/{id}', [FoodController::class, 'Edit']);
Route::post('/food/update/{id}', [FoodController::class, 'Update']);
Route::get('/food/delete/{id}', [FoodController::class, 'Delete']);

// Admin Workout
Route::get('/workout/all', [WorkoutController::class, 'AllWorkout'])->name('all.workout');
Route::post('/workout/add', [WorkoutController::class, 'AddWorkout'])->name('store.workout');
Route::get('/workout/edit/{id}', [WorkoutController::class, 'Edit']);
Route::post('/workout/update/{id}', [WorkoutController::class, 'Update']);
Route::get('/workout/delete/{id}', [WorkoutController::class, 'Delete']);

// Admin Product
Route::post('/addProduct', [\App\Http\Controllers\ProductController::class, 'addProducts']);
Route::get('/addProduct', [\App\Http\Controllers\ProductController::class, 'addProductPage']);
Route::get('/updateProduct/{id}', [\App\Http\Controllers\ProductController::class, 'updateProductPage']);
Route::post('/updateProduct/{id}', [\App\Http\Controllers\ProductController::class, 'updateProduct']);
Route::get('/deleteProduct/{id}', [\App\Http\Controllers\ProductController::class, 'deleteProduct']);

// Admin Category
Route::get('/addCategory', [\App\Http\Controllers\CategoryController::class, 'addCategoryPage']);
Route::post('/addCategory', [\App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::get('/updateCategory/{id}', [\App\Http\Controllers\CategoryController::class, 'updateCategoryPage']);
Route::post('/updateCategory/{id}', [\App\Http\Controllers\CategoryController::class, 'updateCategory']);
Route::get('/deleteCategory/{id}', [\App\Http\Controllers\CategoryController::class, 'deleteCategory']);

// Food Test
Route::get('/tes', [FoodController::class, 'AllFoodTes']);
Route::post('/caloriesCalculator/calculate', [FoodController::class, 'CalculateCalorie'])->name('calculate.calorie');
Route::get('/foodview','FoodController@AllFood');
Route::get('/findFoodName','FoodController@findFoodName');
Route::get('/findFoodCalorie','FoodController@findFoodCalorie');
Route::get('/GetFoodCalorie', [FoodController::class, 'GetFoodCalorie']);

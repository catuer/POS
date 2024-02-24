<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyAndHealtyController;
use App\Http\Controllers\foodAndBaferageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/food-beverage', [foodAndBaferageController::class, 'index']);
    Route::get('/Beauty-healty', [BeautyAndHealtyController::class, 'index']);
    Route::get('/Home-care', [HomeController::class, 'index']);
    Route::get('/Baby-kid', [BabyKidController::class, 'index']);

Route::get('/about', [HomeController::class,'index']);
<?php

use Illuminate\Support\Facades\Route;

// auth controller
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\AspirationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[LoginController::class,'view'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');

Route::get('/aspiration',[AspirationController::class,'Create'])->name('aspiration');
Route::get('/aspiration/{slug}',[AspirationController::class,'Show']);
Route::post('/aspiration',[AspirationController::class,'Store']);
Route::put('/aspiration/{slug}',[AspirationController::class,'Edit']);
Route::delete('/aspiration/{slug}',[AspirationController::class,'Delete']);

<?php

use Illuminate\Support\Facades\Route;

// auth controller
use App\Http\Controllers\auth\LoginController;

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
    return 'hello';
});

Route::get('login',[LoginController::class,'view'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');

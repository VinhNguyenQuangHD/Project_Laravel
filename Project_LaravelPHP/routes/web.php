<?php

use App\Http\Controllers\AccountController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class,'account']);
Route::get('/main', [AccountController::class,'mainpage']);
Route::post('/register-user', [AccountController::class,'registerUser']) -> name('register-user');
Route::post('/loginprogress', [AccountController::class,'login_function']) -> name('login-progress');
Route::post('/logout', [AccountController::class,'logout_function']) -> name('logout');
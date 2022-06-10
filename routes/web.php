<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterCompanyController;
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
    return view('/pages/index');
})->name('index');
Route::get('/login', [AuthController::class, 'loginPhone'])->name('loginPhone');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'doRegister'])->name('doRegister');
Route::post('/pages', [\App\Http\Controllers\AuthController::class, 'doLoginPhone'])->name('doLoginPhone');
Route::get('/verify', [\App\Http\Controllers\AuthController::class, 'verify'])->name('verify');
Route::post('/doVerify', [\App\Http\Controllers\AuthController::class, 'doVerify'])->name('doVerify');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/geotechnic', [\App\Http\Controllers\GeotechnicController::class, 'geotechnic'])->name('geotechnic');
Route::post('/geotechnic', [\App\Http\Controllers\GeotechnicController::class, 'doGeotechnic'])->name('doGeotechnic');
Route::get('/geotechnic-result', [\App\Http\Controllers\GeotechnicController::class, 'geotechnicResult'])->name('geotechnicResult');
Route::post('/geotechnic-result', [\App\Http\Controllers\GeotechnicController::class, 'doGeotechnicResult'])->name('doGeotechnicResult');

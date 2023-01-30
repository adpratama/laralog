<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AirportCodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('default');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::resource('customer', CustomerController::class);
    Route::resource('airport_code', AirportCodeController::class);
    Route::get('/airport_code/json', [\App\Http\Controllers\AirportCodeController::class, 'data'])->name('airport_code.data');
    Route::resource('user', UserController::class);
});

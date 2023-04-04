<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
    return view('loginhome');
});

Route::view('/test' , 'loginhome');

Route::get('/login', [App\Http\Controllers\loginController::class, 'login'])->name('login');
Route::get('/suphome', function () {
    return view('suphome');
});

Route::get('/userhome', function () {
    return view('userhome');
});
Route::get('/manahome', function () {
    return view('managerhome');
});

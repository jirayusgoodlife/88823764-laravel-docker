<?php

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
    return view('loginhome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/connect', [App\Http\Controllers\HomeController::class, 'index'])->name('connect');
Route::get('/manahome', function () {
    return view('managerhome');
});
Route::get('/suphome', function () {
    return view('suphome');
});
Route::get('/userhome', function () {
    return view('userhome');
});

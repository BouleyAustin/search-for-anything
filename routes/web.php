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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/content', '\App\Http\Controllers\HomeController@showContentPage')->name('content');

Route::middleware(['auth:sanctum', 'verified'])->get('/custom', function () {
    return view('custom');
})->name('custom');

Route::get('/', function () {
    return view('landing');
})->name('landing');

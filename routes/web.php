<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth:sanctum', 'verified', 'payment'])->get('/app/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'payment'])->get('/app/content', '\App\Http\Controllers\HomeController@showContentPage')->name('content');

Route::middleware(['auth:sanctum', 'verified', 'payment'])->get('/app/custom', function () {
    return view('custom');
})->name('custom');

Route::get('/app/preview', function () {
    return view('preview');
})->name('preview');

Route::get('/app/admin', function () {
    return view('admin-portal');
})->name('admin');

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/home', function () {
    return view('landing');
})->name('home');

Route::get('/app/payment', '\App\Http\Controllers\PaymentController@show')
    ->name('payment');

Route::post('/app/payment', '\App\Http\Controllers\PaymentController@createSubscription')
    ->name('payment.post');

Route::get('/sitemap.xml', '\App\Http\Controllers\HomeController@showSiteMap')
    ->name('site-map');

Route::get('/{name}', '\App\Http\Controllers\HomeController@showSearchPage')
    ->middleware(['pageview'])
    ->name('search-page');

Route::get('/{name}/episodes/{episodeName}', '\App\Http\Controllers\HomeController@showEpisodePage')
    ->middleware(['pageview'])
    ->name('episode-page');

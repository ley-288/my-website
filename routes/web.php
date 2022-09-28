<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.new');

Route::get('/test', function () {
    return view('new');
});


Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/clear', function() {
    Artisan::call('cache:clear');
	Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('view:clear');
    return "All Clear!";
});

Route::get('/language/{lang}', [App\Http\Controllers\LanguageController::class, 'swap'])->name('lang.swap');


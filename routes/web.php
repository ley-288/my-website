<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;

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

//LOGIN AND REGISTER
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/jiant', [LoginController::class, 'userLogin'])->name('login.custom');
Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('registration/jiant', [LoginController::class, 'userRegistration'])->name('register.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

//FACEBOOK LOGIN
Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'loginWithFacebook']);

//GOOGLE LOGIN
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/marketing', function () {
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

Route::get('/language/{lang}', [LanguageController::class, 'swap'])->name('lang.swap');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('pages/admin/login');
})->name('login');

Route::get('/sign_in', [LoginController::class, 'sign_in'])->name('login.sign_in');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);
Route::resource('admin', AdminController::class)->middleware('check.session');
Route::resource('user', UserController::class)->middleware('check.session');

Route::get('captcha/{config?}', '\Mews\Captcha\CaptchaController@getCaptcha');

// For AJAX CAPTCHA refresh
Route::get('/refresh-captcha', function () {
    return response()->json(['captcha' => captcha_src()]);
});

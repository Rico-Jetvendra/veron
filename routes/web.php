<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);

Route::get('captcha/{config?}', '\Mews\Captcha\CaptchaController@getCaptcha');

// For AJAX CAPTCHA refresh
Route::get('/refresh-captcha', function () {
    return response()->json(['captcha' => captcha_src()]);
});

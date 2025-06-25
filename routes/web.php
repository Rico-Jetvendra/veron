<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\LanguageController;

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
Route::resource('productlist', ProductListController::class);
Route::resource('admin', AdminController::class)->middleware('check.session');
Route::resource('user', UserController::class)->middleware('check.session');
Route::resource('product', ProductController::class)->middleware('check.session');
Route::resource('language', LanguageController::class)->middleware('check.session');

Route::get('captcha/{config?}', '\Mews\Captcha\CaptchaController@getCaptcha');

// For AJAX CAPTCHA refresh
Route::get('/refresh-captcha', function () {
    return response()->json(['captcha' => captcha_src()]);
});

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return redirect()->back();
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsListController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('pages/admin/login');
})->name('login');

Route::get('/milestone', function () {
    return view('pages/milestone/index');
})->name('milestone');

Route::get('/sign_in', [LoginController::class, 'sign_in'])->name('login.sign_in');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/productlist/{productlist}/{id}', [ProductListController::class, 'submenu'])->name('productlist.submenu');

Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);
Route::resource('productlist', ProductListController::class);
Route::resource('newslist', NewsListController::class);
Route::resource('admin', AdminController::class)->middleware('check.session');
Route::resource('user', UserController::class)->middleware('check.session');
Route::resource('product', ProductController::class)->middleware('check.session');
Route::resource('news', NewsController::class)->middleware('check.session');

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

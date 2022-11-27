<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DachboardController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\Authenticate;


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('card', [DachboardController::class, 'Сard']);
    Route::get('profile/settings', [DachboardController::class, 'Settings']);
    Route::get('profile/special_prices', [DachboardController::class, 'SpecialPrices']);
    Route::get('profile/floading_settings', [DachboardController::class, 'FloadingSettings']);
    Route::get('profile/rg', [DachboardController::class, 'Profile']);
    Route::get('catalogs', [DachboardController::class, 'Catalog']);
    Route::get('catalog/category/{name}', [DachboardController::class, 'CatalogDetail']);
    Route::get('payment/reports', [DachboardController::class, 'Reports']);
    Route::get('payment/reports/{order}', [DachboardController::class, 'ReportsDetail']);
});

Route::prefix('api')->group(function () {
    Route::post('signup', [AuthController::class, 'Sigature']);
    Route::post('customer', [AuthController::class, 'Customer']);
    Route::post('mail', [AuthController::class, 'SendMail']);
});

Route::controller(PasswordController::class)->group(function () {
    // Маршруты запроса ссылки для сброса пароля
    Route::get('/forgot-password', 'getEmail');
    Route::post('/forgot-password', 'postEmail')->middleware('guest')->name('forgot');

    Route::post('/confirm-reset-password', 'resetPasswordAuth');
    // Маршруты сброса пароля
    Route::get('/reset/{token}', 'getReset')->middleware('guest')->name('password.reset');
    Route::get('/reset', 'notReset')->middleware('guest');
    Route::post('/reset', 'postReset')->middleware('guest');
});

Route::controller(AuthController::class)->group(function () {
    Route::match(['get', 'post'], '/', 'home')->name('index');
    Route::get('/test', 'test');
    Route::get('/info', 'info');
    Route::get('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login', 'login')->name('login');
    Route::get('/signup', 'register')->name('signup');
});


Route::get('/contact', [MainController::class, 'Сontact']);
Route::get('/doc', [MainController::class, 'Documentation']);
Route::prefix('doc')->group(function () {
    Route::get('license', [MainController::class, 'License']);
    Route::get('responsibility', [MainController::class, 'Responsibility']);
    Route::get('privatepolice', [MainController::class, 'Private']);
});
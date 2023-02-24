<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DachboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PDFController;
use App\Http\Middleware\Authenticate;


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('', [DachboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('result/search', [DachboardController::class, 'noSearch']);
    Route::post('result/search', [DachboardController::class, 'resultSearch']);
    Route::post('search', [DachboardController::class, 'searchDashboard']);
    Route::get('card', [DachboardController::class, 'Сard'])->name('card');
    Route::get('help', [DachboardController::class, 'Help']);
    Route::get('events', [DachboardController::class, 'Events']);
    Route::get('notifications', [DachboardController::class, 'Notifications']);
    Route::get('work/schedule', [DachboardController::class, 'Schedule']);
    Route::post('settings', [DachboardController::class, 'EditSettings']);
    Route::get('settings/profile', [DachboardController::class, 'Settings'])->name('settings');
    Route::match(['get', 'post'],'product/details/{id}', [DachboardController::class, 'DetailProduct']);
    Route::get('catalog', [DachboardController::class, 'Catalog']);
    Route::get('catalog/category/{name}/{limit?}/{offset?}', [DachboardController::class, 'CatalogDetail']);
    Route::get('payment/preorder/{id}', [DachboardController::class, 'preOrderViewOne']);
    Route::get('payment/preorders', [DachboardController::class, 'preOrders'])->name('preorders');
    Route::get('payment/orders', [DachboardController::class, 'Orders'])->name('orders');
    Route::get('payment/order/{invoice}', [DachboardController::class, 'Invoice']);
    Route::get('payment/record', [DachboardController::class, 'Record'])->name('record');
    Route::get('payment/record/{id}', [DachboardController::class, 'RecordDetail']);
    Route::get('account', [DachboardController::class, 'Account'])->name('account');;
    Route::get('payment/reports', [DachboardController::class, 'Reports']);
    Route::get('payment/reports/{order}', [DachboardController::class, 'ReportsDetail'])->name('order');
    Route::get('doc/{id}/{name}{extension?}', [PDFController::class, 'generatePDF'])->where(['extension' => '^(.pdf)|(.csv)|(.json)$']);
    Route::get('document/agreement', [DachboardController::class, 'Agreement'])->name('contract');
    Route::get('document/agreement/edit', [DachboardController::class, 'EditAgreement']);
    Route::post('/create/invoice', [DachboardController::class, 'createInvoice']);
    Route::post('/agreements', [DachboardController::class, 'sendAgreement']);
    Route::post('/agreements/update', [DachboardController::class, 'updateAgreement']);
    Route::post('/action/deal', [DachboardController::class, 'sendDeal']);
    Route::post('upd/pdf/export', [DachboardController::class, 'getUPD']);

    // Admin-Панель
    Route::get('admin/doc', [AdminController::class, 'adminDoc']);
    Route::get('admin/accounting', [AdminController::class, 'Accounting']);
    Route::get('admin/users', [AdminController::class, 'Users']);
    Route::get('admin/users/okved/{okved}', [AdminController::class, 'Okved']);
    Route::get('admin/user/{uuid}', [AdminController::class, 'User']);
});

Route::prefix('api')->group(function () {
    Route::post('signup', [AuthController::class, 'Sigature']);
    Route::post('customer', [AuthController::class, 'Customer']);
    Route::post('mail', [AuthController::class, 'SendMail']);
    Route::post('spares', [DachboardController::class, 'SendSpares']);
    Route::post('checkout', [DachboardController::class, 'Checkout']);
    Route::post('precheckout', [DachboardController::class, 'preCheckout']);
    Route::post('counterparty', [DachboardController::class, 'addedCounterAgent']);
    Route::post('manager', [DachboardController::class, 'Manager']);
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
    // Авторизация и Регистрация
    Route::match(['get', 'post'], '/', 'home')->name('index');
    Route::get('/signin', 'Signin')->name('signin');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login', 'login')->name('login');
    Route::get('/signup', 'register')->name('signup');
});

Route::controller(MainController::class)->group(function () {
    Route::get('/contact', 'Сontact');
    Route::get('/doc', 'Documentation');
    Route::get('/product/mersedes-benz', 'Catalog');
    Route::get('/product/mersedes-benz/{id}', 'DetailProduct');
});



Route::prefix('doc')->group(function () {
    // Страницы с Юр.документами
    Route::get('license', [MainController::class, 'License']);
    Route::get('responsibility', [MainController::class, 'Responsibility']);
    Route::get('privatepolice', [MainController::class, 'Private']);
    Route::get('return-policy', [MainController::class, 'ReturnPolicy']);
    Route::get('guaranty', [MainController::class, 'Guaranty']);
});
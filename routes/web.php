<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\EmailController;
use App\Http\Controllers\Front\StandAloneController;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    //    Auth::routes();

    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('home');


    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('front.index');
    Route::get('/home/standalone', [StandAloneController::class, 'index'])->name('front.standalone');

    Route::post('/testroute',  [EmailController::class, 'send'])->name('front.send');
});

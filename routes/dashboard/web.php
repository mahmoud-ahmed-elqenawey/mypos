<?php

use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->group(function () {

            Route::get('index', [DashboardController::class, 'index'])->name('index');
            Route::get('users', [UserController::class, 'index'])->name('users');

//            Route::resource('users', UserController::class);

        });

        // user route



});



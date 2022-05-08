<?php


use App\Http\Controllers\Admin\Authorization\AuthorizationController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

Route::controller(AuthorizationController::class)->group(function (){
    Route::get('login','login')->name('login');
    Route::post('login','login_check')->name('login_check');
});

Route::middleware(['auth'])->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard','dashboard')->name('dashboard');
    });
});

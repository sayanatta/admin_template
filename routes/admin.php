<?php


use App\Http\Controllers\Admin\Authorization\AuthorizationController;

Route::controller(AuthorizationController::class)->group(function (){
    Route::get('login','login')->name('login');
    Route::post('login','login_check')->name('login_check');
});

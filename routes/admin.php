<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'  =>  'admin'], function () {

    // Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    // Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    // Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');


     Route::get('/login', [App\Http\Controllers\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.post');
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');
    

    // Route::get('/', function () {
    //     return view('admin.dashboard.index');
    // });

    Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin.settings');
    Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin.settings.update');

});

});
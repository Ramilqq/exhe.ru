<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\Web\IndexController::class)->group(function () {
    Route::get('/{page?}', 'index')->name('index');
});

Route::controller(App\Http\Controllers\Admin\DashboardController::class)->prefix('/admin')->group(function () {
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});
Route::controller(App\Http\Controllers\Admin\IndexController::class)->prefix('/admin')->group(function () {
    Route::get('/index', 'index')->name('admin.index');
});

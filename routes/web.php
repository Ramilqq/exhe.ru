<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\Web\IndexController::class)->group(function () {
    Route::get('/{page?}', 'index')->name('index');
});

Route::controller(App\Http\Controllers\Admin\IndexController::class)->prefix('/admin')->group(function () {
    Route::get('/index', 'index')->name('admin.index');
});
Route::controller(App\Http\Controllers\Admin\PageController::class)->prefix('/admin')->group(function () {
    Route::get('/page', 'index')->name('admin.page_index');
    Route::get('/page/{page}/show', 'show')->name('admin.page_show');
    Route::get('/page/create', 'create')->name('admin.page_create');
    Route::post('/page/create', 'store')->name('admin.page_store');
    Route::get('/page/{page}/edit', 'edit')->name('admin.page_edit');
    Route::patch('/page/{page}/edit', 'update')->name('admin.page_update');
    Route::delete('/page/{page}/delete', 'delete')->name('admin.page_delete');

    Route::get('/page/{page}/content/create', 'createContent')->name('admin.page.content_create');
    Route::post('/page/{page}/content/create', 'storeContent')->name('admin.page.content_store');
    Route::get('/page/{page}/content/{content}/edit', 'editContent')->name('admin.page.content_edit');
    Route::patch('/page/{page}/content/{content}/edit', 'updateContent')->name('admin.page.content_update');
    Route::delete('/page/{page}/content/{content}/delete', 'deleteContent')->name('admin.page.content_delete');
});


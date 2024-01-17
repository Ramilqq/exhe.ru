<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth_admin:admin')->prefix('/admin')->group(function() {
    Route::controller(App\Http\Controllers\Admin\IndexController::class)->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/index', 'index')->name('admin.index');
    });
    Route::controller(App\Http\Controllers\Admin\PageController::class)->group(function () {
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
    Route::controller(App\Http\Controllers\Admin\TarifController::class)->group(function () {
        Route::get('/tarif', 'index')->name('admin.tarif_index');
        Route::get('/tarif/{tarif}/show', 'show')->name('admin.tarif_show');
        Route::get('/tarif/create', 'create')->name('admin.tarif_create');
        Route::post('/tarif/create', 'store')->name('admin.tarif_store');
        Route::get('/tarif/{tarif}/edit', 'edit')->name('admin.tarif_edit');
        Route::patch('/tarif/{tarif}/edit', 'update')->name('admin.tarif_update');
        Route::delete('/tarif/{tarif}/delete', 'delete')->name('admin.tarif_delete');
    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/user', 'index')->name('admin.user_index');
        Route::get('/user/{user}/show', 'show')->name('admin.user_show');
        Route::get('/user/create', 'create')->name('admin.user_create');
        Route::post('/user/create', 'store')->name('admin.user_store');
        Route::get('/user/{user}/edit', 'edit')->name('admin.user_edit');
        Route::patch('/user/{user}/edit', 'update')->name('admin.user_update');
        Route::delete('/user/{user}/delete', 'delete')->name('admin.user_delete');
    });

    Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('admin.logout');
    });
});

Route::prefix('/admin')->group(function() {
    Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function () {
        Route::get('/login', 'loginForm')->name('admin.login');
        Route::post('/login', 'login')->name('admin.login_request');
    
        Route::get('/registration', 'registrationForm')->name('admin.registration');
        Route::post('/registration', 'registration')->name('admin.registration_request');
    });
});

Route::middleware('guest')->group(function() {
    Route::controller(App\Http\Controllers\Web\AuthController::class)->group(function () {
        Route::get('/account/login', 'loginForm')->name('login');
        Route::post('/account/login', 'login')->name('login_request');
    
        Route::get('/account/registration', 'registrationForm')->name('registration');
        Route::post('/account/registration', 'registration')->name('registration_request');
    });
});

Route::middleware('auth:web')->group(function() {
    Route::controller(App\Http\Controllers\Web\UserController::class)->group(function () {
        Route::get('/account/organization', 'organization')->name('web.user_organization');
        Route::patch('/account/organization', 'organizationAdd')->name('web.user_organization_add');
        Route::delete('/account/organization', 'organizationRemove')->name('web.user_organization_remove');

        Route::get('/account/tarif', 'tarif')->name('web.user_tarif');
        Route::post('/account/tarif-sub', 'tarifSub')->name('web.user_tarif_sub');
        Route::post('/account/tarif-unsub', 'tarifUnsub')->name('web.user_tarif_unsub');

        Route::get('/account/profile', 'profile')->name('web.user_profile');
        Route::put('/account/profile', 'profileUpdate')->name('web.user_profile_update');
        Route::patch('/account/profile', 'profilePasswordUpdate')->name('web.user_profile_password_update');
    });

    Route::controller(App\Http\Controllers\Web\AuthController::class)->group(function () {
        Route::get('/account/logout', 'logout')->name('logout');
    });
});


Route::controller(App\Http\Controllers\Web\IndexController::class)->group(function () {
    Route::get('/{page?}', 'index')->name('index');
});
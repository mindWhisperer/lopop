<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EndpointController;
use App\Providers\AuthService;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->controller(EndpointController::class)
    ->group(function () {
        Route::get('/', [Controller::class, 'index'])->name('home');
        Route::get('detail/{id}', [Controller::class, 'detail'])->name('detail');
        Route::get('stalice', [Controller::class, 'bestOff'])->name('best-of');

        Route::get('login', [Controller::class, 'login'])->name('login');
        Route::get('logout', [Controller::class, 'logout'])->name('logout');
        Route::get('register', [Controller::class, 'register'])->name('register');

        Route::prefix('panel')->controller(EndpointController::class)
            ->middleware([AuthService::class])
            ->group(function () {
                Route::get('profil', [Controller::class, 'profile'])->name('profile');
                Route::get('pridat', [Controller::class, 'addBook'])->name('add-book');
                Route::get('uprava/{id}', [Controller::class, 'editBook'])
                    ->where('id', '[0-9]+')
                    ->name('edit-book');
            });
    });

Route::prefix('/api/v1')->controller(EndpointController::class)
    //->middleware('auth-api')
    ->group(function () {
        // create
        Route::post('/', 'create');
        // read
        Route::get('/', 'getAll');
        Route::get('/{id}', 'get')->where('id', '[0-9]+');
        // update
        Route::put('/{id}', 'update')->where('id', '[0-9]+');
        // delete
        Route::delete('/{id}', 'delete')->where('id', '[0-9]+');;
    });

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);

Route::get('/detail/{id}', [\App\Http\Controllers\Controller::class, 'detail']);

Route::get('/stalice', [\App\Http\Controllers\Controller::class, 'stalice']);

Route::get('/pridat', [\App\Http\Controllers\Controller::class, 'pridat']);

Route::get('/uprava', [\App\Http\Controllers\Controller::class, 'uprava']);


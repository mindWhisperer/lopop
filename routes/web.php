<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);

Route::get('/stalice', function () {
    return view('BckStalice');
});
Route::get('/pridat', function () {
    return view('BckPridat');
});



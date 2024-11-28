<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('BckIndex');
});
Route::get('/stalice', function () {
    return view('BckStalice');
});
Route::get('/pridat', function () {
    return view('BckPridat');
});



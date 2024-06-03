<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.index');
});

Route::get('/test', function () {
    return view('test');
});
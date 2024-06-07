<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.index');
});

Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/home', [LoginController::class, 'home'])->name('home');

Route::get('/test', function () {
    return view('test');
});
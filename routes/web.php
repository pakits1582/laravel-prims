<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.index');
})->name('login_index');

Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/home', [LoginController::class, 'home'])->name('home')->middleware('auth');

Route::get('/test', function () {
    return view('test');
})->middleware('auth');

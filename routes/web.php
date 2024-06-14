<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.index');
})->name('login_index');

Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/home', [LoginController::class, 'home'])->name('home')->middleware('auth');

Route::middleware(['auth', 'inaccess:employees'])
    ->prefix('employees')
    ->controller(EmployeeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('employees.index');
        Route::get('/create', 'create')->name('employees.create');
    });

Route::middleware(['auth', 'inaccess:offices'])
    ->prefix('offices')
    ->controller(OfficeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('offices.index');
        Route::get('/create', 'create')->name('offices.create');
        Route::get('/{office}/edit', 'edit')->name('offices.edit');
        Route::post('/', 'store')->name('offices.store');
        Route::put('/{office}', 'update')->name('offices.update');
        Route::delete('/{office}', 'destroy')->name('offices.destroy');
    });


Route::get('/test', function () {
    return view('test');
})->middleware('auth');

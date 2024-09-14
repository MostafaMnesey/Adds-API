<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('adds.start');

});
Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register')->name('register.store');
    Route::post('login', 'login')->name('login');
});
Route::get('/Register', [AuthController::class, 'showRegister'])->name('register');




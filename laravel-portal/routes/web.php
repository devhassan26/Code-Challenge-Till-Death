<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::post('/register',[AuthController::class, 'register'])->name('register.submit');
Route::post('/login',[AuthController::class, 'login'])->name('login.submit');
Route::middleware('auth')->group(function(){
    Route::view('/dashboard','admin.dashboard.index')->name('dashboard');
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});

<?php

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\ComingSoon;

//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');

//backend
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('home')->middleware('comingSoon');
});

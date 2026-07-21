<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
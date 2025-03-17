<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [Controllers\AboutController::class, 'index']);
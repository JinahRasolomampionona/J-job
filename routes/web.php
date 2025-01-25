<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home'])->name('index');

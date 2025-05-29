<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;


// Views
Route::get('/', function () {
    return view('home');
});

//  Controllers
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');


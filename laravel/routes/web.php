<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;


// Views
Route::get('/', [AboutController::class, 'index'])
    ->name('about');

//  Controllers
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');


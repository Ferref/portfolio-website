<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


// Views
Route::get('/', function () {
    return view('home');
});


Route::get('/projects', function () {
    return view('projects');
});


//  Controllers
Route::get('/projects-index', [ProjectController::class, 'index']);

<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BlogController::class, 'home']);
Route::get('/blog/resume', [BlogController::class , 'resume']);
Route::get('/blog/projects', [BlogController::class, 'projects']);
Route::get('/blog/contact', [BlogController::class, 'contact']);

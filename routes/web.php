<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\SkincareController;

Route::get('/', [SkincareController::class, 'index']);
Route::get('/product/{skincareProduct}', [SkincareController::class, 'show']);
Route::post('/product/{skincareProduct}/feedback', [SkincareController::class, 'storeFeedback'])->middleware('auth');

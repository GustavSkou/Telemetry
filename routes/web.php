<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [RouteController::class, 'index']);

Route::get('map', function () {
    return view('map');
});

Route::get('/upload', function () {
    return view('upload');
});

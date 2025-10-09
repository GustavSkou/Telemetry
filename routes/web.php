<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [RouteController::class, 'index']);

Route::get('/activities/{id}', [RouteController::class, 'show']);


Route::get('map', function () {
    return view('map');
});

Route::get('/upload/{type}', [RouteController::class, 'create']);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('map', function () {
    return view('map');
});

Route::get('/upload', function () {
    return view('upload');
});

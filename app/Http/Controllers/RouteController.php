<?php

namespace App\Http\Controllers;

use App\Models\Route;

class RouteController extends Controller
{
    // get all route from db
    public function index()
    {
        $routes = Route::all();

        return view('dashboard', ['routes' => $routes]);
    }

    // get a single route from its id
    public function show($id) {}

    public function create() {}

    public function store() {}
}

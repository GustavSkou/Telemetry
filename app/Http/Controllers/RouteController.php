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
    public function show($id) {
        $route = Route::findOrFail($id);

        return view('activities', ['route' => $route]);
    }

    public function create($type) {
        try {
            return view('upload.' . $type);
        } catch (\Throwable $th) {
            $this->index();
        }
    }

    public function store() {}
}

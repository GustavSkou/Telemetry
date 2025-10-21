<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class RouteController extends Controller
{
    // get all route from db
    public function index()
    {
        $routes = Activity::orderBy('date', 'desc')->paginate(10);

        return view('dashboard', ['routes' => $routes]);
    }

    // get a single route from its id
    public function show($id) {
        $route = Activity::findOrFail($id);

        return view('activities', ['route' => $route]);
    }

    public function create($type) {
        // return the view that corresponds to the type, this would be uploading a file or a manual entry
        try {
            return view('upload.' . $type);
        } catch (\Throwable $th) {
            $this->index();
        }
    }

    public function store() {}
}
